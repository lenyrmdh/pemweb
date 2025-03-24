#### **Notes : 24 Maret 2025 / Pertemuan 1**

09.00 - 12.00

## 1. PROJEK SEBELUM UTS & UAS

* Sebelum UTS membuat project company profile (bukan di HTML dasar).
* Sebelum UAS membuat project studi kasus (tidak harus ada fitur jual beli).

## 2. PENILAIAN PROJECT

* Dinilai dari hasil analisa yang sesuai dengan codingan.
* Jika mengambil kode orang lain, wajib membuat README berisi:
  * Sanitasi kode
  * Link sumber atau nama sumber
  * Penjelasan kode yang digunakan

## 3. WAKTU BELAJAR

* 09.00 - 12.00 (Isoma 1 jam)
* 13.00 - 15.30 (Break 30 menit)
* 16.00 - 18.00 (Pulang jika tugas selesai)

## 4. ANALISA, CATATAN, DAN CODINGAN

* Harus ada setiap pertemuan hingga pertemuan ke-14.

## 5. LANGKAH MEMBUAT FILE HTML

* Buka VSCode
* Ketik nama file (contoh: `home.html`)
* Ketik kode berikut:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>SELAMAT DATANG</h1>
    <p>Klik di bawah ini untuk menuju halaman profil:</p>
    <a href="profile.html">Buka Profil</a>
