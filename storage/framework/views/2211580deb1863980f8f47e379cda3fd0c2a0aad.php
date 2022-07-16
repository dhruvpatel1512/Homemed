
<!DOCTYPE HTML>
<html>
<head>
  <title>Homemmed.com\Login</title>
 
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css">
  
</head>

<body class="body">
  <img src="Vector.png" class="vector" alt="">
<div class="rectangle"></div>
<div class="homemed">HOMEMED</div>

<div class="login-page">
  <div class="form">

    <form>
      <input type="text" placeholder="&#xf007;  username"/>
      <input type="password" id="password" placeholder="&#xf023;  password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button type="button" onclick="window.location.href='index.html'">LOGIN</button>
      <p class="message"></p>
    </form>

    <form class="login-form">
      <button type="button"><a href='/signup'>SIGN UP </a></button>
    </form>
  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html><?php /**PATH C:\Users\Dhruv Patel\laravel\Homemed\resources\views/login.blade.php ENDPATH**/ ?>