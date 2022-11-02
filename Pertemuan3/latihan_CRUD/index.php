<?php
include_once("config.php");

$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<br/><br/>
<div class="card col-md-10 offset-md-1">
    <br/><br/>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="6"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i>Tambah Pelanggan Baru</a></th>
            </tr>
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Tanggal gabung</th>
                <th>Terakhir diperbarui</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            <?php if($result->num_rows > 0):?>
                <?php while($customer_data = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $customer_data['name']?></td>
                    <td><?php echo $customer_data['phone']?></td>
                    <td><?php echo $customer_data['email']?></td>
                    <td><?= $customer_data['created']?></td>
                    <td><?= $customer_data['updated']?></td>
                    <td align="center">
                        <a class="btn btn-success" href='edit.php?id=<?=$customer_data["id"]?>'>Edit</a> | <a class="btn btn-danger" href='delete.php?id=<?=$customer_data["id"]?>'>Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6" rowspan="1" header="" align="center">
                        Data Pelanggan tidak ditemukan
                    </td>
                </tr>
            <?php endif; ?>

            <?php mysqli_free_result($result); ?>
        </tbody>
    </table>
            </div>
    <?php if(isset($_GET["message"])){
        $message = $_GET["message"];
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location='index.php'</script>";
    }
    ?>
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="myform bg-dark">
              <h1 class="text-center">Tambah Pelanggan</h1>
              <form action="add_process.php" method="POST" name="form1">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telepon</label>
                    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-light mt-3" name="Submit">Kirim</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</html>