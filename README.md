# **Absensi App By : Raivan Putra**

_Features:_

-   CRUD Posisi (CRUD Jabatan/Posisi)
-   CRUD Users (Admin, Operator and Users (Employees))
-   CRUD Liburan (CRUD Hari Libur)
-   CRUD Kehadiran (Dapat memiliki beberapa kehadiran dan hanya dapat menggunakan tombol atau kehadiran menggunakan QR Code)
-   Menggunakan Datatables (Powergrid livewire)
-   Dapat Mengekspor ke Excel dan CSV
-   dan banyak lagi...

## Cara Install di Local

-   Hal yang harus dipersiapkan:
    -   git
    -   composer
    -   php v8.1

```sh
# clone terlebih dahulu lewat cli (cmd, bash, atau yg lain)
git clone https://github.com/RaivanPutra/absensi-app.git

# masuk ke foldernya
cd absensi_app_laravel

# install semua package
composer install

# copy file .env.example
cp .env.example .env

# setelah itu, setting .env file seperti nama database (DB_DATABASE), username dan passwordnya
# lalu buat database baru dari phpmyadmin atau cli langsung juga bisa dengan nama sesuai DB_DATABASE yang ada di file .env
php artisan key:generate
php artisan migrate
php artisan serve

# lalu buka browser dengan url: http://localhost:8000/
```
