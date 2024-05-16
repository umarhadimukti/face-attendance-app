<?php

namespace App\Constants;

class Permissions {
  const DaftarUser = ['name' => 'daftar-user', 'deskripsi' => 'akses melihat daftar user yang sudah mendaftar'];
  const TambahUser = ['name' => 'tambah-user', 'deskripsi' => 'akses menambah user baru'];
  const UpdateUser = ['name' => 'update-user', 'deskripsi' => 'akses mengubah user yang tersedia'];
  const DeleteUser = ['name' => 'delete-user', 'deskripsi' => 'akses menghapus user yang tersedia'];

  const Dashboard = ['name' => 'dashboard', 'deskripsi' => 'akses melihat halaman dashboard'];
  const IndexAbsensi = ['name' => 'index-absensi', 'deskripsi' => 'akses melihat halaman absensi'];
}