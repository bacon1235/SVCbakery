<title>แก้ไขข้อมูลสินค้า</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

$sql = "SELECT * FROM Product_Info WHERE PD_No= '$_REQUEST[PD_No]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>


<div class="container">
<h2>แก้ไขข้อมูลสินค้า</h2>

    <form class="row g-3" name ="Product_Info" enctype="multipart/form-data" method="POST" action="A-Product_Infoupdate.php">

        <div class="col-md-6">
            <label for="inputPD_No" class="form-label">ลำดับ</label>
            <input type="number" placeholder="ลำดับ" class="form-control" id="inputPD_No" name="PD_No" value="<?php echo $row['PD_No']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputPD_Pic" class="form-label">รูปภาพสินค้า</label>
            <input type="file" placeholder="รูปภาพสินค้า" class="form-control" id="inputPD_Pic" name="PD_Pic" value="<?php echo $row['PD_Pic']; ?>" require accept="image/*">
        </div>

        <div class="col-md-6">
            <label for="inputPD_Name" class="form-label">ชื่อสินค้า</label>
            <input type="text" placeholder="ชื่อสินค้า" class="form-control" id="inputPD_Name" name="PD_Name" value="<?php echo $row['PD_Name']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputtypeName" class="form-label">ประเภทสินค้า
            <select class="form-select" name="typeName" id="typeName" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM goods_t ";
                        $qr=mysqli_query($conn,$sql);
                        while($rs=mysqli_fetch_array($qr)){
                    ?>
                    <option value="<?=$rs['typeName']?>"><?=$rs['typeName']?></option>
                    <?php } ?>    
                    </select>
                    </label>
        </div>

        <div class="col-md-6">
        <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดสินค้า</label>
        <input type="text" placeholder="รายละเอียดสินค้า" class="form-control" id="inputPD_Detail" name="PD_Detail" value="<?php echo $row['PD_Detail']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputPD_amount" class="form-label">จำนวน</label>
            <input type="number" placeholder="ชื่อสินค้า" class="form-control" id="inputPD_amount" name="PD_amount" value="<?php echo $row['PD_amount']; ?>"  require>
        </div>

        <div class="col-md-6">
            <label for="inputPD_Price" class="col-sm-2 col-form-label">ราคาสินค้า</label>
            <input type="number" placeholder="ราคาสินค้า" class="form-control" id="inputPD_Price" name="PD_Price" value="<?php echo $row['PD_Price']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputdiscount" class="col-sm-2 col-form-label">ส่วนลด</label>
            <input type="number" placeholder="ส่วนลด" class="form-control" id="inputdiscount" name="discount" value="<?php echo $row['discount']; ?>" require>
        </div> 

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Product_Infolist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

        </form>

</div>

<br>
<br>
<br>
<br>

<?php include('footer.php');?>