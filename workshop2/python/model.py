from typing import Union


class Zviratko:
    def __init__(self):
        pass


class SeznamZviratek:
    def __init__(self, zviratka):
        self.zviratka = zviratka

    def najdi_zviratko_podle_nazvu(self, nazev: str) -> Union[Zviratko, None]:
        pass

    def najdi_nejlevnejsi_zviratko(self) -> Zviratko:
        pass
