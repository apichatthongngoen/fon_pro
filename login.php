<?php
require_once 'inc/dbconnect.php';
require_once 'inc/c_login.php';

if (isset($_POST['name']) && $_POST['name'] != "") {
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    c_login("0",$name,$pass);
}
checkpage(0);  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="inc/autocomplete.js"></script>
    <link rel="stylesheet" href="inc/autocomplete.css"  type="text/css"/>
    <title>STOCK OFFICE เบิกพัสดุ </title>
  </head>
  <body>
    <div class="container">

<br>
    <?php
      echo"
    <a href=\"del.php\" class=\"btn btn-primary btn-lg\">เบิกอะไหล่</a>
    <br><br>
    <a href=\"additem.php\" class=\"btn btn-warning btn-lg\">ซื้ออะไหล่เข้า</a>
    <br><br>
    <a href=\"admin/index.php\" class=\"btn btn-info btn-lg\">ADMIN</a>
    
    ";
    echo'

    </div>
    
    
    
    ';