</body>
</html>
```

* Simpan dengan ekstensi `.html`

## 6. LANGKAH MENAMBAHKAN FOTO

Untuk menampilkan gambar gunakan kode berikut:

```html
<img src="images/foto.jpg" alt="Foto Profil" width="200">
```

## 7. LANGKAH SETUP WSL (Windows Subsystem for Linux)

* Aktifkan WSL melalui fitur Windows (Turn Windows features on or off)
* Install distribusi Linux dari Microsoft Store (contoh: Ubuntu)
* Jalankan perintah berikut di PowerShell sebagai administrator:
  ```powershell
  wsl --set-default-version 2
  ```

## 8. KELEBIHAN DAN KEKURANGAN DOCKER & NGINX

### **Docker**

**Kelebihan:**

* Memudahkan pembuatan, pengujian, dan deployment aplikasi dengan container.
* Lebih ringan dibandingkan mesin virtual karena berbagi kernel.
* Portabilitas tinggi, memungkinkan aplikasi berjalan konsisten di berbagai lingkungan.

**Kekurangan:**

* Kurva pembelajaran cukup tinggi untuk pemula.
* Penggunaan resource berlebih jika tidak dikonfigurasi dengan baik.

### **Nginx**

**Kelebihan:**

* Cepat dan efisien dalam menangani banyak koneksi secara bersamaan.
* Cocok untuk menjadi reverse proxy, load balancer, dan server statis.

**Kekurangan:**

* Konfigurasi bisa cukup kompleks untuk fitur-fitur tingkat lanjut.
* Dokumentasi dan troubleshooting bisa membingungkan bagi pemula.

## 9. CATATAN TAMBAHAN

* Jika port 80 digunakan, maka port di konfigurasi juga harus 80.
* Fungsi elemen HTML:
  * `<div>` untuk pembungkus konten.
  * `<h1>` - `<h6>` sebagai judul (seperti di Microsoft Word).
  * `<p>` untuk teks paragraf.
  * `<i>` untuk teks miring.
  * `<b>` untuk teks tebal.
  * `<form>` untuk membuat formulir yang memiliki atribut `id`, `action`, dan `method`.
  * `<img>` untuk menampilkan gambar.
* Tanpa CSS, struktur HTML hanya rangka dasar dari website.

- Menjelaskan cara setup wsl, docker, vscode , github, navicat dan tools lainnya.
- Membuat analisa setiap pertemuan dengan minimal 5W1H dan SWOT
- Membahas tentang pembelajaran website
- Jika ada website maka di perlukan addres
- Addres yang berarti domain.
- Menjelaskan terkait projek
- Projek awal membuat portofolio dan company profile untuk uts
- Projek akhir studi kasus
- Membuat nya harus sesuai dengan hasil analisa
- Jika clone harus menuliskan sumbernya (link/nama sumber)
- HTML adalah bahasa general yang digunakan untuk developing di website
- Membuat env harus sesuai dengan nama jika untuk project
- Docker compose yml **ports** harus sama dengan nginx.conf **listennya.**
- Membahas website f5 yang berhubungan dengan ini.
- Membuild folder coding dengan docker compose up -d --- build
- Fungsi volumes di file docker-composer.yml adalah untuk menyimpan data secara persisten meskipun container dihentikan atau dihapus. Dengan volumes, data tidak hilang saat container di-restart atau dibangun ulang.
- **Kenapa Menggunakan Volumes?**

* **P**ersistensi Data : Data tetap aman meskipun container dihentikan atau dihapus.
* **Berbagi Data** : Volumes memungkinkan beberapa container mengakses data yang sama.
* **Manajemen Mudah** : Volumes bisa dengan mudah dibuat, dihapus, dan dikelola melalui Docker CLI

13.00 - 15.30

Mempelajari terkait HTML

## 📄 **1. Struktur Dasar HTML**

| Tag            | Deskripsi                                              |
| -------------- | ------------------------------------------------------ |
| `<!DOCTYPE>` | Menentukan tipe dokumen HTML (HTML5).                  |
| `<html>`     | Elemen root dari halaman HTML.                         |
| `<head>`     | Berisi informasi metadata tentang dokumen.             |
| `<title>`    | Menentukan judul halaman (ditampilkan di tab browser). |
| `<body>`     | Berisi semua konten utama yang terlihat oleh pengguna. |

---

## 🔠 **2. Teks dan Format**

| Tag               | Deskripsi                                                                  |
| ----------------- | -------------------------------------------------------------------------- |
| `<h1>`-`<h6>` | Heading (judul), dari yang terbesar (`<h1>`) hingga terkecil (`<h6>`). |
| `<p>`           | Paragraf.                                                                  |
| `<br>`          | Baris baru (line break).                                                   |
| `<hr>`          | Garis horizontal pemisah.                                                  |
| `<b>`           | Teks tebal.                                                                |
| `<i>`           | Teks miring.                                                               |
| `<u>`           | Teks bergaris bawah.                                                       |
| `<mark>`        | Menyorot teks.                                                             |
| `<small>`       | Teks berukuran kecil.                                                      |
| `<del>`         | Menandai teks yang dihapus.                                                |
| `<ins>`         | Menandai teks yang ditambahkan.                                            |
| `<sub>`         | Teks subscript (lebih kecil, di bawah garis dasar).                        |
| `<sup>`         | Teks superscript (lebih kecil, di atas garis dasar).                       |

---

## 🔗 **3. Link dan Navigasi**

| Tag       | Deskripsi                       |
| --------- | ------------------------------- |
| `<a>`   | Membuat hyperlink.              |
| `<nav>` | Elemen untuk menandai navigasi. |

---

## 🖼️ **4. Gambar dan Media**

| Tag              | Deskripsi                                                  |
| ---------------- | ---------------------------------------------------------- |
| `<img>`        | Menampilkan gambar.                                        |
| `<figure>`     | Menampilkan elemen gambar dengan caption.                  |
| `<figcaption>` | Caption untuk elemen `<figure>`.                         |
| `<audio>`      | Menambahkan audio.                                         |
| `<video>`      | Menambahkan video.                                         |
| `<source>`     | Menentukan sumber untuk elemen `<video>`dan `<audio>`. |
| `<iframe>`     | Menyematkan halaman web lain.                              |

---

## 🗂️ **5. List (Daftar)**

| Tag      | Deskripsi                                         |
| -------- | ------------------------------------------------- |
| `<ul>` | Daftar tidak berurutan (bullet list).             |
| `<ol>` | Daftar berurutan (numbered list).                 |
| `<li>` | Elemen daftar (item dalam `<ul>`atau `<ol>`). |
| `<dl>` | Daftar definisi.                                  |
| `<dt>` | Istilah dalam daftar definisi.                    |
| `<dd>` | Penjelasan untuk istilah dalam daftar definisi.   |

---

## 📋 **6. Tabel**

| Tag           | Deskripsi                        |
| ------------- | -------------------------------- |
| `<table>`   | Membuat tabel.                   |
| `<tr>`      | Baris dalam tabel.               |
| `<th>`      | Header (judul kolom) pada tabel. |
| `<td>`      | Sel data pada tabel.             |
| `<thead>`   | Bagian kepala tabel.             |
| `<tbody>`   | Bagian tubuh tabel.              |
| `<tfoot>`   | Bagian kaki tabel.               |
| `<caption>` | Judul tabel.                     |

---

## 📝 **7. Formulir (Form)**

| Tag            | Deskripsi                                           |
| -------------- | --------------------------------------------------- |
| `<form>`     | Membuat formulir.                                   |
| `<input>`    | Input field (teks, password, checkbox, radio, dll). |
| `<textarea>` | Kotak teks yang lebih besar.                        |
| `<button>`   | Tombol dalam formulir.                              |
| `<label>`    | Label untuk elemen formulir.                        |
| `<fieldset>` | Mengelompokkan elemen dalam formulir.               |
| `<legend>`   | Judul untuk elemen `<fieldset>`.                  |
| `<select>`   | Dropdown list.                                      |
| `<option>`   | Opsi dalam dropdown.                                |
| `<optgroup>` | Mengelompokkan opsi dalam dropdown.                 |
| `<datalist>` | Menentukan daftar opsi untuk elemen `<input>`.    |

---

## 🔒 **8. Elemen Interaktif**

| Tag           | Deskripsi                                              |
| ------------- | ------------------------------------------------------ |
| `<details>` | Membuat elemen yang bisa diperluas atau disembunyikan. |
| `<summary>` | Judul untuk elemen `<details>`.                      |
| `<dialog>`  | Membuat kotak dialog atau popup.                       |

---

## 🧱 **9. Elemen Layout (Struktur Halaman)**

| Tag           | Deskripsi                                        |
| ------------- | ------------------------------------------------ |
| `<header>`  | Bagian atas halaman (header).                    |
| `<footer>`  | Bagian bawah halaman (footer).                   |
| `<section>` | Bagian konten dalam halaman.                     |
| `<article>` | Artikel atau konten yang berdiri sendiri.        |
| `<aside>`   | Konten sampingan (sidebar).                      |
| `<div>`     | Kontainer serbaguna untuk mengelompokkan elemen. |
| `<span>`    | Digunakan untuk styling teks dalam elemen lain.  |
| `<main>`    | Bagian utama konten dalam halaman.               |

---

## ⚙️ **10. Elemen Metadata**

| Tag          | Deskripsi                                                    |
| ------------ | ------------------------------------------------------------ |
| `<meta>`   | Menyimpan informasi metadata seperti charset, viewport, dll. |
| `<link>`   | Menghubungkan file eksternal seperti CSS.                    |
| `<style>`  | Menambahkan gaya CSS langsung dalam dokumen.                 |
| `<script>` | Menambahkan kode JavaScript.                                 |

---

## 🔥 **11. Elemen Khusus (HTML5)**

| Tag            | Deskripsi                                 |
| -------------- | ----------------------------------------- |
| `<canvas>`   | Digunakan untuk menggambar grafik.        |
| `<svg>`      | Menampilkan grafik vektor.                |
| `<mark>`     | Menyorot teks.                            |
| `<progress>` | Menampilkan progres bar.                  |
| `<meter>`    | Menampilkan nilai dalam rentang tertentu. |

---

## 💻 **12. Elemen Obsolete (Kadaluwarsa - Sebaiknya Dihindari)**

| Tag           | Deskripsi                                                            |
| ------------- | -------------------------------------------------------------------- |
| `<font>`    | Mengatur font (gunakan CSS sebagai gantinya).                        |
| `<center>`  | Memusatkan teks (gunakan CSS sebagai gantinya).                      |
| `<marquee>` | Teks berjalan (tidak disarankan karena tidak sesuai standar modern). |

---

Fungsi volumes di file docker-composer.yml adalah untuk menyimpan data secara persisten meskipun container dihentikan atau dihapus. Dengan volumes, data tidak hilang saat container di-restart atau dibangun ulang.

**Kenapa Menggunakan Volumes?**

* **P****ersistensi Data** : Data tetap aman meskipun container dihentikan atau dihapus.
* **Berbagi Data** : Volumes memungkinkan beberapa container mengakses data yang sama.
* **Manajemen Mudah** : Volumes bisa dengan mudah dibuat, dihapus, dan dikelola melalui Docker CLI
