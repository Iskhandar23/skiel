<main><div class="">










.
</div>
</main>

<div class="container">
    <h3>KERANJANG BELANJA</h3>
   
   
   <div class="row">
       <div class="col-9">
        <?php
            $idpesanproduk=mysqli_real_escape_string($koneksi, @$_GET['idpesanproduk']);
            $proses=mysqli_real_escape_string($koneksi, @$_GET['proses']);
            if($proses=="hapus"){
                $hapus=mysqli_query($koneksi,"DELETE FROM pesan_produk WHERE idpesanproduk='$idpesanproduk'");
                if($hapus){
                    echo "Sukses!!, Barang Berhasil dihapus dari Keranjang Belanja";
                }else{
                    echo "Gagal!!, Barang gagal dihapus dari Keranjang Belanja";
                }
            }elseif($proses=="update"){
                $pesanproduk=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM pesan_produk WHERE idpesanproduk='$idpesanproduk'"));
                $jumlah=mysqli_real_escape_string($koneksi, @$_POST['jumlah']);
                $subtotal=$pesanproduk['harga']*$jumlah;
                $update=mysqli_query($koneksi,"UPDATE pesan_produk SET jumlah='$jumlah', subtotal='$subtotal' WHERE idpesanproduk='$idpesanproduk'");
                if($update){
                    echo "Jumlah dan Subtotal berhasil diupdate";
                }else{
                    echo "Jumlah dan Subtotal Gagal diupdate";
                }
            }
        ?>
        <table border="1" cellpadding="5" cellspacing="0" width="100%">
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Sub Total</td>
                <td> </td>
            </tr>
            <?php
            $i=1;
            $totalakhir=0;
                $daftarbeli=mysqli_query($koneksi,"SELECT * FROM 
                    pesan_produk a LEFT JOIN produk b 
                    ON a.idproduk=b.idproduk");
                while($daftarbeli1=mysqli_fetch_array($daftarbeli)){
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $daftarbeli1['nama_produk']; ?></td>
                <td><?php echo number_format($daftarbeli1['harga'],2); ?></td>
                <td>
                    <form method="post" action="?page=keranjang_belanja&&idpesanproduk=<?php echo $daftarbeli1['idpesanproduk']; ?>&&proses=update">
                    <input type="number" name="jumlah" value="<?php echo $daftarbeli1['jumlah']; ?>">
                    <input type="Submit" name="Update" value="Update">
                    </form>

                    </td>
                <td><?php echo number_format($daftarbeli1['subtotal'],2); ?></td>
                <td><a href="?page=keranjang_belanja&&idpesanproduk=<?php echo $daftarbeli1['idpesanproduk']; ?>&&proses=hapus">Hapus</a></td>
            </tr>
        <?php 
                $totalakhir+=$daftarbeli1['subtotal'];
        $i=$i+1; } ?>
            <tr>
                <td colspan="4" align="right">TOTAL</td>
                <td><?php echo number_format($totalakhir,2); ?></td>
                <td> </td>
            </tr>

        </table>

        <center><a href="?page=checkout">CHECKOUT / SELESAI PEMBELIAN </a></center>

    </div>
    
   </div>
   </div>