<div class="container">
    <h3>ORDER SELESAI</h3>
   
   
   <div class="row">
    <div class="col-9">
        <?php
            $data_pembeli=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM checkout ORDER BY idcheckout DESC"));
        ?>
        Terimkasih anda sudah membeli Produk di Toko Kami<br>
        <table border="1" cellpadding="5" cellspacing="0" width="100%">
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Sub Total</td>
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
                <td><?php echo $daftarbeli1['jumlah']; ?></td>
                <td><?php echo number_format($daftarbeli1['subtotal'],2); ?></td>

            </tr>
        <?php 
                $totalakhir+=$daftarbeli1['subtotal'];
        $i=$i+1; } ?>
            <tr>
                <td colspan="4" align="right">TOTAL</td>
                <td><?php echo number_format($totalakhir,2); ?></td>
            </tr>

        </table>

        <hr>
        <table border="1" cellspacing="0" cellpadding="3" width="100%">
            <tr>
                <td>No Pembelian</td>
                <td><?php echo $data_pembeli['idcheckout']; ?></td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td><?php echo $data_pembeli['nama']; ?></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><?php echo $data_pembeli['notelp']; ?></td>
            </tr>
            <tr>
                <td>Jenis Pengiriman</td>
                <td><?php echo $data_pembeli['jenis_pengiriman']; ?></td>
            </tr>
            <tr>
                <td>Alamat Pengiriman</td>
                <td><?php echo $data_pembeli['alamat_pengiriman']; ?></td>
            </tr>
        </table>

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