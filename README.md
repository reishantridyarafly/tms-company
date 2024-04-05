# Demo
[TMS Company](https://tms-company.testdemo.my.id/) Demo website.

# Panduan Menjalankan Program

Ini adalah panduan langkah demi langkah untuk menjalankan aplikasi Laravel dari awal hingga selesai. Ikuti instruksi di bawah ini untuk menginstal dependensi, mengatur database, dan menjalankan server pengembangan Laravel.

## Persyaratan

Sebelum memulai, pastikan Anda memenuhi persyaratan berikut:

- [PHP](https://www.php.net/) versi 8.0 atau lebih baru.
- [Composer](https://getcomposer.org/) terinstal di sistem Anda.
- [MySQL](https://www.mysql.com/) atau database lain yang didukung oleh Laravel.

## Langkah 1: Clone Repositori

1. Buka terminal atau command prompt pada komputer Anda.
2. Pindah ke direktori tempat Anda ingin mengkloning repositori Laravel.
3. Jalankan perintah berikut untuk mengkloning repositori:

   ```shell
   git clone https://github.com/reishantridyarafly/tms-company.git
   
4. Setelah selesai, pindah ke direktori proyek yang baru dibuat:
   
    ```shell
    cd tms-company
    
## Langkah Langkah 2: Instal Dependensi

Jalankan perintah berikut untuk menginstal semua dependensi Laravel menggunakan Composer:

    composer install

Perintah ini akan membaca file composer.json dan mengunduh serta menginstal semua paket yang diperlukan untuk menjalankan aplikasi Laravel.

Jika Anda sudah memiliki composer.lock, Anda juga dapat menjalankan perintah berikut untuk memastikan Anda menggunakan versi dependensi yang tepat:

    composer install --prefer-dist --no-interaction

## Langkah 3: Konfigurasi

Salin file .env.example menjadi .env:

    cp .env.example .env

Buka file .env menggunakan editor teks favorit Anda dan ubah bagian APP_NAME - APP_URL seperti code dibawah:

    APP_NAME="TMS Company"
    APP_ENV=production
    APP_KEY=base64:o5UtkRywKcptOp8J47hhmTDoI4S9RWpYyOLmZWYkq+8=
    APP_DEBUG=true
    APP_URL=http://localhost

Simpan perubahan pada file .env.

## Langkah 4: Simpan Tautan Penyimpanan

Jalankan perintah berikut untuk membuat tautan simbolis ke direktori penyimpanan:

    php artisan storage:link

Ini akan menghubungkan direktori penyimpanan aplikasi ke direktori publik, sehingga file-file yang disimpan dapat diakses melalui web.

## Langkah 5: Jalankan Server Pengembangan

Terakhir, jalankan perintah berikut untuk menjalankan server pengembangan Laravel:

    php artisan serve

Server pengembangan akan memulai aplikasi Laravel di [http://127.0.0.1:8000]. secara default.

Buka browser web dan kunjungi [http://127.0.0.1:8000]. untuk melihat aplikasi Laravel yang berjalan.

Selamat! Anda telah berhasil menjalankan aplikasi Laravel dari awal hingga selesai. Anda sekarang dapat mulai mengembangkan dan menguji aplikasi Anda.