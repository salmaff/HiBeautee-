
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
            <h6>Check Out Our Listings</h6>
            <h2>Dapatkan Produk Anda!</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt=""></span>
                        Klinik
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        Skincare
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-03.png" alt=""></span>
                        Treatment
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-04.png" alt=""></span>
                        Batalkan Pesanan
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-9">
                  <ul class="nacc">
                  <!-- first category listing of items -->
                    <li class="active">
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                      <a href="#"><h4>1. Ms Glow Clinic</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(18) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> Rp 500.000,00-Rp 20.000.000,00</span>
                      <span class="details">Lokasi: <em>Pandansari, Tegal Tanda, Banguntapan, Kec. Banguntapan</em></span>
                      <ul class="info">
                        <li><img src="assets/images/dokter-icon.png" alt=""> dr. Salma</li>
                        <li><img src="assets/images/jam-icon.webp" alt=""> 09:00 - 19:00</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/bening.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>2. Bening's Clinic</h4></a>
                      <h6>by: Top Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> Rp 1.000.000,00-Rp 20.000.000,00</span>
                      <span class="details">Lokasi: <em>Jl. Raya Pajajaran No.8, RT.004/RW.005</em></span>
                      <ul class="info">
                        <li><img src="assets/images/dokter-icon.png" alt=""> dr. Salma</li>
                        <li><img src="assets/images/jam-icon.webp" alt=""> 09:00 - 19:00</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/erha.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>3. Erha Clinic</h4></a>
                      <h6>by: Best Beauty</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(36) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> Rp 300.000,00-Rp 10.000.000,00</span>
                      <span class="details">Lokasi: <em>Sukmajaya, Kec. Jombang, Kota Cilegon</em></span>
                      <ul class="info">
                        <li><img src="assets/images/dokter-icon.png" alt=""> dr. Salma</li>
                        <li><img src="assets/images/jam-icon.webp" alt=""> 09:00 - 19:00</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                            
                            <!-- third page of first category -->
                            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/dermaster.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>4. Dermaster Clinic</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> Rp 500.000,00-Rp 15.000.000,00</span>
                      <span class="details">Lokasi: <em>Jl. Dharma Husada Indah Bar. I No.3C, Mojo, Kec. Gubeng, Surabaya Timur, Jawa Timur </em></span>
                      <ul class="info">
                        <li><img src="assets/images/dokter-icon.png" alt="">dr.Wahyu</li>
                        <li><img src="assets/images/jam-icon.webp" alt="">09:00 - 19:00</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/natasha.jpeg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>5. Natasha Clinic</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(32) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> Rp 500.000,00-Rp 15.000.000,00</span>
                      <span class="details">Lokasi : <em>Jl. Walikota Mustajab No.58, Ketabang, Kec. Genteng, Kota SBY</em></span>
                      <ul class="info">
                        <li><img src="assets/images/dokter-icon.png" alt=""> dr. Wahyu</li>
                        <li><img src="assets/images/jam-icon.webp" alt=""> 09:00 - 19:00</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                    
                    <!-- second category listing of items -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Food First page</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $600 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/bookingform"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Food Item 2</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $540 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Food Item 3</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $720 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- second category second page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>FOOD Second Page</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $420 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Best Food Item 5</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $450 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Amazing Food Item 6</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $500 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!-- third category first page -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Third Category First Page</h4></a>
                                      <h6>by: Sale Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $750 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 2</h4></a>
                                      <h6>by: Sale Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $880 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 3</h4></a>
                                      <h6>by: Sale Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $770 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- third category second page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Third Category Second Page</h4></a>
                                      <h6>by: Sale Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $660 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 5</h4></a>
                                      <h6>by: Sale Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $550 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 6</h4></a>
                                      <h6>by: Sale Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $440 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- third category third page -->
                            <!-- NONE -->
                            
                            
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!-- 4th category 1st page -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Traveling Item 1</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $400 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Traveling Item 2</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $500 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Traveling Item 3</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $342 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- 4th category 2nd page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>4th Category 2nd Page</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $268 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Traveling Item 5</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $145 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Traveling Item 6</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $240 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- 4th category 3rd page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contacus"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>4th Category 3rd Page</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $360 / month included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
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
              <img src="assets/images/HiBeautee!.png" alt="Plot Listing">
            </div>
            <p>Website HiBeautee! hadir sebagai solusi bagi masyarakat untuk merekomendasikan klinik 
              untuk tempat treatment serta rekomendasi skincare dengan kemudahan informasi pemesanan berbasis online.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            
              <div class="col-lg-6">
                
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
        <div class="col-lg-12">
          <div class="sub-footer">
            
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