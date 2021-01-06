<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Album example · Bootstrap v5.0</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    
    
  </head>
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="prevl" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="next" data-bs-slide-to="1" class="active"></li>
      <li data-bs-target="prevl" data-bs-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="assets/brand/bg.jpg"> 

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="assets/brand/bg1.jpg"> 

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="assets/brand/bg2.jpg"> 

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="assets/brand/icon.svg" class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">

        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  
  </main>
  <div class="album py-5 bg-light">
  <section id="produk">
  
    <div class="container">
      <div class="produk-title">PRODUK TERBARU</div> 
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">          
            <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM produk ORDER BY idproduk  ");
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
            </div>
  </div>
 </section>
 </div> 

    <div class="container">
    <div class="produk-title">PRODUK TERLARIS</div> 
         
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">          
            <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM produk ORDER BY idproduk  ");
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
            </div>
        
      </div>
    </div>
    <main><div class="">










.
</div
  
</html>