from pprint import pprint
from typing import Union

from downloader import Downloader
from parser import Parser
from model import SeznamZviratek, Zviratko


class Manazer:

    def __init__(self, downloader: Downloader, parser: Parser):
        self.downloader = downloader
        self.parser = parser

    def nacti_data(self) -> SeznamZviratek:
        return self.parser.process(self.downloader.get_file('../zviratka.csv'))

    def nejlevnejsi_zviratko(self, seznam_zviratek: SeznamZviratek) -> str:
        # Cílem úpravy této metody je použít pouze následující řádek:
        # return seznam_zviratek.najdi_nejlevnejsi_zviratko().nazev;

        nejlevnejsi = None
        nazev = ''

        for zviratko in seznam_zviratek.zviratka:
            if nejlevnejsi is None:
                nejlevnejsi = int(zviratko[4])
                nazev = zviratko[1]
                continue

            if int(zviratko[4]) < int(nejlevnejsi):
                nejlevnejsi = zviratko[4]
                nazev = zviratko[1]

        pprint(f'Nejlevnější cena: {nejlevnejsi}')

        return nazev

    def najdi_zviratko_podle_nazvu(self, seznam_zviratek: SeznamZviratek, nazev: str) -> Union[Zviratko, None]:
        return seznam_zviratek.najdi_zviratko_podle_nazvu(nazev)
