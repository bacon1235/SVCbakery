<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

$sql = "SELECT * FROM role_t WHERE RoleID= '$_REQUEST[RoleID]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<div class="container">
    <h2>แก้ไขประเภทตำแหน่ง/บทบาท</h2>

    <form name ="AddRole_T" method="post" action="A-Role_Tupdate.php"> 
        
        <div class="row mb-3">
            <label for="inputRoleID" class="col-sm-2 col-form-label">ลำดับประเภทตำแหน่ง</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputRoleID" name="RoleID" value="<?php echo $row['RoleID']; ?>" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputNameR" class="col-sm-2 col-form-label">ประเภทตำแหน่ง/บทบาท</label>
                <div class="col-sm-3">
            <input type="text" class="form-control" id="inputRoleName" name="RoleName" value="<?php echo $row['RoleName']; ?>" require>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Role_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

    </div>

<?php include('footer.php');?>