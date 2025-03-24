### **ANALISA UNTUK LATIHAN**

## - **index.html berisi:**

* `<!DOCTYPE html>` menandakan penggunaan HTML5.
* `<html lang="en">` mendefinisikan bahasa utama sebagai Inggris.
* Bagian `<head>` berisi metadata:
  * `<meta charset="UTF-8">` untuk mendukung karakter internasional.
  * `<meta name="viewport" content="width=device-width, initial-scale=1.0">` agar halaman responsif.
  * `<title>` menampilkan teks "Pocoyo" di tab browser.
  * `<link rel="stylesheet" href="styles.css">` menghubungkan dengan file CSS untuk gaya tampilan.
* Bagian `<body>` berisi konten utama dengan elemen:
  * `<h1>` untuk judul "SELAMAT DATANG".
  * `<p>` menampilkan teks sambutan dan petunjuk.
  * `<a href="profile.html">` sebagai tautan ke halaman profil.

**Catatan:** Pastikan file `styles.css` dan `profile.html` berada di folder yang sama agar berfungsi dengan baik.

## - profile.html berisi:

* `<!DOCTYPE html>` menandakan penggunaan HTML5.
* `<html lang="id">` mendefinisikan bahasa utama sebagai Indonesia.
* Bagian `<head>` berisi metadata:
  * `<meta charset="UTF-8">` untuk mendukung karakter internasional.
  * `<meta name="viewport" content="width=device-width, initial-scale=1.0">` agar halaman responsif.
  * `<title>` menampilkan teks "Profil" di tab browser.
* Bagian `<body>` berisi konten utama dengan elemen:
  * `<img src="../assets/hello-pocoyo.jpg" alt="Foto Pocoyo" width="200">` menampilkan gambar Pocoyo dengan lebar 200 piksel.
  * Serangkaian tag `<p>` digunakan untuk menampilkan informasi profil seperti nama, hobi, dan asal.
  * `<a href="index.html">` berfungsi sebagai tautan untuk kembali ke halaman utama.

**Catatan:** Pastikan file gambar `hello-pocoyo.jpg` berada dalam folder `assets` dan berlokasi satu tingkat di atas file HTML ini agar gambar ditampilkan dengan benar.
