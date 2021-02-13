liste = []
adet = int(input('Kaç adet Sayi Girilecektir: '))
for n in range(adet):
    sayi = int(input('bir sayi giriniz: '))
    liste.append(sayi)
kontrol=0    
for x in liste:
    if x % 2 == 1 and x >= kontrol:
        kontrol = x

print("Girilen en büyük tek sayı: : ",kontrol)

