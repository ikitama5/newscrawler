from webbrowser import get
import requests
from bs4 import BeautifulSoup


class Liputan():
    def getLiputan(self, news):
        liputan = requests.get("https://www.liputan6.com/regional/bandung")
        soup = BeautifulSoup(liputan.content,features="lxml")
        info = "Liputan 6"
        bandung_title = soup.find_all('article', {
            'class', 'articles--iridescent-list--item articles--iridescent-list--text-item'})
        for each in bandung_title:
            img = each.img.get('data-high-dpi')
            judul = each.find('div', {
                'class', 'articles--iridescent-list--text-item__summary articles--iridescent-list--text-item__summary-seo'}).text.replace('\n', '')
            link = each.a.get('href')
            # desc = each.find('div', {
            #     'class', 'articles--iridescent-list--text-item__summary articles--iridescent-list--text-item__summary-seo', 'summary'}).text.replace('\n', '')
            date = each.find('time', {'articles--iridescent-list--text-item__time timeago','datetime','title'}).text[:-6]
        news.append([img, judul, link, date, info])
        return news

