from bs4 import BeautifulSoup
import requests


class One:
    def getOne(self, news):

        OneNews = requests.get("https://www.tvonenews.com/daerah/jabar")
        soup = BeautifulSoup(OneNews.content, features="lxml")
        info = "TV One"
        jabar_title = soup.find_all(
            'div', {'class', 'article-list-row', 'aria-label'})
        for each in jabar_title:
            img = each.img.get('data-original')
            judul = each.find('h2').text.replace('\n', '')
            link = each.a.get('href')
            # desc = each.get_text('div', {'class', 'ali-desc'}).replace('div', '')
            date = each.find('li',{'class', 'ali-date content_center'}).find('span').text[:-8]
        news.append([img, judul, link, date, info])
        return news
