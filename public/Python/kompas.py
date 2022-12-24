import json
import requests
from bs4 import BeautifulSoup

class Kompas:
    def getKompas(self,news):
        kompas = requests.get("https://www.kompas.com/tag/bandung")
        soup = BeautifulSoup(kompas.content,features="lxml")
        info = "Kompas"
        kompas_title = soup.find_all('div', {'class', 'article__list clearfix'})
        for each in kompas_title:
                img = each.img.get('src')
                judul = each.find('h3', {'class', 'article__title article__title--medium'}).text.replace('\n', '')
                link = each.a.get('href')
                date = each.find('div',{'class', 'article__date'}).text
                news.append([img, judul, link, date, info])
        return news