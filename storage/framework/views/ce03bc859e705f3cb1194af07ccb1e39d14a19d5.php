<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Homemmed.com\signup</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" href="signup.css">
    </head>

    <body class="body">

      <img src="Vector.png" class="vector" alt="">
        <div class="rectangle"></div>
        <div class="homemed">HOMEMED</div>

      <div class="login-page">
        <div class="form">
        <form action="/signup" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" name=Full_Name placeholder="full name" />
            <input type="text" name=Email_Address placeholder="email address" />
            <input type="text" name=Username placeholder="pick a username" />
            <input type="password" name=Password id="password" placeholder="set a password" />
            <i class="fas fa-eye" onclick="show()"></i>
            <!---<input type="submit" value="Sign Up" id="submit_btn" href="/index">--->
            <button type="submit" value="Sign Up" id="submit_btn"><a href='/index'>SignUp</a></button> 
          
            <br>
            <br>
        </form>

          
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </html>
</html><?php /**PATH D:\SEM-4\Laravel\Homemed\resources\views/signup.blade.php ENDPATH**/ ?>