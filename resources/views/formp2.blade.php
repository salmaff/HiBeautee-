<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
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
                    <li><a href="/pemesanan">Pemesanan</a></li>
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
          <form action="#" class="form">
            <h2 class="heading">
              Start booking now
            </h2>
            <div class="form__group">
              <input
                type="text"
                class="form__input"
                placeholder="No Hp"
                id="telp_cust"
                required
              />
              <label for="telp_cust" class="form__label">No Hp</label>
            </div>

            <div class="form__group">
              <input
                type="date"
                class="form__input"
                placeholder="Tanggal Treatment"
                id="Date_treatment"
                required
              />
              <label for="Date_treatment" class="form__label">Tanggal Treatment</label>
            </div>
            <div class="form__group">
              <div class="form__radio-group">
                <input
                  type="radio"
                  class="form__radio-input"
                  id="small"
                  name="size"
                />
              </div>

              <div class="form__radio-group">
                <input
                  type="radio"
                  class="form__radio-input"
                  id="large"
                  name="size"
                />
            <div class="form__group">
                <button class="btn1">submit &rarr;</button>
            </div>

            
          </form>
        </div>
      </div>
    </section>
    
  </body>
</html>