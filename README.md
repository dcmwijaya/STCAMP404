![FinalProject-Camp404](https://img.shields.io/badge/FinalProject-Camp404-blue?logo=github&color=%23F7DF1E)
![Laravel8](https://img.shields.io/badge/-Laravel8-white?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

## STCAMP404
<p>STCAMP404 merupakan hasil dari pelatihan CAMP404 Batch 15 yang saya kerjakan secara custom.</p>

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
<p>1. Download XAMPP</p>
```bash
https://www.apachefriends.org/index.html
```
<p>2. Download Visual Studio Code</p>
```bash
https://code.visualstudio.com/
```
<p>3. Download Composer</p>
```bash
https://getcomposer.org/
```
<p>4. Download Git</p>
```bash
http://git-scm.com/
```
<p>5. Buat database dengan nama stcamp404 di local, ketikkan pada browser :</p>
```bash
localhost/phpmyadmin/
```
<p>6. Import database dengan nama stcamp404.sql</p>

<br>

## Run Server
<p>1. Pastikan masih berada di dalam folder STCAMP404 -> Klik kanan pilih gitbash lalu ketikkan :</p>
```bash
$php artisan serve
```
<p>2. Buka XAMPP lalu start apache dan mysql</p>
<p>3. Buka browser anda (Tab baru) lalu ketikkan -> localhost:8080 atau sesuaikan yang ada pada gitbash</p>

<br>

## Akun untuk login
| Role | Email | Password |
| --- | --- | --- |
| Admin | admin@stcamp404.ac.id | 123456 |
| Siswa | 20220101@stcamp404.ac.id | 123456 |

<br>

## Cara Menjalankan Web Secara Local
<p>1. Download repository ini</p>
<p>2. Extract file yang di download tadi -> Copy & Paste isi folder yang di download tadi ke -> XAMP (htdocs) -> masuk kedalam folder STCAMP404 / jika belum ada buat dulu foldernya</p>
<p>3. Run Server</p>
<p>4. Login akun</p>
<p>5. Selesai, selamat menikmati</p>

<br>

## Error Notification
<strong>Jika anda mengalami : Server error 500</strong>

<p>Maka yang harus anda ketikan pada CMD satu per satu sebagai berikut :</p>
<p>1. Perbarui composer</p>
```bash
composer update
```
<p>2. Buat file .env dari file .env.example lalu sesuaikan juga database dan app name</p>
<p>3. Generate key</p>
```bash
$php artisan key:generate
```
