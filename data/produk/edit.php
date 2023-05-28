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
        $id_produk = $_GET ['id_produk'];
        $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id_produk'");
        foreach ($query as $row) :
        ?>
        <div class="container col-4">
        <form action="proses_edit.php?id_produk=<?php echo $row['id_produk']?>" method="post">
          <div class="mt-5">
                <h2>Edit Data Suplier</h2>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Produk : </label>
            <input type="text" name="id_produk" class="form-control" value="<?php echo $row['id_produk']?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Kategori : </label>
            <input type="text" name="kategori_id" class="form-control" value="<?php echo $row['kategori_id']?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Suplier : </label>
            <input type="text" name="suplier_id" class="form-control" value="<?php echo $row['suplier_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nama : </label>
            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Stok : </label>
            <input type="text" name="stok" class="form-control" value="<?php echo $row['stok']; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Harga : </label>
            <input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Warna : </label>
            <input type="text" name="warna" class="form-control" value="<?php echo $row['warna']; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Foto : </label>
            <input type="file" name="gambar" required="required" class="form-control" value="../../images/<?php echo $row['gambar']; ?>">
            <p style="color: red" id="gambar_error">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
          </div>
          <input type="submit" name="Submit" class="btn btn-primary"></input>
          <?php endforeach; ?>
        </form>
        
        </div>
        
</body>
</html>