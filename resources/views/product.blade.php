
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>HiBeautee | {{$title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">

<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <font style="font-size: 50px;
            font-weight: bold; 
            color: dimgray;
            text-align: center;" 
            >HiBeautee!</font>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/home">Home</a></li>
                <li><a href="/product" class="active">Product</a></li>
                @if (session()->exists("pengguna"))
                <li>
                  <div class="dropdown">
                    <a href="/pemesanan">Pemesanan</a>
                    <div class="dropdown-content">
                      <a href="/tiket">Tiket Saya</a>
                    </div>
                  </li>
                @else
                <li><a href="/pemesanan">Pemesanan</a></li>
                @endif
                
                <li><a href="/contacus">Contact Us</a></li> 
                @if (session()->exists("pengguna"))
                <li>
                  <div class="dropdown">
                  <a href="/pemesanan">Hy, {{Session::get('pengguna')['NamaUser']}}</a>
                  <div class="dropdown-content">
                    <a href="/LogoutUser">Logout</a>
                  </div>
                </li> 
                @else
                <li><div class="main-white-button"><a href="/login"><i class="fa fa-plus"></i> LOGIN</a></div></li> 
              </ul>        
                @endif
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>DAPATKAN PRODUK ANDA</h6>
            <h2>Dapatkan Produk yang Dipersonalisasikan Sesuai Jenis Kulit Anda</h2>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="category-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt=""><h4>Klinik</h4></span>    
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""><h4>skincare</h4></span>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-03.png" alt=""><h4>Treatment</h4></span>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-01.png" alt=""><h4>Klinik</h4></span> 
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>      
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description for Clinic</h4>
                                    <p>Jika bicara soal klinik kecantikan, saat ini sudah ada begitu banyak tempat menarik yang menawarkan berbagai opsi perawatan. Tak hanya di kota-kota besar, tetapi sudah ada banyak klinik kecantikan yang berkembang ke berbagai kota.
                                      Untuk bisa mewujudkan penampilan kulit yang sehat dan glowing, kali ini HiBeautee! akan merekomendasikan beberapa klinik kecantikan terpercaya di Indonesia yang bisa jadi pilihan.
                                    </p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 200 Listings &amp; 150 Sales<br>This Month: 1,800 Listings &amp; 1,560 Sales<br>This Year: 16,000 Listings &amp; 14,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. about Apartments</h4>
                                    <p>HiBeautee memiliki standard pada klinik pada saat mengajukan sebuah pemasaran. Klinik yang didaftarkan harus memiliki sertifikat legalisasi untuk menandakan klinik tersebut layak beroprasi atau tidak.</p>
                                    <span class="list-item">* HiBeautee! should have all the proper documents before being checked in.
                                    <br>** HiBeautee! will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>                 
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-02.png" alt=""><h4>Skincare</h4></span> 
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>      
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description for Skincare</h4>
                                    <p>Jika bicara soal skincare, saat ini sudah ada begitu banyak tempat menarik yang menawarkan berbagai opsi perawatan. 
                                      Tak hanya produk luar, tetapi berbagai jenis skincare lokal sudah mulai banyak bermunculan. 
                                      Untuk bisa mewujudkan penampilan kulit yang sehat dan glowing, 
                                      kali ini HiBeautee! akan merekomendasikan beberapa skincare yang sudah BPOM yang tentu saja aman untuk kesehatan kulit. </p>
                                    <br>
                                    
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 124 Listings &amp; 84 Sales<br>This Month: 1,040 Listings &amp; 720 Sales<br>This Year: 10,640 Listings &amp; 9,600 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info</h4>
                                    <p>Sebagai platform kecantikan berbasis website nomor satu di Indonesia, HiBeautee! rajin merekomendasikan produk kecantikan terbaik.
                                      Khusus untuk para pecinta skincare</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-03.png" alt=""><h4>Treatment</h4></span> 
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>      
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description about Treatment</h4>
                                    <p>Jika bicara soal skincare, saat ini sudah banyak klinik kecantikan yang difasilitasi alat-alat untuk treatment kulit. 
                                      Treatment kulit biasanya direkomendasikan oleh dokter kulit apabila kondisi kulit sudah tidak memungkinkan untuk diobati hanya dengan sebuah skincare. 
                                      Untuk bisa mewujudkan penampilan kulit yang sehat dan glowing, 
                                      kali ini HiBeautee! akan merekomendasikan beberapa treatment kulit yang akan ditangani oleh para dokter yang profesional.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 800 Listings &amp; 400 Sales<br>This Month: 1,600 Listings &amp; 1,200 Sales<br>This Year: 14,000 Listings &amp; 12,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. about Treatment</h4>
                                    <p>Sebagai platform kecantikan berbasis website nomor satu di Indonesia, 
                                      HiBeautee! rajin merekomendasikan treatment khusus kulit terbaik. 
                                      Treatment kulit ini diperuntukan untuk segala jenis kulit sesuai anjuran dokter</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-04.png" alt=""><h4>Shopping</h4></span> 
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>      
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description about Shopping</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 150 Listings &amp; 140 Sales<br>This Month: 1,500 Listings &amp; 1,100 Sales<br>This Year: 15,000 Listings &amp; 14,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. for Shopping</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-05.png" alt=""><h4>Traveling</h4></span> 
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>      
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description of Traveling</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 200 Listings &amp; 120 Sales<br>This Month: 1,400 Listings &amp; 900 Sales<br>This Year: 14,000 Listings &amp; 12,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. about Traveling</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/HiBeautee!.png" alt="">
            </div>
            <p>Website HiBeautee! hadir sebagai solusi bagi masyarakat untuk merekomendasikan klinik 
              untuk tempat treatment serta rekomendasi skincare dengan kemudahan informasi pemesanan berbasis online.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                
              </div>
              <div class="col-lg-6">
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us for Business Inquiry</h4>
            <p>Salma Fauziyah Firdaus</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="https://wa.me/082142635883">+62 821-4263-5883</a>
              </div>
              <div class="col-lg-6">
                <a href="https://wa.me/082141241651">+62 821-4124-1651</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2023 HiBeautee!. All Rights Reserved.
            <br>

          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
