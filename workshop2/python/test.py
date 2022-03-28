import unittest

from manazer import Manazer
from downloader import Downloader
from parser import SpatnyParser, SpravnyParser
from model import SeznamZviratek, Zviratko


class MyTestCase(unittest.TestCase):
    def test_spatny_parser(self):
        parser = SpatnyParser()
        data = Downloader().get_file('../zviratka.csv')
        result = parser.process(data)
        self.assertIsInstance(result, SeznamZviratek)
        self.assertEquals(len(result.zviratka), 513)

    def test_nejlevnejsi_zviratko(self):
        manazer = Manazer(Downloader(), SpravnyParser())
        data = manazer.nacti_data()

        self.assertIsInstance(data, SeznamZviratek)
        self.assertEquals(len(data.zviratka), 513)

        self.assertEquals('Lemur kata', manazer.nejlevnejsi_zviratko(data))

    def test_najdi_zviratko(self):
        manazer = Manazer(Downloader(), SpravnyParser())
        data = manazer.nacti_data()

        self.assertIsInstance(data, SeznamZviratek)
        self.assertEquals(len(data.zviratka), 513)

        zviratko = manazer.najdi_zviratko_podle_nazvu(data, 'Lemur kata')
        self.assertIsInstance(data, Zviratko)
        self.assertEquals('Lemur kata', zviratko.nazev)
        self.assertEquals(1007, zviratko.cena)

        zviratko = manazer.najdi_zviratko_podle_nazvu(data, 'Gaviál indický')
        self.assertIsInstance(data, Zviratko)
        self.assertEquals('Gaviál indický', zviratko.nazev)
        self.assertEquals(27149, zviratko.cena)

        zviratko = manazer.najdi_zviratko_podle_nazvu(data, 'Neexistující zvířátko')
        self.assertIsNone(zviratko)



if __name__ == '__main__':
    unittest.main()
