<title>แก้ไขข้อมูลคำถาม</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

$sql = "SELECT * FROM Quest_Info WHERE QNo= '$_REQUEST[QNo]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<div class="container">
    <h2>แก้ไขข้อมูลคำถาม</h2>

    <form name ="AddQuest_Info" method="POST" action="A-Quest_Infoupdate.php">

    <div class="row mb-3">
            <label for="inputQNo" class="col-sm-2 col-form-label">ลำดับ</label>
                <div class="col-sm-3">
                    <input type="number" placeholder="ลำดับธนาคาร" class="form-control" id="inputQNo" name="QNo" value="<?php echo $row['QNo']; ?>" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputQuest" class="col-sm-2 col-form-label">คำถาม</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="คำถาม" class="form-control" id="inputQuest" name="Quest" value="<?php echo $row['Quest']; ?>" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputAnswer" class="col-sm-2 col-form-label">คำตอบ</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="คำตอบ" class="form-control" id="inputAnswer" name="Answer" value="<?php echo $row['Answer']; ?>" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Quest_Infolist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

    </div>

<?php include('footer.php');?>