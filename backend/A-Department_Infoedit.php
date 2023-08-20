<title>แก้ไขข้อมูลแผนกวิชา</title>

<?php include('Connect.php');

$sql = "SELECT * FROM department_info WHERE DepartmentID= '$_REQUEST[DepartmentID]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<?php include('A-head.php');?>

<div class="container">
    <h2>แก้ไขข้อมูลแผนกวิชา</h2>

    <form name ="AddDepartment_Info" method="POST" action="A-Department_Infoupdate.php">

        <div class="row mb-3">
            <label for="inputDepartmentID" class="col-sm-2 col-form-label">ลำดับแผนกวิชา</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับแผนกวิชา" class="form-control" id="inputDepartmentID" name="DepartmentID" value="<?php echo $row['DepartmentID']; ?>" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputDepartmentName" class="col-sm-2 col-form-label">แผนกวิชา</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="แผนกวิชา" class="form-control" id="inputDepartmentName" name="DepartmentName" value="<?php echo $row['DepartmentName']; ?>" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputDepartment_TID" class="col-sm-5 col-form-label">ประเภทแผนกวิชา
            <select class="form-select" name="Department_TID" id="Department_TID" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM department_t ";
                        $qr=mysqli_query($conn,$sql);
                        while($rs=mysqli_fetch_array($qr)){
                    ?>
                    <option value="<?=$rs['Department_TName']?>"><?=$rs['Department_TName']?></option>
                    <?php } ?>    
                    </select>
                    </label>
                </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Department_Infolist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

    </div>

<?php include('footer.php');?>