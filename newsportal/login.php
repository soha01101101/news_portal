<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style3.css">
    
  </head>
  <body>
      <header>
        <h1>CHALKBOARD BULLETIN</h1>
        <div class="list">
        <nav>
        <ul class="navli">
          
          <li><a href="admin/index.php">Admin</a></li>
        </ul>
        </nav> 
        </div> 
      </header>

      <form action="loginp.php" class="box" method="POST">
        <h1>Login</h1>

        <input type="text" name="usnm" placeholder="Username" autocomplete="off" required="">
        <input type="password" name="pass" placeholder="Password" required="">
        <input type="submit" name="btn" value="Login"><br>
        <div class="btm">Don't have account? <a href="registration.php">Sign up</a></div>

      </form>

     


  </body>
</html>