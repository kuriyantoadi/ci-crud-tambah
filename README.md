# CodeIgniter-CRUD-Tambah
Menghubungkan CI dengan Database

**1. Extrak Framework CI**

**2. Import database ci-crud-tambah.sql**

**3. application/config/autoload.php**
  <br>Awal Baris 92 :
  <br>`$autoload['helper'] = array('');`
  <br>Edit :
  <br>`$autoload['helper'] = array('url','form');`

  <br>Awal Baris 61 :
  <br>`  $autoload['libraries'] = array('');`
  <br>Edit :
  <br>`  $autoload['libraries'] = array('database');`

**4. application/config/database.php ubah baris 78-81**
  <br>`'hostname' => 'localhost',`
  <br>`'username' => 'root',`
  <br>`'password' => '',`
  <br>`'database' => 'ci-crud-tambah',`

  **5. Tambahkan beberapa file berikut**
  - application/controllers/C_buku.php
  - application/view/input.php
  - application/view/main.php
  - application/models/M_buku.php


  **6. application/config/routes.php ubah baris 52**
  `$route['default_controller'] = 'C_buku';`

  **7. Buka dengan Link berikut**
  <br>`localhost/ci-koneksi/index.php`
