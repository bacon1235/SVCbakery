<title>เพิ่มธนาคาร</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>เพิ่มธนาคาร</h2>

    <form name ="AddBank_Info" method="POST" action="A-Bank_Infoinsert.php">

        <div class="row mb-3">
            <label for="inputBankNo" class="col-sm-2 col-form-label">ลำดับธนาคาร</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับธนาคาร" class="form-control" id="inputBankNo" name="BankNo" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputBankName" class="col-sm-2 col-form-label">ชื่อธนาคาร</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ชื่อธนาคาร" class="form-control" id="inputBankName" name="BankName" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputBankNumber" class="col-sm-2 col-form-label">เลขบัญชี</label>
                <div class="col-sm-3">
                    <input type="number" placeholder="เลขบัญชี" class="form-control" id="inputBankNumber" name="BankNumber" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputBankOwner" class="col-sm-2 col-form-label">ชื่อบัญชี</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ชื่อบัญชี" class="form-control" id="inputBankOwner" name="BankOwner" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputBankDate" class="col-sm-2 col-form-label">วันที่เพิ่มข้อมูล</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="inputBankDate" name="BankDate" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Bank_Infolist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>

<?php include('footer.php');?>