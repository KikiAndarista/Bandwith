<?php
  $u = $con->query("SELECT * FROM users");
  if(isset($_POST['time_used'])){
    $con->query("UPDATE users 
      SET time_used='".$_POST['time_used']."',billing_plan='".$_POST['biling_plan']."'  
      WHERE id = '".$_POST['id']."'
      ");
    echo $con->error;
  }
  $data = array();
  while($a = $u->fetch_assoc()){
    array_push($data,$a);
  }
  

?>

<table style="margin:100px;width:80%">
  <tr style="background-color:black;color:white">
    <th>Username</th>
    <th>Password</th>
    <th>Billing Plan</th>
    <th>Type</th>
    <th>Valid Until</th>
    <th>Time Used</th>
    <th>Time Remain</th>
    <th>Packet Used</th>
    <th>Packet Remain</th>
  </tr>
  <?php foreach($data as $d){?>
    <tr>
      <td><?=$d['username']?></td>
      <td><?=$d['password']?></td>
      <td><?=$d['billing_plan']?></td>
      <td><?=$d['type']?></td>
      <td><?=$d['valid_until']?></td>
      <td><?=$d['time_used']?></td>
      <td><?=$d['time_remaining']?></td>
      <td><?=$d['packet_used']?></td>
      <td><?=$d['packet_remaining']?></td>
    </tr>
  
  <?php }?>
<table>

<br>
<br>
<br>
<div style="margin-left:100px">
    <form method="POST" >
      <label>How Many? :</label>
      <input type="number" name="time_used"><br><br>
      <label>Billing Plan:</label>
      <select name="biling_plan">
        <option value="5mega">5Mega</option>
        <option value="10mega">10Mega</option>
      </select><br><br>
      <label>Username:</label>
      <select name="id">
  <?php foreach($data as $d){?>
        <option value="<?=$d['id']?>"><?=$d['username']?></option>
  <?php }?>
      </select>
      <br><br>
      <input type="submit" value="Generate Voucher" style="margin-left:100px">
    </form>
<div>