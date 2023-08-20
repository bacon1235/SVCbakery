<?php

if(!isset($_SESSION["Username"]))
{
    echo "<script>alert('กรุณาเข้าสู่ระบบ');</script>";
    echo "<script>window.location='login.php';</script>";
    exit();
}

?>