from pprint import pprint

from manazer import Manazer
from downloader import Downloader
from parser import SpatnyParser

manazer = Manazer(Downloader(), SpatnyParser())

seznam_zviratek = manazer.nacti_data()

pprint(manazer.nejlevnejsi_zviratko(seznam_zviratek))

#odkomentujte po implementaci
# pprint(manazer.najdi_zviratko_podle_nazvu(seznam_zviratek, 'Lemur kata'))
