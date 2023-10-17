x = [
    "Sergio Manuel Morquecho soto",
    'lluvia Fernanda Garcia beltran',
    'Saul noe Rios Martinez',
    'Bryan Ismael Salazar lizarraga',
    'adbeel gadiel munos Salazar',
    'Roberto Alejandro castellano guillen'
]
from random import choice



def a():
    names = ''
    for j in x:
        names += choice([*j])
    return names
while True:
    print('----------------------------------------------------------------')
    p = input('press enter')
    if p == 'exit':
        break
    print("name:",a())