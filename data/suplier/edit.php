<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Edit Data suplier</title>
</head>
<body>
        <?php
        include ('../config.php'); 
        $id_suplier = $_GET ['id_suplier'];
        $query = mysqli_query($conn, "SELECT * FROM suplier WHERE id_suplier='$id_suplier'");

        while ($data = mysqli_fetch_array($query)){
                        $id_suplier = $data['id_suplier'];
                        $nama_suplier = $data['nama_suplier'];
                        $alamat = $data['alamat'];
                        $telepon = $data['telepon'];
        }
        ?>
        <div class="container col-4">
        <form action="proses_edit.php?id_suplier=<?php echo $id_suplier;?>" method="post">
          <div class="mt-5">
                <h2>Edit Data Suplier</h2>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Suplier : </label>
            <input type="text" name="id_suplier" class="form-control" value="<?php echo $id_suplier; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nama : </label>
            <input type="text" name="nama_suplier" class="form-control" value="<?php echo $nama_suplier; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Alamat : </label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $alamat; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">telepon : </label>
            <input type="text" name="telepon" class="form-control" value="<?php echo $telepon; ?>">
          </div>
          <input type="submit" name="Submit" class="btn btn-primary"></input>
        </form>
        </div>
        
</body>
</html>