<title>แก้ไขข้อมูลคำนำหน้า</title>

<?php include('Connect.php');

$sql = "SELECT * FROM Prename_T WHERE PrenameID= '$_REQUEST[PrenameID]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<?php include('A-head.php');?>

<div class="container">
    <h2>แก้ไขข้อมูลคำนำหน้า</h2>

    <form name ="AddPrename_T" method="POST" action="A-Prename_tupdate.php">

        <div class="row mb-3">
            <label for="inputPrenameID" class="col-sm-2 col-form-label">ลำดับ</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับ" class="form-control" id="inputPrenameID" name="PrenameID" value="<?php echo $row['PrenameID']; ?>" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputPrename" class="col-sm-2 col-form-label">คำนำหน้า</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="คำนำหน้า" class="form-control" id="inputPrename" name="Prename" value="<?php echo $row['Prename']; ?>" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Prename_tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

    </div>

<?php include('footer.php');?>