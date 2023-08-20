<title>ข้อมูลของฉัน</title>
<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('T-head.php');?>
<?php

	$sql = "SELECT * FROM allmember WHERE Username = '".$_SESSION['Username']."' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

    //INNER JOIN Role
    $sql3 = "SELECT * FROM allmember AS a INNER JOIN Role_T AS r ON (a.RoleID=r.RoleID) WHERE Username= '".$_SESSION['Username']."' ";
    $result3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_array($result3);

?>


<div class="container">
<h2>ข้อมูลของฉัน</h2>

<form class="row g-3" name ="profile" method="POST" action="T-change-pwd.php">

    <div class="col-md-6">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control"name="Username" value="<?php echo $row['Username']; ?>" readonly>
    </div>

    <div class="col-md-6">
        <label for="inputPwd">รหัสผ่าน</label>
            <input type="password" class="form-control" name="Pwd" value="<?php echo $row['Pwd']; ?>">
            </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="Firstname" value="<?php echo $row['Firstname']; ?>" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" name="Surname" value="<?php echo $row['Surname']; ?>" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputRoleName" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="DepartmentID" value="<?php echo $row3['RoleName']; ?>" readonly>
        </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary" type="submit" value="submit">แก้ไขรหัสผ่าน</button>
        <a class="btn btn-danger" type="cancel" value="Logout" href="../logout.php" onclick="return confirm('ออกจากระบบหรือไม่');">ออกจากระบบ</a>
    </div>

</form>           
</div>

<br>   
<br>              
<br>
<br>   
<br>              
<br>

<?php include('footer.php'); ?>