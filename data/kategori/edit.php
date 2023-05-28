<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Edit Data Kategori</title>
</head>
<body>
        <?php
        include ('../config.php'); 
        $id_kategori = $_GET ['id_kategori'];
        $query = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");

        while ($data = mysqli_fetch_array($query)){
                        $id_kategori = $data['id_kategori'];
                        $nama_kategori = $data['nama_kategori'];
        }
        ?>
        <div class="container col-4">
        <form action="proses_edit.php?id_kategori=<?php echo $id_kategori;?>" method="post">
          <div class="mt-5">
                <h2>Edit Data Kategori</h2>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id kategori : </label>
            <input type="text" name="id_kategori" class="form-control" value="<?php echo $id_kategori; ?>">
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nama : </label>
            <input type="text" name="nama_kategori" class="form-control" value="<?php echo $nama_kategori; ?>">
          </div>
          <input type="submit" name="Submit" class="btn btn-primary"></input>
        </form>
        </div>
        
</body>
</html>