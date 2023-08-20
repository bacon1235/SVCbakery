<?php include('Connect.php');?>
<?php
	session_start();
	if($_POST["pwd1"] != $_POST["pwd2"])
	{
        echo "<script>alert('รหัสผ่านไม่ตรงกัน กรุณากรอกรหัสผ่านใหม่');</script>";
        echo "<script>window.location='change-pwd.php';</script>";
		exit();
	}
	$sql = "UPDATE allmember SET pwd = '$_POST[pwd1]' WHERE Username = '".$_SESSION["Username"]."' ";
	$result = mysqli_query($conn, $sql);
    
    if($_SESSION["RoleName"]=="ผู้ดูแลระบบ"){ 
        echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อย');</script>";
        echo "<script>window.location='login.php';</script>";
      }
  if ($_SESSION["RoleName"]=="คุณครู/อาจารย์"){ 
    echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อย');</script>";
    echo "<script>window.location='login.php';</script>";
      }
	else
	{
        echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อย');</script>";
        echo "<script>window.location='login.php';</script>";
	}

?>