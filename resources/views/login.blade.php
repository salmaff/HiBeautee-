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
          <h1>Login</h1>
          </div>
        <form action="{{route('loginprosesuser')}}" method="post">
          {{csrf_field()}}
          <input type="text" placeholder="type username" name="Username" id="Username">
          <input type="password" placeholder="type password" name="Password" id="Password">
          <input type="checkbox" class="remember"><p>Remember me ?</p>
          <input type="submit" value="Login" href="/home">
        </form>
        <b>

          <form action="/register" method="get" target="_top">
         
              <input type="submit" value="Register" href="">
          </form>
 
        </div>
      </div> 
    </div>
  </body>
  </head>
</html>