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
</ul><br>
<strong>Langkah Selanjutnya :</strong>
<ul style="line-height:180%" style="list-style-type:square;">
<li>Buat file .env terlebih dahulu dari file .env.example -> copy lalu paste</li>
<li>Buka file tersebut lalu sesuaikan isinya.</li>
</ul><br>

### 7. Review
<table>
<tr>
<th>Menu Home</th>
<th>Menu Info Kegiatan</th>
<th>Menu Dashboard</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192106681-ed063d96-f9bf-4ee0-848a-dadcf12a96f8.png" height="200" width="300" alt="Home"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192106990-2391de9b-f4c3-4115-a34c-d771242cd0f0.png" height="200" width="300" alt="Info-Kegiatan"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107108-fdc72d2c-ebf8-4685-acda-3d40c07538b8.png" height="200" width="300" alt="Dashboard"></td>
</tr>
</table>
<table>
<tr>
<th>Menu Data Pelatihan</th>
<th>Menu Data Siswa</th>
<th>Menu Ubah Data</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107215-f82e105a-3203-449f-9a62-19a86957665e.png" height="200" width="300" alt="Data-Pelatihan"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107371-c8842c98-3e4f-4c17-8639-89cbd6a123c1.png" height="200" width="300" alt="Data-Siswa"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107438-279ae6dd-f53a-45ac-b3b4-074a9fd2a5ad.png" height="200" width="300" alt="Ubah-Data"></td>
</tr></table><br>

### 8. Reminder
<p>Jika auto-increment database yang ada masih belum urut, maka anda dapat melakukan hal berikut pada phpMyAdmin :</p>

```bash
SET  @num := 0;
UPDATE your_table SET id = @num := (@num+1);
ALTER TABLE your_table AUTO_INCREMENT =1;
```

<p>Anda dapat memberikan star pada project ini jika dirasa bermanfaat, terima kasih</p>
