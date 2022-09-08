![FinalProject-Camp404](https://img.shields.io/badge/FinalProject-Camp404-blue?logo=github&color=%23F7DF1E)
![Laravel8](https://img.shields.io/badge/-Laravel8-blue?style=flat&logo=Codeigniter)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-tosca.svg?style=flat&logo=mysql&logoColor=white)

## STCAMP404
<strong>STCAMP404 merupakan hasil dari pelatihan CAMP404 Batch 15 yang saya kerjakan secara custom.</strong>

<br>

## Tools / Framework / Other
| Bagian | Keterangan |
| --- | --- |
| Fitur | Login, Create, Read, Update, Delete, Validation, Pagination, Search, Access Rights by Session/Middleware, ETC |
| Framework Front-end | Bootstrap 5 |
| Framework Back-end | Laravel 8 |
| Tools | Visual Studio Code, XAMPP (PHP Versi 7.4.16), Composer, Git |

<br>

## Environment
1. Download XAMPP
```bash
https://www.apachefriends.org/index.html
```
2. Download Visual Studio Code 
```bash
https://code.visualstudio.com/
```
3. Download Composer
```bash
https://getcomposer.org/
```
4. Download Git
```bash
http://git-scm.com/
```
5. Buat database dengan nama stcamp404 di local, ketikkan pada browser :
```bash
localhost/phpmyadmin/
```
6. Import database dengan nama stcamp404.sql

<br>

## Run Server
1. Pastikan masih berada di dalam folder STCAMP404 -> Klik kanan pilih gitbash lalu ketikkan :
```bash
$php artisan serve
```
2. Buka XAMPP lalu start apache dan mysql
3. Buka browser anda (Tab baru) lalu ketikkan -> localhost:8080 atau sesuaikan yang ada pada gitbash

<br>

## Akun untuk login
| Role | Email | Password |
| --- | --- | --- |
| Admin | admin@stcamp404.ac.id | 123456 |
| Siswa | 20220101@stcamp404.ac.id | 123456 |

<br>

## Cara Menjalankan Web Secara Local
1. Download repository ini
2. Extract file yang di download tadi -> Copy & Paste isi folder yang di download tadi ke -> XAMP (htdocs) -> masuk kedalam folder STCAMP404 / jika belum ada buat dulu foldernya
3. Run Server
4. Login akun
5. Selesai, selamat menikmati

<br>

## Error Notification
<strong>Jika anda mengalami : Server error 500</strong>

Maka yang harus anda ketikan pada CMD satu per satu sebagai berikut :
1. Perbarui composer
```bash
composer update
```
2. Buat file .env dari file .env.example lalu sesuaikan juga database dan app name.
3. Generate key
```bash
$php artisan key:generate
```
