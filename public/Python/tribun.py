from bs4 import BeautifulSoup
import requests

class Tribun:
    def getTribun(self,news):
        # link
        Tribun = requests.get("https://jabar.tribunnews.com/jabar-region")
        # insert bs4
        soup = BeautifulSoup(Tribun.content, features="lxml")
        info = "Tribun Jabar"
        # parent tags
        tribun = soup.find_all ('li',{'class','p1520 art-list pos_rel'})
        # loop tag finding from parent
        for each in tribun:
            img = each.img.get('src')
            judul = each.a.get('title')
            link = each.a.get('href')
            date = each.find('div',{'class','grey pt5','foot timeago'}).find('time').get('title')[:-9].replace('-', '/')
        news.append([img, judul, link, date, info])
        return news