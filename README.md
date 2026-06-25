```
NAMA : FADHLUROHMAN FATIKH NAVINTINO
NIM : 312210368
PRAKTIKUM PEMROGRAMAN WEB 2
```

# Praktikum Pemrograman Web 2

Repository ini berisi hasil praktikum mata kuliah **Pemrograman Web 2** menggunakan **CodeIgniter 4** sebagai backend utama. Pengembangan dilakukan secara bertahap, mulai dari instalasi CodeIgniter, pembuatan halaman dasar, CRUD artikel, login admin, relasi tabel, upload gambar, AJAX, REST API, frontend VueJS, hingga autentikasi SPA dan pengamanan API menggunakan token.

Pada tahap akhir, project ini sudah sampai pada **Praktikum 14**, yaitu penerapan **Token-Based Authentication** pada REST API dan penggunaan **Axios Interceptors** pada frontend VueJS.

---

## Teknologi yang Digunakan

- PHP 8
- CodeIgniter 4
- MySQL / MariaDB
- XAMPP
- Visual Studio Code
- phpMyAdmin
- Postman
- VueJS 3
- Vue Router
- Axios

---

## Struktur Project Utama

```text
praktikumweb2
├── app
│   ├── Controllers
│   │   ├── Artikel.php
│   │   ├── AjaxController.php
│   │   ├── Post.php
│   │   ├── User.php
│   │   └── Api/Auth.php
│   ├── Filters
│   │   ├── Auth.php
│   │   └── ApiAuthFilter.php
│   ├── Models
│   │   ├── ArtikelModel.php
│   │   ├── KategoriModel.php
│   │   └── UserModel.php
│   └── Views
├── file
├── gambar
├── lab8_vuejs
│   ├── index.html
│   └── assets
│       ├── css/style.css
│       └── js
│           ├── app.js
│           └── components
│               ├── Home.js
│               ├── Artikel.js
│               ├── About.js
│               └── Login.js
├── public
└── README.md
```

---

## Cara Menjalankan Project

### 1. Menjalankan Backend CodeIgniter

Buka terminal pada folder project:

```bash
cd C:\xampp\htdocs\praktikumweb2
php spark serve
```

Backend akan berjalan pada alamat:

```text
http://localhost:8080
```

### 2. Menjalankan Frontend VueJS SPA

Pastikan Apache XAMPP aktif, lalu buka:

```text
http://localhost/praktikumweb2/lab8_vuejs/index.html#/
```

### 3. Akun Login Lokal

Akun bawaan yang digunakan untuk pengujian lokal:

```text
Username : admin
Password : admin123
```

Selain username, sistem login juga dapat menerima ID atau email yang tersimpan pada tabel `user`.


# Praktikum 1 - PHP Framework CodeIgniter

Pada praktikum awal, project CodeIgniter 4 disiapkan sebagai dasar pengembangan web. Tahapan yang dilakukan meliputi instalasi framework, pengaturan file `.env`, aktivasi mode development, penggunaan CLI, pembuatan route, controller, dan view dasar.

Perintah yang digunakan untuk menjalankan server lokal CodeIgniter:

```bash
php spark serve
```

Dokumentasi hasil:

<img src="gambar/instalasi.png" >

<img src="gambar/halaman utama.png" >
---

# Praktikum 2 - Framework Lanjutan CRUD

Pada praktikum ini dibuat fitur CRUD artikel. Database `lab_ci4` digunakan untuk menyimpan data artikel. Model `ArtikelModel.php` dibuat agar proses pengambilan dan penyimpanan data lebih terstruktur.

Fitur yang dibuat pada tahap ini:

- menampilkan daftar artikel,
- menampilkan detail artikel berdasarkan slug,
- menambahkan artikel,
- mengubah artikel,
- menghapus artikel.

Dokumentasi hasil:

<img src="gambar/artikel model.png" >

<img src="gambar/artikel.png" >

---

# Praktikum 3 - View Layout dan View Cell

