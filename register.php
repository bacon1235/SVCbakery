<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/svc.png">
    <link href="bootstrap-5.2.0-dist/bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>สมัครสมาชิก</title>
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
                    max-width: 900px;
                    width: 100%;
                    padding: 25px 30px;
                }
                .form{
                    text-align: left;
                    align-items: flex-start;
                }
                .form .student_PN {
                    display: flex;
                    column-gap: 10px;
                }
                .row {
                    text-align: left;
                }
                .login {
                    text-align: center;
                }
                .cardd {
                    max-width: 900px;
                    align-items: center;
                    display: flex;
                }
                .vl {
                    border-left: 6px solid green;
                    height: 500px;
                }

            </style>            
</head>

<?php include('Connect.php');?>

<body>
<br>

<div class="container"> 
<div class="cardd">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4 text-center">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <img src="img/svc.png" alt="svc" width="50%">
            <h3>               </h3>
            <h6>ระบบสั่งซื้อเค้ก คุกกี้ <br>วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</h6>

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title text-center">สมัครสมาชิก</h4>
        <div class="form">
    <form class="row g-3" name ="Register" action="register-insert.php" method="POST">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control"name="Username" placeholder="อีเมล" required>
        </div>

        <div class="form-group">
            <label for="exampleInputPwd">รหัสผ่าน</label>
            <input type="password" class="form-control"name="Pwd" placeholder="รหัสผ่าน" required>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="Firstname" placeholder="ชื่อ" required>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" name="Surname" placeholder="นามสกุล" required>
        </div>

        <div class="col-md-6">
            <label for="inputClassID" class="form-label">ระดับชั้น</label>
            <select class="form-select" name="ClassID" id="ClassID" aria-label="Default select example">
                        <?php
                            $sql="SELECT * FROM Class ";
                            $qr=mysqli_query($conn,$sql);
                            while($rs=mysqli_fetch_array($qr)){
                        ?>
                <option value="<?=$rs['ClassID']?>"><?=$rs['ClassName']?></option>
                        <?php } ?>    
            </select>
        </div>

        <div class="col-md-6">
            <label for="inputRoom" class="form-label">ห้อง</label>
            <input type="number" class="form-control" name="Room" placeholder="ห้อง" required>
        </div>

        <div class="col-md-12">
            <label for="inputDepartmentID" class="form-label">แผนกวิชา</label>
            <select class="form-select" name="DepartmentID" id="DepartmentID" aria-label="Default select example">
                        <?php
                            $sql1="SELECT * FROM Department_Info ";
                            $qr1=mysqli_query($conn,$sql1);
                            while($rs=mysqli_fetch_array($qr1)){
                        ?>
                <option value="<?=$rs['DepartmentID']?>"><?=$rs['DepartmentName']?></option>
                        <?php } ?>    
            </select>
        </div>

        </div>
        
        <BR>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" value="submit">สมัครสมาชิก</button>
            </div>

                <div class="wang">
                <h6>          </h6>
            </div>

            <div class="login">
                <h7><a href="login.php">เข้าสู่ระบบ</a></h7>
            </div>

              </div>
              
              </div>
  </div>
      </div>
    </form>
  </div>

    </div>
</div>

</div>
</div>

</body>
      </div>
    </div>
  </div>
</div>






<!--

<div class="container"> 

    <div class="card">
        <div class="card-body" >
            <img src="img/svc.png" alt="svc" width="20%">
            <h3>               </h3>
            <h5>ระบบสั่งซื้อเค้ก คุกกี้ <br>วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</h5>
            <h6>สมัครสมาชิก</h6>

  <div class="form">
    <form class="row g-3" name ="Register" action="register-insert.php" method="POST">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control"name="email" placeholder="อีเมล" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">รหัสผ่าน</label>
            <input type="password" class="form-control"name="password" placeholder="รหัสผ่าน" required>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="Firstname" placeholder="ชื่อ" required>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">นามสกุล</label>
            <input type="password" class="form-control" name="Surname" placeholder="นามสกุล" required>
        </div>

        <div class="col-md-6">
            <label for="inputState" class="form-label">ระดับชั้น</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="inputCity" class="form-label">ห้อง</label>
            <input type="number" class="form-control" name="Room" placeholder="ห้อง" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">แผนกวิชา</label>
            <input type="email" class="form-control"name="DepartmentID" required>
        </div>

        </div>
        
        <BR>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" value="submit">สมัครสมาชิก</button>
            </div>

                <div class="wang">
                <h6>          </h6>
            </div>

            <div class="login">
                <h7><a href="login.php">เข้าสู่ระบบ</a></h7>
            </div>

              </div>
              

      </div>
    </form>
  </div>

    </div>
</div>

</div>
</div>

</body> -->