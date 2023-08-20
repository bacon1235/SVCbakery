<title>เพิ่มคำนำหน้าชื่อ</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>เพิ่มคำนำหน้าชื่อ</h2>

    <form name ="AddPrename_T" method="POST" action="A-Prename_tinsert.php">

        <div class="row mb-3">
            <label for="inputPrenameID" class="col-sm-2 col-form-label">ลำดับ</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับ" class="form-control" id="inputPrenameID" name="PrenameID" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputPrename" class="col-sm-2 col-form-label">คำนำหน้า</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="คำนำหน้า" class="form-control" id="inputPrename" name="Prename" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Prename_tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>

<?php include('footer.php');?>