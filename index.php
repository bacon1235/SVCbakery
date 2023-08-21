<?php session_start();
include('Connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/svc.png">
    <link href="bootstrap-5.2.0-dist/bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>เข้าสู่ระบบ</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<head>
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Prompt?query=prompt">
            <style>
                body {

                  font-family: "Prompt", sans-serif;
                  background-color: white;

                }
                .card {
                    align-items: center;
                    text-align: center;
                    display: flex;
                    justify-content: center;
                }
                .container {
                    max-width: 650px;
                    width: 100%;
                    padding: 25px 30px;
                }
                .form{
                    text-align: left;
                    align-items: flex-start;
                }
                .form .student_ID {
                    display: flex;
                }
                .row {
                    text-align: left;
                }
                .forget {
                    text-align: end;
                }
                h7 {
                    font-size: 10px;
                }
                .regis {
                    text-align: center;
                }

            </style>            
</head>

<br>
<br>

<body>
<div class="container">

    <div class="card">
        <div class="card-body">
        <img src="img/svc.png" alt="svc" width="35%">
            <h3>               </h3>
            <h4>ระบบสั่งซื้อเค้ก คุกกี้</h4>
            <h4>วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</h4>
            <h6>เข้าสู่ระบบ</h6>

  <div class="form">
    <form name="login" action="checklogin.php" method="POST">
        
            <div class="Username">
                <label for="Username" class="form-label"></label>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="ชื่อผู้ใช้งาน" value="<?php if (isset($_COOKIE['Username'])) { echo $_COOKIE['Username']; } ?>" Required >
            </div>

            <div class="Pwd">
                <label for="Pwd" class="form-label"></label>
                <input type="password" class="form-control" name="Pwd" id="Pwd" placeholder="รหัสผ่าน" value="<?php if (isset($_COOKIE['Pwd'])) { echo $_COOKIE['Pwd']; } ?>" Required >
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" <?php if (isset($_COOKIE['Username'])) { ?> checked <?php } ?>>
                <label class="form-check-label" for="remember">จดจำฉัน</label>
                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                <a href="forgot-password.php">ลืมรหัสผ่าน?</a>
            </div>

            <hr>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" value="submit">เข้าสู่ระบบ</button>
            </div>

            <div class="wang">
                <h6>          </h6>
            </div>

            <div class="regis">
                <h6><a href="register.php">สมัครสมาชิก</a></h6>
            </div>


      </div>
    </form>
  </div>

    </div>
</div>

</div>

</body>
