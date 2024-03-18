# CodeIgniter 4

## 1. Pengertian CodeIgniter

CodeIgniter adalah sebuah framework aplikasi berbasis PHP yang digunakan untuk membangun aplikasi WEB. Framework ini dirancang untuk memudahkan pengembangan aplikasi dengan menyediakan alat dan struktur dasar yang telah siap pakai. Dengan CodeIgniter, pengembang dapat mengembangkan aplikasi web dengan cepat dan efisien karena framework ini menyediakan fitur-fitur seperti manajemen database, pengelolaan URL dan sistem templating. [CodeIgniter 4](https://codeigniter.com).

## 2. Instal CodeIgniter Menggunakan Composer

CodeIgniter memiliki dua metode instalasi, yang pertama bisa download secara manual dan yang kedua menggunakan Composer. Disini saya rekomendasikan download CodeIgniter menggunakan Composer karena dapat diperbarui dengan mudah. Caranya yaitu :

1. Instal [Komposer](https://getcomposer.org/)
2. Create CodeIgniter dengan mengetikan perintah dibawah ini pada terminal.

```
composer create-project codeigniter4/appstarter Nama-Project
```

3. Jalankan Server lokal CodeIgniter dengan perintah dibawah ini

```
php spark serve
```

4. Jalankan Project tersebut dengan cara buka browser lalu isikan (http://localhost:8080)
   ![alt text](image.png)

## 3. Konfigurasi Awal

untuk mengkonfigurasi $bashURL dapat dilakukan dengan buka project CI tadi, bisa menggunakan Visual Studio Code. lalu pergi ke app/config/app.php. disitu $bashURLnya dapat diubah sesuai URL yang dikehendaki. namun cara tersebut kurang efisien karena jika kita akan mengkonfigurasi data base dan lainya harus mencari satu-satu dari folder tersebut. lalu bagaimana cara yang lebih efisien? disini saya gunakan env yang sudah disediakan. cara menggunakanya yaitu ubah file env menjadi .env , lalu hilangkan komentar atau # lalu ubah sesuai kebutuhan.

![alt text](image-1.png)

disini saya ubah CI_ENVIRONMEN = produktion menjadi developmen , gunanya yaitu supaya dalam membuat atau mengembangkan aplikasi tersebut maka jika terjadi kesalahan akan muncul eror dibagianmana pada tampilan wibesitenya
lalu menambahkan $bashURL

## 4. 

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the _public_ folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's _public_ folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter _public/..._, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
