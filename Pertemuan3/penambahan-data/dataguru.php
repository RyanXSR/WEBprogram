<!DOCTYPE html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <title>Data Connetion</title>
</head>

<body>
  <div>
    <br><br>
  </div>
  <div class="card-group col-md-10 offset-md-1">
    <div class="card col-md-4">
      <div class="card-header">
        TAMBAH DATA
      </div>
      <div class="card-body">
        <form action="simpan.php" method="POST">

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tl" class="form-control">
          </div>
          <div class="form-group">
            <label>NIP</label>
            <input type="number" name="nip" placeholder="" class="form-control">
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Masukkan Jurusan" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"></textarea>
          </div>

          <button type="submit" class="btn btn-success">SIMPAN</button>
          <button type="reset" class="btn btn-warning">RESET</button>

        </form>
      </div>
    </div>
    <div class="card">
    <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">NIP</th>
        <th scope="col">Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <?php 
                      include('koneksi.php');
                    //   $no = 1;
                      $query = mysqli_query($connect,"SELECT * FROM guru");
                      while($row = mysqli_fetch_array($query)){
                  ?>

      <tr>
        <!-- <td><?php echo $no++ ?></td> -->
        <td><?php echo $row['ID'] ?></td>
        <td><?php echo $row['NAMA_LENGKAP'] ?></td>
        <td><?php echo $row['ALAMAT'] ?></td>
        <td><?php echo $row['TL'] ?></td>
        <td><?php echo $row['NIP'] ?></td>
        <td><?php echo $row['JURUSAN'] ?></td>
        <!-- <td class="text-center">
                    <a href="edit-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="hapus-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                </td> -->
      </tr>

      <?php } ?>
    </tbody>
  </table>
  </div>
  </div>

</body>

</html>