Pada tahap ini, tampilan dibuat lebih rapi dengan menerapkan layout utama. File `app/Views/layout/main.php` digunakan sebagai template yang berisi header, navigasi, konten utama, sidebar, dan footer.

Selain itu, dibuat juga **View Cell** untuk menampilkan daftar artikel terbaru pada bagian sidebar.

Dokumentasi hasil:

<img src="gambar/main.png" >

<img src="gambar/artikel terkini.png" >

---

# Praktikum 4 - Modul Login

Praktikum ini menambahkan sistem login admin menggunakan tabel `user`. Setelah login berhasil, data pengguna disimpan ke session. Halaman admin kemudian dilindungi menggunakan filter `auth`, sehingga pengguna yang belum login tidak bisa langsung mengakses halaman pengelolaan artikel.

File penting pada tahap ini:

- `app/Controllers/User.php`
- `app/Models/UserModel.php`
- `app/Filters/Auth.php`
- `app/Views/user/login.php`
- `app/Config/Filters.php`
- `app/Config/Routes.php`

Dokumentasi hasil:

<img src="gambar/modul login.png" >

<img src="gambar/admin artikel.png" >

---

# Praktikum 5 - Pagination dan Pencarian

Pada praktikum ini, halaman artikel ditambahkan fitur pencarian dan pagination. Fitur pencarian digunakan untuk memfilter artikel berdasarkan kata kunci, sedangkan pagination digunakan agar data artikel tidak tampil terlalu panjang dalam satu halaman.

Dokumentasi hasil:

<img src="gambar/hasil pencarian artikel.png" >

---

# Praktikum 6 - Relasi Tabel dan Query Builder

Pada tahap ini, tabel artikel dihubungkan dengan tabel kategori. Dengan adanya relasi ini, setiap artikel dapat memiliki kategori tertentu. Data artikel kemudian ditampilkan bersama nama kategorinya agar informasi lebih lengkap.

Perubahan utama:

- menambahkan tabel `kategori`,
- menambahkan field `id_kategori` pada tabel artikel,
- membuat `KategoriModel.php`,
- menampilkan kategori pada halaman artikel dan admin.

Dokumentasi hasil:

<img src="gambar/page artikel.png" >

<img src="gambar/dashboard form artikel.png" >

<img src="gambar/tabel artikel phpmyadmin.png" >

<img src="gambar/tabel kategori phpmyadmin.png" >

---

# Praktikum 7 - Upload File Gambar

Pada praktikum ini, form artikel ditambahkan input upload gambar. Gambar yang diunggah akan disimpan ke folder `public/gambar`, kemudian nama file gambar disimpan ke database.

Fitur yang diterapkan:

- upload gambar saat tambah artikel,
- update gambar saat edit artikel,
- preview gambar di halaman admin,
- penghapusan file gambar saat artikel dihapus.

Dokumentasi hasil:

<img src="gambar/form tambah artikel.png" >

<img src="gambar/admin artikel.png" >

---

# Praktikum 8 - AJAX

Pada praktikum ini dibuat halaman **Dashboard Pengelolaan Artikel** menggunakan AJAX. Dengan AJAX, data dapat ditampilkan, ditambah, diubah, dan dihapus tanpa memuat ulang halaman secara penuh.

Halaman AJAX tetap dilindungi oleh login admin. Data dikirim menggunakan jQuery dan `FormData`, sehingga fitur upload gambar tetap dapat digunakan.

Cara membuka halaman:

```text
http://localhost:8080/ajax
```

Dokumentasi hasil:

<img src="gambar/dashboard ajax.png" >


---

# Praktikum 10 - REST API

Pada tahap ini ditambahkan REST API artikel menggunakan controller `app/Controllers/Post.php`. Controller ini menggunakan konsep `ResourceController` dan `ResponseTrait`, sehingga data dapat dikirim dalam format JSON dan diuji menggunakan Postman.

Route utama:

```php
$routes->resource('post');
```

