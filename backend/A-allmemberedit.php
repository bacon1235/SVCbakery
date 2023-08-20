<title>รายละเอียดข้อมูลสมาชิก</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

	$sql = "SELECT * FROM allmember WHERE Username = '$_REQUEST[Username]' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

   //INNER JOIN Class
    $sql4 = "SELECT * FROM allmember AS a INNER JOIN class AS c ON (a.ClassID=c.ClassID) WHERE Username= '".$_SESSION['Username']."' ";
    $result4=mysqli_query($conn,$sql4);
    $row4=mysqli_fetch_array($result4);

    //INNER JOIN DEPARTMENT
    $sql2 = "SELECT * FROM allmember AS a INNER JOIN Department_Info AS d ON (a.DepartmentID=d.DepartmentID) WHERE Username= '".$_SESSION['Username']."' ";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2);

    //INNER JOIN Role
    $sql3 = "SELECT * FROM allmember AS a INNER JOIN Role_T AS r ON (a.RoleID=r.RoleID) WHERE Username= '$_REQUEST[Username]' ";
    $result3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_array($result3);

?>

<div class="container">
    <h2>รายละเอียดข้อมูลสมาชิก</h2>

    <form class="row g-3" name ="allmember_edit" method="POST" action="A-allmemberupdate.php">

    <div class="col-md-12">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control"name="Username" value="<?php echo $row['Username']; ?>" readonly>
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
            <label for="inputClassID" class="form-label">ระดับชั้น</label>
            <input type="text" class="form-control" name="ClassID" 
            value="<?php if(!$row4) { 
                echo "-";
            }else { 
                echo $row4['ClassName'];
            }
            ?>" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputRoom" class="form-label">ห้อง</label>
            <input type="number" class="form-control" name="Room" value="<?php echo $row['Room']; ?>" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputDepartmentID" class="form-label">แผนกวิชา</label>
            <input type="text" class="form-control" name="DepartmentID" value="<?php echo $row2['DepartmentName']; ?>" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputRoleName" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="RoleName" 
            value="<?php echo $row3['RoleName']; ?>" readonly>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-allmember-list.php">ย้อนกลับ</a>
        <!--<button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>-->
        </div>

    </form>
    </div>
    </div>
    </div>

<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>