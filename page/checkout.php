<main><div class="">










.
</div>
</main>
<div class="container">
    <h3>CHECKOUT</h3>
   
   
   <div class="row">
    <div class="col-9">
        <?php
            $proses=mysqli_escape_string($koneksi, @$_GET['proses']);
            if($proses=="checkout"){ 
            $noktp=@$_POST['noktp'];
            $nama=@$_POST['nama'];
            $notelp=@$_POST['notelp'];
            $kodepos=@$_POST['kodepos'];
            $alamat=@$_POST['alamat'];
            $alamat_pengiriman=@$_POST['alamat_pengiriman'];
            $jenis_pengiriman=@$_POST['jenis_pengiriman'];
            $tgl_checkout=date("Y-m-d");
            $wkt_checkout=date("H:i:s");
                    $checkout=mysqli_query($koneksi,"INSERT INTO checkout(noktp,nama,notelp,kodepos,alamat,alamat_pengiriman,jenis_pengiriman,tgl_checkout,wkt_checkout) VALUES('$noktp','$nama','$notelp','$kodepos','$alamat','$alamat_pengiriman','$jenis_pengiriman','$tgl_checkout','$wkt_checkout')");
                    if($checkout){
                        echo "<h1>Terima Kasih anda sudah Melakukan Pembelian di Situs Kami</h1>";
                        //header("Location: ?page=order_finish");
                        echo "<meta http-equiv='refresh' content='1; URL=?page=order_finish' />";
                    }else{
                        echo "<h1>Maaf Proses Pembelian Gagal</h1>";
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
        <body class="bg-light">
    
    <div class="container">
      <main>
       <div class="row g-3">
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form method="post" action="?page=checkout&&proses=checkout" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
    
                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>
    
              <hr class="my-4">
    
              <h4 class="mb-3">Payment</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>
    
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg" name="Proses Checkout" value="Proses Checkout" type="submit">Continue to checkout</button>
            </form>
          </div>
        </div>
      </main>
      </body>
    
    </div>
   </div>
   </div>
   </div>