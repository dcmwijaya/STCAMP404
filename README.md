![Laravel8](https://img.shields.io/badge/-Laravel8-white?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![HTML5](https://img.shields.io/badge/-HTML%205-purple.svg?&logo=html5)
![CSS3](https://img.shields.io/badge/-CSS%203-green.svg?&logo=css3)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# STCAMP404
<p>STCAMP404 is the result of the regular CAMP404 Batch 15 training that I customized.</p>

<br>

## Features / Framework / Tools
| Part | Description |
| --- | --- |
| Features | Login, Create, Read, Update, Delete, Validation, Pagination, Search, Charts, Access Rights by Session/Middleware, ETC |
| Framework | Laravel 8, Bootstrap 5 |
| Tools | Visual Studio Code, XAMPP (PHP Version 7.4), Composer, Git |

<br>

## Download & Install
1. XAMPP with PHP version 7.4 :

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

## Database
1.Open ``` XAMPP ```, then start the ``` Apache ``` & ``` MySQL ``` section. This aims to be able to support the website optimally.<br><br>
2.Access the browser first in order to open the database admin panel, please copy the following link: ``` localhost/phpmyadmin/ ```.<br><br>
3.Create a database called ``` stcamp404 ``` on local.<br><br>
4.Open the ``` stcamp404 ``` database and Import ``` stcamp404_db.sql ``` in the ``` STCAMP404/public/sql ``` directory.<br><br>
5.Then open the XAMP file: ``` php.ini ``` -> remove ``` semicolon (;) ``` in front of ``` extension=intl ``` -> save.

<br>

## Default Account
| Role | Email | Full Name | Password |
| --- | --- | --- | --- |
| Admin | admin@stcamp404.ac.id | Anastasya Geralda | 123456 |
| Student | 20220101@stcamp404.ac.id | Jaya Mangunati | 123456 |
| Student | 20220102@stcamp404.ac.id | Jadiyan Marto | 123456 |

<br>

## Get Started
1. Download this repository.<br>
2. Open the ``` STCAMP404 ``` directory, then open ``` GitBash ``` inside that directory.
   <ul>
       <li>First, check whether there is a problem or not, if there is still an error, just adjust it according to the situation.</li>
       <li>Secondly, this step is mandatory, so please copy the following command:<br><br></li>
       
   ````bash
   php artisan serve
   ````
   </ul>
3. Open your browser (New tab), then type -> ``` http://127.0.0.1:8000/ ``` or customize the one on your GitBash.<br>
4. Please login and access the features, enjoy [Done].
    
<br>

## Highlights
<table>
<tr>
<th width="280">Home View</th>
<th width="280">Activity Information View</th>
<th width="280">Dashboard View</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107734-c8f90cf2-ac4b-41de-85b4-ebc80382eb12.png" alt="Home"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192106990-2391de9b-f4c3-4115-a34c-d771242cd0f0.png" alt="Info-Kegiatan"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107108-fdc72d2c-ebf8-4685-acda-3d40c07538b8.png" alt="Dashboard"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Registration View</th>
<th width="280">Forgot Password View</th>
<th width="280">User Training View</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107695-fb740c4a-6dcd-41d6-b011-244e41a92150.png" alt="Registrasi"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107714-1ba08a9b-e547-4bd9-8d40-5d23ecb03e8d.png" alt="Lupa-Password"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107799-2f87673d-8f71-4c74-8df6-cfa9e6e8a49e.png" alt="Pelatihan-Users"></td>
</tr></table>
<table>
<tr>
<th width="280">Training Data View</th>
<th width="280">Student Data View</th>
<th width="280">Change Data View</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/192107215-f82e105a-3203-449f-9a62-19a86957665e.png" alt="Data-Pelatihan"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192108245-5bf3e566-00f5-4d3b-9af5-ddb50b0b6a37.png" alt="Data-Siswa"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/192107438-279ae6dd-f53a-45ac-b3b4-074a9fd2a5ad.png" alt="Ubah-Data"></td>
</tr></table>

<br>

## Reminder
<p>If the database auto-increment is still not in order, then you can do the following in phpMyAdmin:</p>

```bash
SET  @num := 0;
UPDATE your_table SET id = @num := (@num+1);
ALTER TABLE your_table AUTO_INCREMENT =1;
```

<br>

## Disclaimer
This application has been created by including third-party sources. Third parties here are service providers, whose services are in the form of libraries, frameworks, and others. I thank you very much for the service. It has proven to be very helpful and implementable.

<br>

## LICENSE
MIT License - Copyright (c) 2020 - Devan C. M. Wijaya, S.Kom

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
