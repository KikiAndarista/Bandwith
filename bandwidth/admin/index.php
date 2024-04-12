<html>
  <?php
    $con = new mysqli("localhost","root","","billing");
    
  ?>
  <head>
    <title>Ry Hotspot</title>
  </head>
  
  <body >
    <nav>
      <a href="index.php?bill" style="margin-left:100px"> Billing Plan </a>
      <a href="index.php?voucher"  style="margin-left:10px"> Voucher Management </a>
    </nav>
    <?php
      if(isset($_GET['bill'])){
        require("bill.php");
      }
      else{
        require("voucher.php");
      }
    ?>
  </body>
  
</html>