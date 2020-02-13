<?php
session_start();
session_destroy();
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
    <title>STOCK OFFICE ระบบเบิกพัสดุ </title>
  </head>
    <body style="background-color: skyblue">
        <div class="container">
            <div class="row justify-content-md-center">
                <h3>ยินดีต้อนรับ</h3>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto center">
                    <form id="form1" name="form1" method="post" action="login.php">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อ</span>
                            </div>
                        <input type="text" size="50" class="form-control" name="name" id="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">รหัส</span>
                            </div>
                            <input class="form-control" type="password" id="pass" name="pass" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn_submit_index" id="btn_submit_index" value="1" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-md-center">
            </div>
        </div>
    </body>
</html>

