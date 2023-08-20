<?php include('Connect.php');
isset( $_POST['BankNo'] ) ? $BankNo = $_POST['BankNo'] : $BankNo = "";
isset( $_POST['BankName'] ) ? $BankName = $_POST['BankName'] : $BankName = "";
isset( $_POST['BankNumber'] ) ? $BankNumber = $_POST['BankNumber'] : $DepartmentName = "";
isset( $_POST['BankOwner'] ) ? $BankOwner = $_POST['BankOwner'] : $BankOwner = "";
isset( $_POST['BankDate'] ) ? $BankDate = $_POST['BankDate'] : $BankDate = "";

$s = "SELECT BankNo FROM Bank_Info WHERE BankNo='$BankNo' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO Bank_Info (BankNo, BankName, BankNumber, BankOwner, BankDate) VALUES ('$BankNo' ,'$BankName' ,'$BankNumber' ,'$BankOwner' ,'$BankDate') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Bank_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Bank_Infolist.php';</script>";
}
?>