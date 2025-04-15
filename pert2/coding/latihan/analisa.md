# Analisis Kode HTML Bootstrap Lengkap

Berikut ini adalah analisis dan penjelasan **masing-masing bagian** dari kode HTML yang menggunakan framework Bootstrap untuk membuat halaman profil personal:

---

## 1. Deklarasi Awal dan Header

```html
<!doctype html>
<html lang="en">
```

* `<!doctype html>`: Mendeklarasikan bahwa ini adalah dokumen HTML5.
* `<html lang="en">`: Bahasa halaman disetel ke bahasa Inggris.

### Elemen `<head>`:

```html
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Learning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" ...>
</head>
```

* `<meta charset="utf-8">`: Menentukan encoding karakter.
* `<meta name="viewport">`: Agar halaman responsif di semua ukuran layar.
* `<title>`: Judul halaman yang muncul di tab browser.
* `<link href=...>`: Menghubungkan halaman ke file CSS Bootstrap agar bisa memakai semua gaya dari Bootstrap.

---

## 2. Navbar (Navigasi Atas)

```html
<nav class="navbar navbar-expand-lg bg-body-tertiary">...</nav>
```

* Membuat navigasi di atas.
* `navbar-expand-lg`: Navigasi melebar saat ukuran layar besar.
* `bg-body-tertiary`: Warna background navbar (warna Bootstrap).

### Bagian dalam:

* `<a class="navbar-brand">`: Logo atau teks brand.
* `<button class="navbar-toggler">`: Tombol untuk membuka menu ketika layar kecil (mobile).
* `<ul class="navbar-nav">`: Daftar menu navigasi.
* Terdiri dari `Home`, `Link`, `Dropdown`, dan `Disabled`.
* Terdapat juga **form pencarian** (Search bar) di sisi kanan.

---

## 3. Profile Section

```html
<div class="row justify-content-center">
  <div class="col-lg-5">
    <div class="card mb-4">
      <div class="card-body text-center">
        <img src="..." class="rounded-circle img-fluid" style="width: 200px;">
```

* `row justify-content-center`: Membuat baris dan mengatur agar konten di tengah.
* `col-lg-5`: Ukuran kolom (lebar 5/12 untuk layar besar).
* `card`: Komponen kartu Bootstrap.
* `<img>`: Menampilkan gambar profil.
* Teks nama, jurusan, dan asal ditampilkan di bawahnya.
* Tombol: Menampilkan info tambahan (lokasi dan tanggal).

---

## 4. About Me

```html
<div class="card-body p-4 text-black">
  <div class="mb-5 text-body">
    <p class="lead fw-normal mb-1 text-center">ABOUT ME</p>
  </div>
  <div class="p-4 bg-body-tertiary">
    <p class="font-italic">...</p>
```

* Menampilkan bagian "About Me" (deskripsi singkat).
* `fw-normal`: Weight (ketebalan) teks normal.
* `bg-body-tertiary`: Latar belakang warna Bootstrap.
* `font-italic`: Teks miring.

---

## 5. Linked Personal (Tautan Sosial)

```html
<ul class="list-group list-group-flush">...
```

* Daftar link ke media sosial:
  * Website kampus
  * Instagram
  * GitHub
* Menggunakan icon dari Font Awesome (meskipun belum ada link ke CDN-nya di kode).

---

## 6. Skill Section

```html
<div class="progress rounded mb-3" style="height: 8px">
  <div class="progress-bar" role="progressbar" style="width: 90%" ...></div>
```

* Menampilkan kemampuan seperti HTML dan CSS.
* Menggunakan **progress bar** Bootstrap.
* `aria-valuenow`, `min`, `max`: Untuk aksesibilitas dan menggambarkan nilai skill.

---

## 7. Footer

```html
<footer class="footer mt-5">
  <div class="container text-center">
    <p class="text-muted">© 2024</p>
  </div>
</footer>
```

* Bagian bawah halaman.
* `mt-5`: Memberi jarak atas agar tidak terlalu mepet ke konten.
* `text-muted`: Warna teks yang redup.

---

## 8. JavaScript Bootstrap

```html
<script src="...bootstrap.min.js"></script>
```

* File JavaScript Bootstrap (wajib untuk menjalankan fitur seperti navbar collapse, dropdown, dll).
* Juga meng-include Popper.js yang dibutuhkan untuk elemen-elemen seperti dropdown.

---

## Catatan Tambahan:

* **Beberapa kesalahan penulisan tag** ditemukan, seperti `</img>` (yang seharusnya tidak perlu ditutup), dan `</div>` yang tidak lengkap di bagian bawah.
* Font Awesome untuk icon tidak disertakan link-nya, jadi icon tidak akan tampil jika tidak ditambahkan.

---

## Saran Perbaikan:

* Tambahkan link Font Awesome CDN agar ikon tampil.
* Rapikan kembali tag penutup (`</div>`), agar struktur HTML tidak rusak.
* Tambahkan `alt` pada gambar profil.
* Pastikan semua tag HTML tertutup dengan benar.
