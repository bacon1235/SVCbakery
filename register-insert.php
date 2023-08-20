<?php include('Connect.php');
isset( $_POST['Username'] ) ? $Username = $_POST['Username'] : $Username = "";
isset( $_POST['Pwd'] ) ? $Pwd = $_POST['Pwd'] : $Pwd = "";
isset( $_POST['Firstname'] ) ? $Firstname = $_POST['Firstname'] : $Firstname = "";
isset( $_POST['Surname'] ) ? $Surname = $_POST['Surname'] : $Surname = "";
isset( $_POST['ClassID'] ) ? $ClassID = $_POST['ClassID'] : $ClassID = "";
isset( $_POST['Room'] ) ? $Room = $_POST['Room'] : $Room = "";
isset( $_POST['DepartmentID'] ) ? $DepartmentID = $_POST['DepartmentID'] : $DepartmentID = "";
//isset( $_POST['RoleName'] ) ? $RoleName = $_POST['RoleName'] : $RoleName = "";

$s = "SELECT Username FROM allmember WHERE Username='$Username' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO allmember (Username, Pwd, Firstname, Surname, ClassID, Room, DepartmentID, RoleID) VALUES ('$Username' ,'$Pwd' ,'$Firstname' ,'$Surname' , '$ClassID' , '$Room' ,'$DepartmentID' ,'1') ";
    $result=mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='login.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    echo "<script>window.location='register.php';</script>";

}
?>