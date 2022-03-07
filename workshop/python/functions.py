from pprint import pprint

from workshop.python.model import Clovek, Student


def vytiskniTrojuhelnik(trojuhelnik: list):
    for radek in trojuhelnik:
        for sloupec in radek:
            print('[', sloupec, ']', end='')
        print('\n')


def vynasob(a, b):
    a * b


def zobrazLichaCisla(cisla):
    for cislo in cisla:
        print(cislo)


def deleni(a, b):
    return a / b


def pozdrav(clovek: Clovek):
    print(f'Ahoj člověku {clovek.jmeno}')


def pozdravStudent(student: Student):
    print(f'Ahoj studente {student.jmeno}, studující {student.obor}')
