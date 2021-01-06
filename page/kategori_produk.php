<main><div class="">










.
</div>
</main><?php
include "koneksi.php";
$idkategoriproduk  =mysqli_escape_string($koneksi, @$_GET['idkategoriproduk']);
    if(!empty($idkategoriproduk)){
        $proc_query="WHERE idkategoriproduk='$idkategoriproduk'";
    }else{
        $proc_query="";
    }
    $kategori=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM kategori_produk $proc_query"));
?>
<div class="container">

            <h3>KATEGORI PRODUK <?php if(!empty($idkategoriproduk)){ ?><font color="red"><?php echo strtoupper($kategori['kategori']); ?></font> <?php } ?></h3>  
      
       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 
         
      <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM produk $proc_query ORDER BY idproduk DESC LIMIT 0,6");
                $cekjmlproduk=mysqli_num_rows($produktebaru);
                if($cekjmlproduk==0){
                    echo "<h3>Maaf!! Produk pada Kategori $kategori[kategori] Tidak ada.</h3>";
                }
                while($tampilproduk=mysqli_fetch_array($produktebaru)){
            ?>
            <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo $tampilproduk['gambar']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/>
                <div class="card-body">
                  <font size="5px;" ><p style="color:red;" class="card-text"><?php echo $tampilproduk['nama_produk']; ?></p></font>
                  <p class="card-text"><?php echo $tampilproduk['deskripsi_singkat']; ?> ...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. <?php echo number_format($tampilproduk['harga'],0); ?></button>
                          <a href="?page=detail_produk&&idproduk=<?php echo $tampilproduk['idproduk']; ?>" ><button type="button" class="btn btn-sm btn-outline-secondary">DETAIL</button></a>
                      </div>
                      <small class="text-muted">Stok  : <?php echo number_format($tampilproduk['stok']); ?></small>
                    </div>
                </div>
                </div>
                </div>  
              <?php } ?>
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
   </div>
   </div>