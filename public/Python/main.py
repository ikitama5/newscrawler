import json
from pickle import NEWFALSE
from pydoc import importfile
from types import new_class
from detikscrap import Detik
from kompas import Kompas
from liputan6 import Liputan
from one import One
from tribun import Tribun

news = []


def scrap():
    detik = Detik()
    detik.getDetik(news)

    kompas = Kompas()
    kompas.getKompas(news)

    liputan6 = Liputan()
    liputan6.getLiputan(news)

    tvone = One()
    tvone.getOne(news)
    
    tribun = Tribun()
    tribun.getTribun(news)

    print(json.dumps(news))


scrap()
