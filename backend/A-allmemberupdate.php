<?php include('Connect.php');
isset( $_POST['Username'] ) ? $Username = $_POST['Username'] : $Username = "";
isset( $_POST['Pwd'] ) ? $Pwd = $_POST['Pwd'] : $Pwd = "";
isset( $_POST['Firstname'] ) ? $Firstname = $_POST['Firstname'] : $Firstname = "";
isset( $_POST['Surname'] ) ? $Surname = $_POST['Surname'] : $Surname = "";
isset( $_POST['Class'] ) ? $Class = $_POST['Class'] : $Class = "";
isset( $_POST['Room'] ) ? $Room = $_POST['Room'] : $Room = "";
isset( $_POST['DepartmentID'] ) ? $DepartmentID = $_POST['DepartmentID'] : $DepartmentID = "";
isset( $_POST['RoleName'] ) ? $RoleName = $_POST['RoleName'] : $RoleName = "";

$sql=" UPDATE allmember SET Username= '$_REQUEST[Username]',
                            Pwd= '$_REQUEST[Pwd]',
                            Firstname= '$_REQUEST[Firstname]',
                            Surname= '$_REQUEST[Surname]',
                            ClassID= '$_REQUEST[Class]',
                            Room= '$_REQUEST[Room]',
                            DepartmentID= '$_REQUEST[DepartmentID]',
                            RoleID= '$_REQUEST[RoleName]' WHERE Username='$Username' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-allmember-list.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
