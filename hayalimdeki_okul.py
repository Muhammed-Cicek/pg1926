class Okul():
    def __init__(self,okul_adi,okul_turu, ogretmen_sayisi, ogrenci_sayisi, sinif_sayisi, calisan_sayisi, ders_suresi):
        self.okul_adi = okul_adi
        self.okul_turu  = okul_turu
        self.ogretmen_sayisi = ogretmen_sayisi
        self.ogrenci_sayisi = ogrenci_sayisi
        self.sinif_sayisi = sinif_sayisi
        self.calisan_sayisi = calisan_sayisi
        self.ders_suresi = ders_suresi

x=Okul("Bahçelievler İlk Öğretim Okulu\n", 
"Okulun Türü = ilköğretim Okulu\n",
"Öğretmen Sayısı =  25\n",
"Öğrenci Sayısı = 425\n",
"Sınıf Sayısı = 17\n",
"Çalışan Sayısı = 10\n",
"Ders Süresi= 40 dk\n"
)

y=Okul("Çiçek Anadolu Lisesi\n", 
"Okulun Türü = anadolu lisesi\n", 
"Öğretmen Sayısı = 33\n",
"Öğrenci Sayısı = 520\n",
"Sınıf Sayısı = 28\n",
"Çalışan Sayısı = 13\n",
"Ders Süresi= 45 dk\n",
)

z=Okul("Bozok Üniversitesi\n", 
"Okulun Türü = üniversite\n",
"Öğretmen Sayısı = 120\n",
"Öğrenci Sayısı = 15000\n",
"Sınıf Sayısı = 150\n",
"Çalışan Sayısı = 30\n",
"Ders Süresi=3 saat\n")

Okullar = [x,y,z]                
for okul in Okullar:
    print(okul.okul_adi,
     okul.okul_turu,
     okul.ogretmen_sayisi,
     okul.ogrenci_sayisi, 
     okul.sinif_sayisi, 
     okul.calisan_sayisi, 
     okul.ders_suresi)
