<title>แก้ไขข้อมูลประเภทแผนกวิชา</title>

<?php include('Connect.php');

$sql = "SELECT * FROM department_t WHERE Department_TID= '$_REQUEST[Department_TID]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<?php include('A-head.php');?>

<div class="container">
    <h2>แก้ไขข้อมูลประเภทแผนกวิชา</h2>

    <form name ="AddDepartment_T" method="post" action="A-Department_Tupdate.php">

        <div class="row mb-3">
            <label for="inputDepartment_TID" class="col-sm-2 col-form-label">ลำดับประเภทแผนกวิชา</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับประเภทแผนกวิชา" class="form-control" id="inputDepartment_TID" name="Department_TID" value="<?php echo $row['Department_TID']; ?>" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputDepartment_TName" class="col-sm-2 col-form-label">ประเภทแผนกวิชา</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="inputDepartment_TName" name="Department_TName" value="<?php echo $row['Department_TName']; ?>" require>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Department_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

    </div>

<?php include('footer.php');?>