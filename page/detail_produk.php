<main><div class="">










.
</div>
</main><?php

include "koneksi.php";
    $idproduk   =mysqli_escape_string($koneksi, $_GET['idproduk']);
    $ambildata=mysqli_query($koneksi,"SELECT * FROM produk WHERE idproduk='$idproduk'");
    $tampildata=mysqli_fetch_array($ambildata);

    $kategori=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM kategori_produk WHERE idkategoriproduk='$tampildata[idkategoriproduk]'"));
?>
<div class="container">
    <h3>DETAIL PRODUK</h3>   

    <div class="row">
       <div class="col-9">

        <h1><?php echo $tampildata['nama_produk']; ?> 
        <div class="btn-group">
                  <a href="?page=proses_order&&idproduk=<?php echo $tampildata['idproduk']; ?>" ><button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button></a>
                </div>
        </h1>
        Stok <b><?php echo $tampildata['stok']; ?></b> | Kategori <b><?php echo $kategori['kategori'] ?></b> | Harga Rp. <b><?php echo number_format($tampildata['harga'],2); ?></b><br>
        <br><br><center><img src="<?php echo $tampildata['gambar']; ?>" width="50%"></center><br><br>
        <p><?php echo $tampildata['deskripsi']; ?></p>
    </div>
    <div class="col-3">
        KATEGORI PRODUK
        <ul>
            <?php
            $kategori=mysqli_query($koneksi,"SELECT * FROM kategori_produk");
            while($kategori_tampil=mysqli_fetch_array($kategori)){
            ?>
                <li><a href="?page=kategori_produk&&idkategoriproduk=<?php echo $kategori_tampil['idkategoriproduk']?>"><?php echo $kategori_tampil['kategori']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
   </div>
   </div>
   