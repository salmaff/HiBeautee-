<!DOCTYPE html>
<html>
<head>
	<title>Syarat dan Ketentuan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/s&k.css">
	<script src="https://kit.fontawesome.com/3ef3559250.js" crossorigin="anonymous"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var button = document.querySelector('.decline');
      button.addEventListener('click', function() {
        window.location.href = '/home';
      });
    });
  </script>
    
</head>	
<body>
<section class="flex_center">
  <div class="tc_main">
    <div class="tc_content">
      <div class="tc_top">
        <div class="icon">
          <i class="fa-solid fa-clipboard"></i>
        </div>
        <div class="title">
          <p>Syarat dan Ketentuan</p>
        </div>
        <div class="info">
          Tiket booking yang dipesan secara online akan menunggu waktu beberapa saat untuk dikonfirmasi oleh klinik penyedia jasa. Klinik akan mengirimkan email secara pribadi untuk melakukan konfirmasi. Apabila Anda menemukan masalah pada pemesanan anda bisa menghubungi <a href="https://wa.me/082142635883"> Salma </a> atau mengirim feedback melalui laman <a href="/contacus">Feedback</a>
        </div>
      </div>
      <div class="tc_bottom">
        <div class="title">
          <p>Hal yang Harus Diperhatikan</p>
        </div>
        <div class="info">
          <p>Apabila pesanan telah terkonfirmasi maka Anda harus datang 15 menit sebelum pelayanan dimulai.</p>
          <p>Customer yang terlambat harus menghubungi klinik.</p>
        </div>
      </div>
    </div>
    <div class="tc_btns">
      <button class="accept">
        Setuju
      </button>
      <button class="decline">
        Batalkan
      </button>
    </div>
  </div>
</section>

</body>
</html>