import csv

from model import SeznamZviratek


class Parser:

    def process(self, data) -> SeznamZviratek:
        pass


class SpatnyParser(Parser):
    def process(self, data: str) -> SeznamZviratek:
        lines = data.splitlines()
        x = csv.reader(lines, delimiter=';')
        x = list(x)
        x.pop(0)
        return SeznamZviratek(x)


class SpravnyParser(Parser):
    def process(self, data) -> SeznamZviratek:
        return super().process(data)
