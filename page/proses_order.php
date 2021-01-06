<main><div class="">










.
</div>
</main>
<div class="container">
    <h3>PROSES PEMBELIAN</h3>
   
   
   <div class="row">
       <div class="col-9">
        <?php
            $idproduk=mysqli_real_escape_string($koneksi, @$_GET['idproduk']);

            $cekbarang=mysqli_query($koneksi,"SELECT * FROM pesan_produk WHERE idproduk='$idproduk'");
            $cekbarang1=mysqli_fetch_array($cekbarang);
            $cekbarang2=mysqli_num_rows($cekbarang);

            $produk=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM produk WHERE idproduk='$idproduk'"));

            if($cekbarang2==0){
                $simpan=mysqli_query($koneksi,"INSERT INTO pesan_produk(idproduk,jumlah,harga,subtotal) VALUES('$produk[idproduk]','1','$produk[harga]','$produk[harga]')");
                    echo "Sukses, Produk yang anda pilih berhasil ditambahkan ke dalam Keranjang Belanja<br>
                        <a href='?page=keranjang_belanja'>Keranjang Belanja</a>
                        <a href='./'>Lanjut Berbelanja</a>
                    ";
            }else{
                $jumlah=$cekbarang1['jumlah']+1;
                $subtotal=$cekbarang1['harga']*$jumlah;
                $update=mysqli_query($koneksi,"UPDATE pesan_produk SET jumlah='$jumlah',subtotal='$subtotal' WHERE idproduk='$idproduk'");
                echo "Sukses!! Barang ini sudah anda pesan sebelumnya, dan jumlah Pemesan Berhasil Perbarui
                <br>
                        <a href='?page=keranjang_belanja'>Keranjang Belanja</a>
                        <a href='./'>Lanjut Berbelanja</a>";
            }
        ?>
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