<?php
session_start();
require_once 'dbconnect.php';
$dt = new DateTime();
$mysqli = connect();
function c_login($at,$name,$pass)
{
    global $mysqli;
    global $dt;
    $sql = "SELECT * FROM admin_1  WHERE name_id = '$name' and pass = '$pass' ORDER BY id DESC LIMIT 2";
    $qr = select($sql, $mysqli);
    $total = count($qr);
    //echo $total;
    if (isset($total) && $total != 0) {
        $rs = $qr[0];
        $dt = $dt->format('Y-m-d H:i:s');
        $dtnum = rand(1, 1000000);
        $data = array(
            "code" => $dtnum,
            "name" => $rs['name_id'],
            "status" => '0',
            "at" => $at,
            "date_time" => $dt,
        );
        insert("code_login", $data);
        $_SESSION['name'] =$dtnum ;
        $_SESSION['at'] = $at;
        $_SESSION['name_login'] = $rs['name_id'];
        //echo $_SESSION['name'];
        //delete2("add_users", "code=" . $code, $mysqli2);
        //header("Location:./index.php");
    }
}

function checkpage($page)
{
    if (isset($_SESSION['name_login']) && $_SESSION['name_login'] != "") {
        $name_code = $_SESSION['name_login'];
        $sql = "SELECT * FROM admin_1  WHERE name_id = '$name_code' ORDER BY id DESC LIMIT 2";
        $qr = select($sql);
        $total = count($qr);
        $rs = $qr[0];
        if (isset($total) && $total != 0) { 
        }
    } else {
        header("Location:./error.php");
    }
}
function checkpage1($page)
{
    if (isset($_SESSION['name_login']) && $_SESSION['name_login'] != "") {
        $name_code = $_SESSION['name_login'];
        $sql = "SELECT * FROM admin_1  WHERE name_id = '$name_code' ORDER BY id DESC LIMIT 2";
        $qr = select($sql);
        $total = count($qr);
        $rs = $qr[0];
        if (isset($total) && $total != 0) { 
        }
    } else {
        header("Location:../error.php");
    }
}

function name_login($name_code){ 
    $sql = "SELECT * FROM code_login  WHERE code = $name_code ORDER BY id DESC LIMIT 2";
    $qr = select($sql);
    $total = count($qr);
    $rs = $qr[0];   
    return $rs['name'];
}
