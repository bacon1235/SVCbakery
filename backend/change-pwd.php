<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/svc.png">
    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>แก้ไขรหัสผ่าน</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Prompt?query=prompt">
            <style>
                body {

                  font-family: "Prompt", sans-serif;

                }

            </style>
</head>

<div class="container">
    <nav class="navbar" >
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/head.png" alt="" width="75%" class="d-inline-block align-text-top"></a>
        </div>
    </nav>
</div>

<div class="container">
<h2>แก้ไขรหัสผ่าน</h2>

<form name ="change-pwd" method="POST" action="update-pwd.php">

    <div class="row mb-3">
        <label for="inputpwd1" class="col-sm-2 col-form-label">รหัสผ่านใหม่</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="inputpwd1" name="pwd1" require>
            </div>
    </div>

    <div class="row mb-3">
        <label for="inputpwd2" class="col-sm-2 col-form-label">ยืนยันรหัสผ่าน</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="inputpwd2" name="pwd2" require>
            </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-danger" type="cancel" value="Logout" href="A-profile.php">ยกเลิก</a>
        <button class="btn btn-primary" type="submit" value="submit">ยืนยัน</button>
    </div>

</form>


    
              

</div>
<?php include('footer.php'); ?>