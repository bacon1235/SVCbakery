<title>เพิ่มคำถามที่พบบ่อย</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>เพิ่มคำถามที่พบบ่อย</h2>

    <form name ="AddQuest_Info" method="POST" action="A-Quest_Infoinsert.php">

        <div class="row mb-3">
            <label for="inputQNo" class="col-sm-2 col-form-label">ลำดับ</label>
                <div class="col-sm-3">
                    <input type="number" placeholder="ลำดับ" class="form-control" id="inputQNo" name="QNo" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputQuest" class="col-sm-2 col-form-label">คำถาม</label>
                <div class="col-sm-3">
                    <textarea type="text" rows="5" placeholder="คำถาม" class="form-control" id="inputQuest" name="Quest" require></textarea>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputAnswer" class="col-sm-2 col-form-label">คำตอบ</label>
                <div class="col-sm-3">
                    <textarea type="text" rows="7" placeholder="คำตอบ" class="form-control" id="inputAnswer" name="Answer" require></textarea>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Quest_Infolist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>