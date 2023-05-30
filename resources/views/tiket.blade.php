
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
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <script>
    function downloadTicket() {
      const ticketElement = document.getElementById('ticket');
      
      html2canvas(ticketElement).then(function(canvas) {
        const ticketImageURL = canvas.toDataURL('image/png');
        const downloadLink = document.createElement('a');
        downloadLink.href = ticketImageURL;
        downloadLink.download = 'ticket.png';
        downloadLink.click();
      });
    }

  </script>
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
                  <li>
                    <div class="dropdown">
                      <a href="/pemesanan">Pemesanan</a>
                      <div class="dropdown-content">
                        <a href="/tiket">Tiket Saya</a>
                      </div>
                    </li>
                  
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
              <h6>Tiket Booking</h6>
              <h2>Cek Tiket Anda!</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="listing-page">
      <div class="container">
        <div class="containertombol">
            <button class="buttonDownload" onclick="downloadTicket()">Unduh Tiket</button>
        </div>
        <div class="ticket" id="ticket">
            
            <div class="header">
                
              <h1>HiBeatuee!</h1>
              <h6>MSG-1623791027-0001-812390-2833-A-ASDH23980</h6>
            </div>
            <div class="body">
              <p class="owner">MSG CLINIC</p>
              <p class="tiket-vertical">MSG-1623791027-0001-812390-2833-A-ASDH23980</p>

                <!-- kiri -->
              <p class="atas-nama">Atas Nama</p>
              <p class="isi-nama">Salma Fauziyah Firdaus</p>
              <p class="atas-jumlahT">Jumlah Treatment Yang Diambil</p>
              <p class="isi-jumlahT">2 Treatment</p>

              <!-- kanan -->
              <p class="atas-tgl">Tanggal Kunjungan</p>
              <p class="isi-tgl">10 Februari 2023</p>
              <p class="atas-jam">Jam Treatment</p>
              <p class="isi-jam">09:00:00 - 11:00:00 WIB</p>

              <!-- tengah -->
              <p class="tengah1">Datang sesuai tanggal dan jam pada tiket</p>
              <p class="tengah2">HARAP UNDUH DAN SIMPAN TIKET INI UNTUK DISCAN DI KLINIK YANG DI TUJU!</p>
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
