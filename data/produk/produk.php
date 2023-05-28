<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Data Produk</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <h4 style="color: green; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
              HMS<small style="text-transform: lowercase;">alman</small> T<small style="text-transform: lowercase;">extille</small>
            </h4>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" href="../../index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../data.php">Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../suplier/suplier.php">Suplier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../kategori/kategori.php">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="produk.php">Produk</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="">
                <img src="images/user.png" alt="">
                <span>
                  Login
                </span>
              </a>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
  </div>
    <!-- end header section -->

  <!-- Data Supliersection -->
<?php
include "../config.php";
$query = mysqli_query($conn, "SELECT * FROM produk INNER JOIN kategori ON produk.kategori_id = kategori.id_kategori INNER JOIN suplier ON produk.suplier_id = suplier.id_suplier");
?>
<div class="container mt-3">
        <h1>Data Produk</h1>
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
                <form action="" method="post" enctype="multipart/form-data">
                <table id="MyTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Produk</th>
                                <th>Kategori</th>
                                <th>Suplier</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Warna</th>
                                <th>Foto</th>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                $no = 1;
                                foreach ($query as $row) :
                                ?>
                                <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $row['id_produk']?></td>
                                        <td><?php echo $row['nama_kategori']?></td>
                                        <td><?php echo $row['nama_suplier']?></td>
                                        <td><?php echo $row['nama']?></td>
                                        <td><?php echo $row['stok']?></td>
                                        <td><?php echo $row['harga']?></td>
                                        <td><?php echo $row['warna']?></td>
                                        <td align="center">
                                            <img src="../../images/<?php echo $row['gambar'];?>" width="60" height="40"/>
                                        </td>
                                        <td>
                                            <a href="edit.php?id_produk=<?php echo $row['id_produk']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="hapus.php?id_produk=<?php echo $row['id_produk']?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                </table>
                </form>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <a href="data.php" class="btn btn-info me-md-2" type="button">Kembali</a>
                </div>
</div>

  <!-- end Data Suplier section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          HMS<small style="text-transform: lowercase;">alman</small> T<small style="text-transform: lowercase;">extille</small>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="../../images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Jl. Cigondewah Kidul
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="../../images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +62 89663223339
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="../../images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                holidmuhamadsalman@gmail.com
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="info_insta">
            <h5>
              Follow Me
            </h5>
            <div class="social_box">
              <a href="">
                <img src="../../images/fb.png" alt="">
              </a>
              <a href="">
                <img src="../../images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="../../images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="../../images/youtube.png" alt="">
              </a>
              <a href="">
                <img src="../../images/instagram.png" alt="" width="30px" height="30px">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; 2023 All Rights Reserved By
        <a href="">Holid Muhamad Salman</a>
      </p>
    </div>
  </section>
  <!-- end  footer section -->

  <!-- data table -->
  <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>

  <script type="text/javascript">
        $(document).ready( function () {
                $('#MyTable').DataTable();
        } );
  </script>

  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        420: {
          items: 2
        },
        1000: {
          items: 5
        }
      }

    });
  </script>
  <script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function (e) {

      e.preventDefault();
      nav.toggleClass("lg_nav-toggle");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
  </script>
  <script>
    $('.carousel').on('slid.bs.carousel', function () {
      $(".indicator-2 li").removeClass("active");
      indicators = $(".carousel-indicators li.active").data("slide-to");
      a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
      console.log(indicators);

    })
  </script>

</body>
</body>

</html>