<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HiBeautee | {{ $title}}</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/css/form.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <font style="font-size: 75px;
                font-weight: bold; 
                color: dimgray;
                text-align: center;" 
                ><a href="index.html">HiBeautee!</a></font>
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
    <section class="section-book1">
      <div class="book1">
        <div class="book__form">
          <form action="/submitted" class="form" method="POST">
            <h2 class="heading">
              Start booking now
            </h2>
            <div class="form__group">
              <input
                type="text"
                name="Nama_cust"
                value={{Session::get('pengguna')['NamaUser']}}
                class="form__input"
                placeholder="Full name"
                id="name"
                required
              />
              <label for="name" class="form__label">Full name</label>
            </div>

            <div class="form__group">
              <input
                type="email"
                name="Email_cust"
                class="form__input"
                placeholder="Email address"
                value={{Session::get('pengguna')['Email']}}
                id="email"
                required
              />
              <label for="email" class="form__label">Email address</label>
            </div>
            <div class="form__group">
              <input
                type="text"
                name="Telp_cust"
                class="form__input"
                value={{Session::get('pengguna')['NoTelp']}}
                placeholder="No Telp"
                id="telp_cust"
                required
              />
              <label for="telp_cust" class="form__label">No Telp</label>
            </div>
            <div class="form__group">
              <input
                type="date"
                name="date_pesan"
                class="form__input"
                placeholder="Pilih Tanggal Treatment"
                id="date_treatment"
                required
              />
              <label for="date_treatment" class="form__label">Tanggal Treatment</label>
            </div>
            <div class="form__group">
            <select class="form__input" id="time_treatment" name="Shift" required>
      <option value="">Pilih Shift (jam ditentukan klinik melalui email)</option>
      <option value="08.00-12.00">Shift pagi antara jam 08.00-12.00</option>
      <option value="13.00-17.00">Shift Sore antara jam 13.00-17.00</option>
      <option value="18.00-22.00">Shift Malam antara jam 18.30-22.00</option>
    </select>
    <label for="time_treatment" class="form__label">Jam Treatment</label>
    <br>
    <br>
    <br>
              <input type = "checkbox" name = "terms" value="accepted"><h2> Saya Setuju dengan <a href="/syarat_dan_ketentuan"> Syarat dan Ketentuan</a> </h2> </input>
            </div>
            

            
          </form>
          <form action="/tiket" method="get" target="_top">
         
            <div class="form__group">
              
              <button type="submit" href="/tiket"class="btn1">Next step</button>
          </div>
        </form>
          
        </div>
      </div>
    </section>
    
  </body>
</html>