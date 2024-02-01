[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/STCAMP404)
![Laravel8](https://img.shields.io/badge/-Laravel8-white?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![HTML5](https://img.shields.io/badge/-HTML%205-purple.svg?&logo=html5)
![CSS3](https://img.shields.io/badge/-CSS%203-green.svg?&logo=css3)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# STCAMP404
<p>STCAMP404 adalah hasil dari pelatihan reguler CAMP404 Batch 15 yang saya sesuaikan.</p>

<br>

## Kebutuhan Proyek
| Bagian | Deskripsi |
| --- | --- |
| Fitur | Masuk, Buat, Baca, Ubah, Hapus, Paginasi, Pencarian, Validasi, Hak akses dengan sesi, Grafik, DLL |
| Kerangka Kerja | Laravel 8, Bootstrap 5 |
| Peralatan | Visual Studio Code, XAMPP (PHP Versi 7.4), Git |

<br>

## Unduh & Instal
1. XAMPP dengan PHP versi 7.4 :
   ```bash
   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
   ```

2. Visual Studio Code :

   ```bash
   https://code.visualstudio.com/docs/?dv=win
   ```

3. Git :

   ```bash
   https://git-scm.com/download/win
   ```

<br>

## Basis data
1. Buka ``` XAMPP ```, lalu tekan tombol mulai di bagian ``` Apache ``` & ``` MySQL ```. Hal ini bertujuan untuk dapat mendukung website secara optimal.<br><br>
2. Akses peramban terlebih dahulu untuk membuka panel admin basis data, silakan salin tautan berikut: ``` localhost/phpmyadmin/ ```.<br><br>
3. Buat basis data bernama ``` stcamp404 ``` di lokal.<br><br>
4. Buka basis data ``` stcamp404 ``` dan Impor ``` stcamp404_db.sql ``` di direktori ``` STCAMP404/public/sql ```.<br><br>
5. Kemudian buka berkas XAMP: ``` php.ini ``` -> hapus ``` titik koma (;) ``` di depan ``` extension=intl ``` -> simpan.

<br>

## Akun Bawaan
| Peran | Surel | Nama Lengkap | Kata Sandi |
| --- | --- | --- | --- |
| Admin | admin@stcamp404.ac.id | Anastasya Geralda | 123456 |
| Siswa | 20220101@stcamp404.ac.id | Jaya Mangunati | 123456 |
| Siswa | 20220102@stcamp404.ac.id | Jadiyan Marto | 123456 |

<br>

## Memulai
1. Unduh  dan ekstrak repositori ini.<br>
2. Buka direktori ``` STCAMP404 ```, lalu buka ``` GitBash ``` di dalam direktori tersebut.
   <ul>
       <li>Pertama, periksa apakah ada masalah atau tidak, jika masih ada kesalahan, sesuaikan saja dengan situasinya.</li>
       <li>Kedua, langkah ini wajib dilakukan, jadi silakan salin perintah berikut ini:<br><br></li>
       
   ````bash
   php artisan serve
   ````
   </ul>
3. Buka ``` peramban ``` Anda (Tab baru), lalu ketik -> ``` http://127.0.0.1:8000/ ``` atau sesuaikan dengan yang ada di ``` GitBash ``` Anda.<br>
4. Silakan masuk dan akses fitur-fiturnya, selamat menikmati [Selesai].

<br>

## Sorotan
<table>
<tr>
<th width="280">Tampilan Beranda</th>
<th width="280">Tampilan Info Kegiatan</th>
<th width="280">Tampilan Dasbor</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107734-c8f90cf2-ac4b-41de-85b4-ebc80382eb12.png" alt="Home"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192106990-2391de9b-f4c3-4115-a34c-d771242cd0f0.png" alt="Info-Kegiatan"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107108-fdc72d2c-ebf8-4685-acda-3d40c07538b8.png" alt="Dashboard"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Tampilan Registrasi</th>
<th width="280">Tampilan Lupa Password</th>
<th width="280">Tampilan Pelatihan Pengguna</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107695-fb740c4a-6dcd-41d6-b011-244e41a92150.png" alt="Registrasi"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107714-1ba08a9b-e547-4bd9-8d40-5d23ecb03e8d.png" alt="Lupa-Password"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107799-2f87673d-8f71-4c74-8df6-cfa9e6e8a49e.png" alt="Pelatihan-Users"></td>
</tr></table>
<table>
<tr>
<th width="280">Tampilan Data Pelatihan</th>
<th width="280">Tampilan Data Siswa</th>
<th width="280">Tampilan Ubah Data</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107215-f82e105a-3203-449f-9a62-19a86957665e.png" alt="Data-Pelatihan"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192108245-5bf3e566-00f5-4d3b-9af5-ddb50b0b6a37.png" alt="Data-Siswa"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107438-279ae6dd-f53a-45ac-b3b4-074a9fd2a5ad.png" alt="Ubah-Data"></td>
</tr></table>

<br>

## Pengingat
<p>Jika penambahan otomatis basis data masih belum beres, maka Anda dapat melakukan hal berikut ini di phpMyAdmin:</p>

```bash
SET  @num := 0;
UPDATE your_table SET id = @num := (@num+1);
ALTER TABLE your_table AUTO_INCREMENT =1;
```

<br>

## Penafian
Aplikasi ini dibuat dengan menyertakan sumber-sumber dari pihak ketiga. Pihak ketiga di sini adalah penyedia layanan, yang layanannya berupa pustaka, kerangka kerja, dan lain-lain. Saya ucapkan terima kasih banyak atas layanannya. Telah terbukti sangat membantu dan dapat diimplementasikan.

<br>

## LISENSI 
LISENSI MIT - Hak Cipta © 2020 - Devan C. M. Wijaya, S.Kom

Dengan ini diberikan izin tanpa biaya kepada siapa pun yang mendapatkan salinan perangkat lunak ini dan file dokumentasi terkait perangkat lunak untuk menggunakannya tanpa batasan, termasuk namun tidak terbatas pada hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan/atau menjual salinan Perangkat Lunak ini, dan mengizinkan orang yang menerima Perangkat Lunak ini untuk dilengkapi dengan persyaratan berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus menyertai semua salinan atau bagian penting dari Perangkat Lunak.

DALAM HAL APAPUN, PENULIS ATAU PEMEGANG HAK CIPTA DI SINI TETAP MEMILIKI HAK KEPEMILIKAN PENUH. PERANGKAT LUNAK INI DISEDIAKAN SEBAGAIMANA ADANYA, TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, OLEH KARENA ITU JIKA TERJADI KERUSAKAN, KEHILANGAN, ATAU LAINNYA YANG TIMBUL DARI PENGGUNAAN ATAU URUSAN LAIN DALAM PERANGKAT LUNAK INI, PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB, KARENA PENGGUNAAN PERANGKAT LUNAK INI TIDAK DIPAKSAKAN SAMA SEKALI, SEHINGGA RISIKO ADALAH MILIK ANDA SENDIRI.
