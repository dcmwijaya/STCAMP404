![FinalProject-Camp404](https://img.shields.io/badge/FinalProject-Camp404-blue?logo=github&color=%23F7DF1E)
![Laravel8](https://img.shields.io/badge/-Laravel8-white?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# STCAMP404
<p>STCAMP404 merupakan hasil dari pelatihan CAMP404 Batch 15 yang saya kerjakan secara custom.</p>

<br>

### 1. Tools / Framework / Other
| Bagian | Keterangan |
| --- | --- |
| Fitur | Login, Create, Read, Update, Delete, Validation, Pagination, Search, Access Rights by Session/Middleware, ETC |
| Framework Front-end | Bootstrap 5 |
| Framework Back-end | Laravel 8 |
| Tools | Visual Studio Code, XAMPP (PHP Versi 7.4.16), Composer, Git |

<br>

### 2. Environment
<ul style="line-height:180%" style="list-style-type:square;">
<li>Download XAMPP</li>

```bash
https://www.apachefriends.org/index.html
```

<li>Download Visual Studio Code</li>

```bash
https://code.visualstudio.com/
```

<li>Download Composer</li>

```bash
https://getcomposer.org/
```

<li>Download Git</li>

```bash
http://git-scm.com/
```

<li>Buat database dengan nama stcamp404 di local, ketikkan pada browser :</li>

```bash
localhost/phpmyadmin/
```

<li>Import database dengan nama stcamp404.sql</li>
</ul><br>

### 3. Run Server
<ul style="line-height:180%" style="list-style-type:square;">
<li>Pastikan masih berada di dalam folder STCAMP404 -> Klik kanan pilih gitbash lalu ketikkan :</li>

```bash
php artisan serve
```

<li>Buka XAMPP lalu start apache dan mysql</li>
<li>Buka browser anda (Tab baru) lalu ketikkan -> localhost:8080 atau sesuaikan yang ada pada gitbash</li>
</ul><br>

### 4. Akun untuk login
| Role | Email | Password |
| --- | --- | --- |
| Admin | admin@stcamp404.ac.id | 123456 |
| Siswa | 20220101@stcamp404.ac.id | 123456 |

<br>

### 5. Cara Menjalankan Web Secara Local
<ul style="line-height:180%" style="list-style-type:square;">
<li>Download repository ini</li>
<li>Extract file yang di download tadi -> Copy & Paste isi folder yang di download tadi ke -> XAMP (htdocs) -> masuk kedalam folder STCAMP404 atau jika belum ada buat dulu foldernya</li>
<li>Run Server</li>
<li>Login akun</li>
<li>Selesai, selamat menikmati</li>
</ul><br>

### 6. Error Notification
<strong>Jika anda mengalami : Server error 500</strong>

<p>Maka yang harus anda ketikan pada CMD satu per satu sebagai berikut :</p>
<ul style="line-height:180%" style="list-style-type:square;">
<li>Perbarui composer</li>

```bash
composer update
```
    
<li>Generate key</li>

```bash
php artisan key:generate
```

<strong>Langkah Selanjutnya :</strong>
<ul style="line-height:180%" style="list-style-type:square;">
<li>Buat file .env terlebih dahulu dari file .env.example -> copy lalu paste</li>
<li>Buka file tersebut lalu sesuaikan isinya.</li></ul><br>

### 7. Reminder
<p>Jika auto-increment database yang ada masih belum urut, maka anda dapat melakukan hal berikut pada phpMyAdmin :</p>

```bash
SET  @num := 0;
UPDATE your_table SET id = @num := (@num+1);
ALTER TABLE your_table AUTO_INCREMENT =1;
```

<p>Anda dapat memberikan star pada project ini jika dirasa bermanfaat, terima kasih</p>
