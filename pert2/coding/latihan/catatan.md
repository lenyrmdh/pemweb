# **CATATAN 14 APRIL 2025**

- Mempelajari Html dengan menggunakan bootstrap:
- 1. **Navbar:**

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>

    `<!-- Tombol toggle (muncul di ukuran layar kecil) -->`
    `<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">`
      `<span class="navbar-toggler-icon">`
    `</button>`

    `<!-- Isi navbar (link dan form pencarian) -->`
    `<div class="collapse navbar-collapse" id="navbarSupportedContent">`
      `<ul class="navbar-nav me-auto mb-2 mb-lg-0">`

    `<!-- Menu Home -->`
        `<li class="nav-item">`
          `<a class="nav-link active" aria-current="page" href="#">`Home`</a>`
        `</li>`

    `<!-- Menu Link biasa -->`
        `<li class="nav-item">`
          `<a class="nav-link" href="#">`Link`</a>`
        `</li>`

    `<!-- Menu Dropdown -->`
        `<li class="nav-item dropdown">`
          `<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">`
            Dropdown
          `</a>`
          `<ul class="dropdown-menu">`
            `<li><a class="dropdown-item" href="#">`Action`</a></li>`
            `<li><a class="dropdown-item" href="#">`Another action`</a></li>`
            `<li><hr class="dropdown-divider">``</li>`
            `<li><a class="dropdown-item" href="#">`Something else here`</a></li>`
          `</ul>`
        `</li>`

    `<!-- Menu Disabled (tidak bisa diklik) -->`
        `<li class="nav-item">`
          `<a class="nav-link disabled" aria-disabled="true">`Disabled`</a>`
        `</li>`
      `</ul>`

    `<!-- Form pencarian -->`
      `<form class="d-flex" role="search">`
        `<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">`
        `<button class="btn btn-outline-success" type="submit">`Search`</button>`
      `</form>`
    `</div>`

</div>
</nav>
<!-- END NAVBAR -




**Penjelasan Kode Navbar:**

* `<nav class="navbar ...">` adalah elemen utama navbar dengan class Bootstrap.
* `navbar-expand-lg` artinya navbar akan melebar penuh saat layar besar, dan collapse saat layar kecil.
* `container-fluid` membuat isi navbar mengikuti lebar layar penuh.
* `<a class="navbar-brand">` adalah logo atau judul navbar.
* `<button class="navbar-toggler">` adalah tombol hamburger (☰) untuk menampilkan menu saat di mobile.
* Bagian `<div class="collapse navbar-collapse">` menyimpan isi navigasi dan form pencarian.
* `<ul class="navbar-nav ...">` adalah kumpulan menu navigasi.
* `<li>` berisi item menu seperti Home, Link, Dropdown, dan Disabled.
* Dropdown punya menu tambahan yang muncul saat diklik.
* Di akhir ada form pencarian yang bisa diisi dan dikirim.

---

### **Diikuti dengan:**

* **2. Profile dan Data Diri:**

  Biasanya ditambahkan setelah navbar. Bisa menggunakan Bootstrap card atau grid layout untuk menampilkan nama, foto, biodata, dsb.


- 3. **FOOTER**

<!-- FOOTER -->

<footer class="footer mt-5">
  <div class="container text-center">
    <p class="text-muted">© 2024</p>
  </div>
</footer>
<!-- END FOOTER -->


### **Penjelasan Kode Footer:**

* `<footer>` adalah elemen khusus untuk bagian bawah halaman.
* `class="footer mt-5"` memberi margin atas agar footer tidak terlalu menempel ke konten utama.
* `container text-center` membuat konten footer berada di tengah.
* `<p class="text-muted">` menampilkan teks dengan warna yang lebih redup.

  15.00

## 🛠️ Persiapan: Instalasi Laravel & Filament

   1.  docker exec -it pemweb bash

2. composer create-project --prefer-dist raugadh/fila-starter .
3. rm -rf *
4. rm -rf.*
5. chown -R www-data:www-data storage/*
6. edit env:

###### APP_NAME="PemWeb"

APP_ENV=local

APP_KEY=base64:8x6lgLG1CKc82P+CQOYbfUjLjwHlII08T6xADdymCng=

APP_DEBUG=true

APP_TIMEZONE='Asia/Jakarta'

APP_URL=http://localhost

ASSET_URL=http://localhost


DB_CONNECTION=mysql

DB_HOST=db_pemweb

DB_PORT=3306

DB_DATABASE=db_pemweb

DB_USERNAME=root

DB_PASSWORD=p455w0rd

7. php artisan storage:link
8. php artisan db:seed --force
9. php artisan shield:generate --all
10. chmod 777 -R storage/* && chmod 777 -R bootstrap/*
