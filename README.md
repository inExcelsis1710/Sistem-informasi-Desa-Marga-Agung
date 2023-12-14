<div align="center">
<h1> Sistem Informasi Desa Marga Agung </h1>

## **Installation Steps**
There are 2 stages in the Installation Stage, namely Pre-Install & Intra-Install

### **Pre-Install**
Prepare the tools needed, namely:
<li> Composer :</li>

```bash
https://getcomposer.org/download/
```

<li> Laravel 5 :</li>

```bash
https://laravel.com/docs/10.x
```

<li> XAMPP :</li>

```bash
https://www.apachefriends.org/download.html
```

<li> Git Bash :</li>

```bash
https://git-scm.com/downloads
```

### **Intra-Install**
<li> Jalankan GitBash dan <i>clone</i> repository GitHub ini</li>

```bash
https://github.com/kevinsimorangkir21/SID3B.git
```

<li> Open Visual Studio Code / Kode Editor lainnya </li>

<li> Jalankan Command Prompt / Terminal sejenisnya </li>

```bash
composer update
```

<li> Jalankan XAMPP, buat database. Bisa diakses pada link berikut </li>

```bash
http://localhost/phpmyadmin
```

<li> Copy .env.example  / jalankan CLI dengan command :</li>

```bash
cp .env.example .env
```

<li> Ubah file nama .env.example menjadi .env </li>

```bash
http://localhost/phpmyadmin
```

<li> Akses kembali file .env dan ubah DB_DATABASE dengan nama database yang sudah dibuat di LocalHost </li>

<li> Jalankan kembali Command Prompt / Terminal dan inputkan : </li>

```bash
php artisan migrate:fresh --seed
```

```bash
php artisan vendor:publish
```

```bash
php artisan key:generate
```

<li> Untuk mengakses projek ini di web, jalankan command : </li>

```bash
php artisan serve
```
