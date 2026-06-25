@echo off
title Menjalankan XAMPP dan Project Web

echo Menyalakan Apache...
start "" "C:\xampp\apache_start.bat"

echo Menyalakan MySQL...
start "" "C:\xampp\mysql_start.bat"

echo Tunggu sebentar...
timeout /t 5 /nobreak >nul

echo Membuka browser...
start "" "http://localhost/praktikumweb2/public"

exit