Endpoint API:

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/post` | Menampilkan seluruh artikel |
| GET | `/post/{id}` | Menampilkan detail artikel |
| POST | `/post` | Menambahkan artikel |
| PUT/PATCH | `/post/{id}` | Mengubah artikel |
| DELETE | `/post/{id}` | Menghapus artikel |

Contoh URL pengujian:

```text
GET http://localhost:8080/post
```

Dokumentasi hasil:

---

# Praktikum 11 - VueJS Frontend API

Pada praktikum ini dibuat frontend terpisah bernama `lab8_vuejs`. Frontend ini menggunakan VueJS dan Axios untuk mengambil data artikel dari REST API CodeIgniter.

Struktur utama frontend:

```text
lab8_vuejs
├── index.html
└── assets
    ├── css/style.css
    └── js
        ├── app.js
        └── components
            ├── Home.js
            ├── Artikel.js
            └── About.js
```

Fitur pada halaman Kelola Artikel:

- menampilkan data artikel dari REST API,
- menambahkan data artikel,
- mengubah data artikel,
- menghapus data artikel,
- menampilkan status artikel.

Dokumentasi hasil:

<img src="gambar/kelola artikel vuejs.png" >

---

# Praktikum 12 - VueJS Komponen dan Routing SPA

Project `lab8_vuejs` kemudian dikembangkan menjadi **Single Page Application (SPA)** menggunakan Vue Router. Navigasi dilakukan melalui `router-link`, sedangkan konten halaman ditampilkan melalui `router-view`.

Komponen yang digunakan:

```text
Home.js
Artikel.js
About.js
```

Route yang dibuat:

```javascript
const routes = [
  { path: '/', component: Home },
  { path: '/artikel', component: Artikel },
  { path: '/about', component: About }
];
```

Pada route `/about`, ditampilkan profil mahasiswa sebagai bagian dari tugas praktikum.

Dokumentasi hasil:

<img src="gambar/bernada vuejs.png" >

<img src="gambar/about vuejs.png" >

---

# Praktikum 13 - Autentikasi SPA dan Navigation Guards

Pada praktikum ini, frontend VueJS ditambahkan halaman login. Login dilakukan melalui endpoint API CodeIgniter, kemudian status login dan token disimpan ke `localStorage`.

File baru yang digunakan:

```text
lab8_vuejs/assets/js/components/Login.js
```

Endpoint login:

```text
POST http://localhost:8080/api/login
```

Data yang disimpan setelah login berhasil:

```text
isLoggedIn
userToken
username
```

Route `/artikel` dan `/about` diberi proteksi menggunakan `meta: { requiresAuth: true }`. Jika pengguna belum login, Vue Router akan mengarahkan pengguna ke halaman `/login`.

Dokumentasi hasil:

<img src="gambar/login vuejs.png" >

<img src="gambar/kelola artikel vuejs.png" >

---

# Praktikum 14 - Keamanan API, Token, dan Axios Interceptors

Pada praktikum terakhir, keamanan API ditingkatkan dengan token. Backend CodeIgniter menambahkan filter `ApiAuthFilter.php` untuk memeriksa header:

```text
Authorization: Bearer <token>
```

Jika request tidak membawa token atau token tidak valid, maka server akan mengembalikan response `401 Unauthorized`.

Route API yang dilindungi:

| Method | Endpoint | Status Proteksi |
|---|---|---|
| POST | `/post` | Wajib Bearer Token |
| PUT | `/post/{id}` | Wajib Bearer Token |
| PATCH | `/post/{id}` | Wajib Bearer Token |
| DELETE | `/post/{id}` | Wajib Bearer Token |

Endpoint `GET /post` dan `GET /post/{id}` tetap dibuat terbuka agar data masih dapat dibaca oleh frontend.

Pada sisi frontend, `Axios Interceptors` ditambahkan pada `lab8_vuejs/assets/js/app.js`. Interceptor ini akan mengambil token dari `localStorage`, lalu mengirimkannya secara otomatis pada header request. Jika server membalas `401`, frontend akan menghapus data login dan mengarahkan pengguna kembali ke halaman login.<img src="gambar.png" >