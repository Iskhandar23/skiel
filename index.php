<?php
include "koneksi.php"; 
?><!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Toko Skielr</title>
    <link rel="icon" href="images/icon.svg" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }@charset "utf-8";
/* CSS Document */

* {
  box-sizing: border-box;
}
body{
	margin:0 0 0 0;
	font-family:calibri;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;

}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.331%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

.container{
	width:90%;
	margin:0 auto;
}
/* SECTION */
#produk{
	margin:30px;
}
/* Header */


.header{
	
	background:#fff ;
	border-bottom:5px solid #06517c;
}
.img {
     float :left;
}
.menu-style{
	float: left;
	padding:10px 15px;
	text-decoration:none;
	color:#000000;
}
.menu-style:hover{
	background:#083b86;
	color:#FFFFFF;
}

.slideshow{
	width:100%;
	background:url(images/Untitl.vg);
	background-size:cover;
	height:400px;
}


.produk-title{
	font-size:20px;
	color:#000000;
	margin-bottom:20px;
}
.box-barang{
	border:1px solid #E9E9E9;
	padding:10px;
}
.box-barang:hover{
	border:1px solid #3FC700;
}
.box-barang img{
	width:100%;
}
.barang-judul{
	font-size:20px;
	color:#539A00;
	font-weight:800;
}
.barang-deskripsi{
	color:#C5C5C5;
}
.barang-harga{
	color:#F40004;
	font-size:24px;
	font-weight:bold;
}

.footer1{
	background:#2D3335;
	height:250px;
}
.footer2{
	background:#292929;
	padding:25px; 
	text-align:center;
	color:#FFFFFF;
}
.kolom-footer{
	height:250px;
	color:#F7F7F7;
}
.form-control{
	width: 100%;
}
.img {
     width: 300px;
     height: 200px;
     border: 4px solid #575D63;
     padding: 10px;
     margin: 20px;
   }
   
    </style>


    
    <!-- Custom styles for this template -->
    <link href="css.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/brand/skielr.svg"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
     
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a href="?" class="nav-link" tabindex="-1" aria-current="page">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="?page=kategori_produk" class="nav-link" tabindex="-1" aria-disabled="true">Kategori Produk</a>
          </li>
          <li class="nav-item">
            <a href="?page=keranjang_belanja" class="nav-link"tabindex="-1" aria-disabled="true">keranjang belanja</a>
          </li>
          <li class="nav-item">
            <a href="?page=checkout" class="nav-link"tabindex="-1" aria-disabled="true">checkout</a>
          </li>
          <li class="nav-item">
            <a href="?page=logout" class="nav-link"tabindex="-1" aria-disabled="true">logout</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
      </div>
    </div>
  </nav>
</header>
<?php
	$page=@$_GET['page'];
	if($page=="home"){
		include "page/home.php";

    }elseif($page=="detail_produk"){
        include "page/detail_produk.php";

	}elseif($page=="kategori_produk"){
		include "page/kategori_produk.php";

	}elseif($page=="daftar_pembelian"){
		include "page/daftar_pembelian.php";

	}elseif($page=="checkout"){
		include "page/checkout.php";

    }elseif($page=="proses_order"){
        include "page/proses_order.php";

    }elseif($page=="keranjang_belanja"){
        include "page/keranjang_belanja.php";

	}elseif($page=="cara_berbelanja"){
        include "page/cara_berbelanja.php";

    }elseif($page=="logout"){
		include "page/logout.php";

    }elseif($page=="order_finish"){
        include "page/order_finish.php";
	
    }elseif($page=="album"){
        include "page/album.php";
	
    }else{
		include "page/home.php";
	}
?>


      
  <!-- FOOTER -->
  <footer>
	<div class="footer1">
    	<div class="container">
            <div class="row">
                <div class="col-4 kolom-footer">
                Kiri
                </div>
                <div class="col-4 kolom-footer">
                Tengah
                </div>
                <div class="col-4 kolom-footer">
                kanan
                </div>
            </div>
        </div>
    </div>
        <div class="footer2">SMKN 1 GUNUNGPUTRI | 2020-<?= date('Y') ?></div>
</footer>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
  
</html>
