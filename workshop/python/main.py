from pprint import pprint
from functions import vytiskniTrojuhelnik, vynasob, deleni
from workshop.python.functions import zobrazLichaCisla, pozdrav, pozdravStudent
from workshop.python.kalkulacka import JednoduchyVypocetniModel, Kalkulacka, SlozityVypocetniModel
from workshop.python.model import Clovek, Student

print('============LEVEL1=============')

print('==Úkol 1==')
trojuhelnik = []
for i in range(5):
    trojuhelnik.append([])
    for j in range(i):
        trojuhelnik[i].append('*')

vytiskniTrojuhelnik(trojuhelnik)

print('==Úkol 2==')
a = 2
b = 3
c = vynasob(a, b)
print(f'Výsledek násobení čísel {a} a {b} je {c}')

print('==Úkol 3==')
cisla = [1, 2, 3, 4, 5, 6, 7, 8, 9]
zobrazLichaCisla(cisla)

print('===============================\n')

print('============LEVEL2=============\n')
print('==Úkol 1==')
print(deleni(2, 1))
# print(deleni(2, 0))
# print(deleni('abc', 0))


print('===============================\n')

print('============LEVEL3=============\n')
print('==Úkol 1==')

clovek = Clovek('Petr')
student = Student('Standa', 'programator')

pozdrav(clovek)
pozdrav(student)

pozdravStudent(student)
# pozdravStudent(clovek)

print('==Úkol 2==')

jednoduchy_model = JednoduchyVypocetniModel()
kalkulacka = Kalkulacka(jednoduchy_model)

print(kalkulacka.secti(1, 1))
print(kalkulacka.odecti(1, 1))

# slozity_model = SlozityVypocetniModel()
# kalkulacka = Kalkulacka(slozity_model)
#
# print(kalkulacka.secti(1, 1))
# print(kalkulacka.odecti(1, 1))

print('===============================\n')
