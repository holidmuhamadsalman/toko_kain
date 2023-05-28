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
                <h2>Tambah Data Kategori</h2>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Id Kategori : </label>
            <input type="text" name="id_kategori" class="form-control" id="id_kategori">
            <p id="id_kategori_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nama : </label>
            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori">
            <p id="nama_kategori_error"></p>
          </div>
          <button type="button" class="btn btn-primary" id="button_id">Simpan</button>
        </form>
        </div>

        <script type="text/javascript">
	$('#button_id').click(function() {
		if ($('#id_kategori').val().length == 0 || $('#nama_kategori').val().length == 0) {
			    $('#id_kategori, #nama_kategori').css({"border-color" : "red"});
			    $('#id_kategori_error').text('Silahkan isi Id kategori terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
          $('#nama_kategori_error').text('Silahkan isi Nama kategori terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
		} else {
			$('#form_id').submit();
		}
	});
        </script>
</body>
</html>