<title>เพิ่มประเภทการชำระเงิน</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>เพิ่มประเภทการชำระเงิน</h2>

    <form name ="AddPayment_T" method="POST" action="A-Payment_Tinsert.php">

        <div class="row mb-3">
            <label for="inputPaymentID" class="col-sm-2 col-form-label">ลำดับประเภทการชำระเงิน</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับประเภทการชำระเงิน" class="form-control" id="inputPaymentID" name="PaymentID" require>
                </div>
        </div> 

        <div class="row mb-3">
            <label for="inputPaymentName" class="col-sm-2 col-form-label">ประเภทการชำระเงิน</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ประเภทการชำระเงิน" class="form-control" id="inputPaymentName" name="PaymentName" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Payment_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>

<?php include('footer.php');?>