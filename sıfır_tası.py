listedeki_sayi = None
lste = []

while True:
    listedeki_sayi = input("Çıkmak için a harfine basmanız yeterli.Tam Sayı Giriniz:")

    try:
        if listedeki_sayi == "a":
            break
        elif listedeki_sayi == "0":
            lste.insert(0,listedeki_sayi)
        else:
            lste.append(listedeki_sayi)
    except:
        print("Bir tam sayı girdiğinizden emin olunuz:")

print("Sıfır Taşına Göre Listeniz: ", lste)

