<?php
//koneksi ke database & pilih databsenya 
$conn = mysqli_connect('localhost', 'root', '', 'pw_043040023');
//query isi table mahasisa dan ambil semua data mahasiswa
$result = mysqli_query($conn, "select * from mahasiswa");
//ubah data kedalam bentuk array 
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//tampung ke variable mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3> Daftar mahasiswa</h3>
  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar'] ?>" width="90"></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>

        <td>
          <a href="#">Ubah</a> | <a href="#">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>