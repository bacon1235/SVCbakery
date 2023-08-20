<title>เพิ่มประเภทแผนกวิชา</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>เพิ่มประเภทแผนกวิชา</h2>

    <form name ="AddDepartment_T" method="POST" action="A-Department_Tinsert.php">

        <div class="row mb-3">
            <label for="inputDepartment_TID" class="col-sm-2 col-form-label">ลำดับประเภทแผนกวิชา</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับประเภทแผนกวิชา" class="form-control" id="inputDepartment_TID" name="Department_TID" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputDepartment_TName" class="col-sm-2 col-form-label">ประเภทแผนกวิชา</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ประเภทแผนกวิชา" class="form-control" id="inputDepartment_TName" name="Department_TName" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Department_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>

<?php include('footer.php');?>