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
    <title>ลืมรหัสผ่าน</title>
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
                    max-width: 500px;
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

<?php
$sql = "SELECT * FROM allmember ";
$qr=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($qr);
?>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="card">
        <div class="card-body">
        <img src="img/svc.png" alt="svc" width="30%">
        <h3>               </h3>

        <form action="send.php" method="POST">
            <h3 class="text-center">กรอกอีเมล</h3>
            <div class="Username">
                <label for="Username" class="form-label"></label>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="อีเมล"Required >
            </div>

<br>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="check-email" value="Continue">ตกลง</button>
            </div>

                   <!-- <div class="form-group">
                        <input class="form-control button" type="submit"  value="Continue">
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>