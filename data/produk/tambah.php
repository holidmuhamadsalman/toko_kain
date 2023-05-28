<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
        <!-- data table -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Tambah Data</title>
</head>
<body>
        <div class="container col-4 mt-3">
        <form action="proses_tambah.php" method="post" id="form_id">
          <div class="cente">
                <h2>Tambah Data Produk</h2>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Produk : </label>
            <input type="text" name="id_produk" class="form-control" id="id_produk">
            <p id="id_produk_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Kategori : </label>
            <input type="text" name="kategori_id" class="form-control" id="kategori_id">
            <p id="kategori_id_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Suplier : </label>
            <input type="text" name="suplier_id" class="form-control" id="suplier_id">
            <p id="suplier_id_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nama : </label>
            <input type="text" name="nama" class="form-control" id="nama">
            <p id="nama_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Stok : </label>
            <input type="text" name="stok" class="form-control" id="stok">
            <p id="stok_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Harga : </label>
            <input type="text" name="harga" class="form-control" id="harga">
            <p id="harga_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Warna : </label>
            <input type="text" name="warna" class="form-control" id="warna">
            <p id="warna_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Foto : </label>
            <input type="file" name="gambar" required="required" class="form-control" id="gambar">
            <p style="color: red" id="gambar_error">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
          </div>
          <button type="button" class="btn btn-primary" id="button_id">Simpan</button>
        </form>
        </div>

        <script type="text/javascript">
	$('#button_id').click(function() {
		if ($('#id_produk').val().length == 0 || $('#kategori_id').val().length == 0 || $('#suplier_id').val().length == 0 || $('#nama').val().length == 0 || $('#stok').val().length == 0 || $('#harga').val().length == 0 || $('#warna').val().length == 0 || $('#gambar').val().length == 0) {
			$('#id_produk, #kategori_id, #suplier_id, #nama, #stok, #harga, #warna, #gambar').css({"border-color" : "red"});
			  $('#id_produk_error').text('Silahkan isi Id produk terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#kategori_id_error').text('Silahkan isi Id produk terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#suplier_id_error').text('Silahkan isi Id produk terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#nama_error').text('Silahkan isi Nama produk terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#stok_error').text('Silahkan isi Alamat terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#harga_error').text('Silahkan isi Harga terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#warna_error').text('Silahkan isi Warna lebih dahulu').css({"color" : "red", "font-size" : "10pt"});
        $('#gambar_error').text('Silahkan isi Foto terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
		} else {
			$('#form_id').submit();
		}
	});
        </script>
</body>
</html>