<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HiBeautee | {{$title}}</title>
    <link rel="stylesheet" type="text/css" href="styleindex.css" />
  <body>
    <div class="bg"></div>
      <div class="bglagi"></div>
        <div class="form">
          <div class="form-title">
          <h1>Register</h1>
          </div>
        <form action="{{route('registeruser')}}" method="post">
          {{csrf_field()}}
          <input type="text" placeholder="type username" name="Username" id="Username">
          <input type="password" placeholder="type password" name="Password" id="Password">
          <input type="text" placeholder="type email" name="Email" id="Email">
          <input type="text" placeholder="type No Telp" name="NoTelp" id="NoTelp">

          
          <b>
          <input type="submit" value="Register" href="/home">

          
        </form>
        </div>
      </div> 
    </div>
  </body>
  </head>
</html>