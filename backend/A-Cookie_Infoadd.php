<title>เพิ่มสินค้าประเภทคุกกี้เนยสด</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>เพิ่มสินค้าประเภทคุกกี้เนยสด</h2>

    <form class="row g-3" name ="AddCookie_Info" enctype="multipart/form-data" method="POST" action="A-Cookie_Infoinsert.php">

        <div class="col-md-6">
            <label for="inputCookieNo" class="form-label">ลำดับ</label>
            <input type="number" placeholder="ลำดับ" class="form-control" id="inputCookieNo" name="CookieNo" require>
        </div>

        <div class="col-md-6">
            <label for="inputtypeName" class="form-label">ประเภทสินค้า
            <select class="form-select" name="typeID" id="typeID" aria-label="Default select example">
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
            <label for="inputCookie_Pic" class="form-label">รูปภาพสินค้า</label>
            <input type="file" placeholder="รูปภาพสินค้า" class="form-control" id="inputCookie_Pic" name="Cookie_Pic" require accept="image/*">
        </div>

        <div class="col-md-6">
            <label for="inputCookie_Name" class="form-label">ชื่อสินค้า</label>
            <input type="text" placeholder="ชื่อสินค้า" class="form-control" id="inputCookie_Name" name="Cookie_Name" require>
        </div>

        <div class="col-md-6">
            <label for="inputCookie_Size" class="form-label">ขนาดสินค้า</label>
            <input type="text" placeholder="ขนาดสินค้า" class="form-control" id="inputCookie_Size" name="Cookie_Size" require>
        </div>

        <div class="col-md-6">
        <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดสินค้า</label>
        <input type="text" placeholder="รายละเอียดสินค้า" class="form-control" id="inputCookie_Detail" name="Cookie_Detail" require>
        </div>

        <div class="col-md-6">
            <label for="inputCookie_Price" class="col-sm-2 col-form-label">ราคาสินค้า</label>
            <input type="number" placeholder="ราคาสินค้า" class="form-control" id="inputCookie_Price" name="Cookie_Price" require>
        </div>        

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Cookie_Infolist.php">ยกเลิก</a>
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