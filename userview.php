<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>credit management</title>
    <style media="screen">
      body{
        font-family: sans-serif;
        font-size: 11pt;
        background-image: url(feelalive.jpg);
        background-size: cover;
        background-attachment: fixed;
      }

      table{
          width: 80%;

      }

      table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        opacity: 0.95;
      }
      th, td{
        padding: 10px;
        text-align: center;
      }
      #sheader{
        background-color: #a70000;
        color: white;
      }
      td:nth-child(even){
        background-color: #e8e8e8
      }
      td:nth-child(odd){
        background-color: white;
      }
      #header{
          background-color: #005cb7;
      }
      button{
          margin:auto;
        display:block;
        background: #005cb7;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
        border: none;
          outline: none;
          height: 40px;
          width: 320px;
      }

      button:hover{
          cursor: pointer;
          background: #036;
          color: #000;
      }

      .heading{
          color: #fff;
          font-size: 40px;
      }

    </style>
  </head>
  <body>
    <?php
      $mydb = new mysqli('localhost','id9675187_ashish','hello','id9675187_credit') or die(mysqli_error($mydb));
      $result = $mydb->query("Select * from `User table`") or die($mydb->error);
    ?>
    <div class="heading">
    <h1 align="center">Credit Management</h1>
    </div>
    <table align="center">
      <thead><td id="header" colspan="7"><h1>User Data</h1></td></thead>
      <thead id="sheader">
        <tr>
          <th>User</th>
          <th colspan="2">id</th>
          <th colspan="2">current credit</th>
          <th>phone</th>
        </tr>
      </thead>
      <?php
        $Users = $_GET['Users'];
      ?>
          <tr>
            <td colspan="1"><?php echo $Users ?></td>
            <td colspan="2"><?php while ($row = $result->fetch_assoc()) { if($row['Users'] == $Users){ echo $row['id']; break;}} ?></td>
            <td colspan="2"><?php echo $row['current credit']; ?></td>
            <td><?php echo $row['phone'];?></td>
          </tr>
    </table><br>
    <form action="update.php" method="GET">
        <input type="hidden" value="<?php echo $Users?>" id="Users" name="Users">
  <button type="submit">Transfer Credits</button>
</form>
<form action="Transaction_Table.php">
  <button type="submit">Transaction Table</button>
</form>
  </body>
</html>
