<html>
  <?php
    $con = new mysqli("localhost","root","","billing");
    if(isset($_POST['username'])){
      $con->query("INSERT INTO users (username,password) VALUES('".$_POST['username']."','".$_POST['password']."')");
      echo $con->error;
    ?>
      <script> alert("Registrasi Sukses");</script>
  <?php 
    }
    
  ?>
  <head>
    <title>Ry Hotspot</title>
  </head>

  <body align="center">
    <br>
    <br>
    <br>
    <h1 align="center">RY Hotspot</h1>
    <h1 align="center">Welcome to my Hotspot</h1>
    <div>you can use the internet, but have to login first</div>
    <div>You must also agree  to these <a>term and conditions.</a></div>
    <br>
    <br>
    <b>Your maximum usage time has been reached</b><br><br>
    <form method="POST">
      <label>Username :</label>
      <input name="username"><br><br>
      <label>Password</label>
      <input type="password" name="password"><br><br>
      <input type="submit" value="Login & Accept Terms">
    </form>
  </body>

</html>