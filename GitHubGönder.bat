@echo off
cd /d C:\projex\ # Proje klasörünü güncelle

echo Git değişiklikleri ekleniyor...
git add .

echo Commit mesajı: Otomatik gönderim
git commit -m "Otomatik gönderim"

echo GitHub'a gönderiliyor...
git push origin main

pause
