<title>แก้ไขข้อมูลสินค้าประเภทคุกกีเนยสด</title>

<?php include('Connect.php');

$sql = "SELECT * FROM Cookie_Info WHERE CookieNo= '$_REQUEST[CookieNo]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<?php include('A-head.php');?>

<div class="container">
<h2>แก้ไขข้อมูลสินค้าประเภทคุกกีเนยสด</h2>

    <form class="row g-3" name ="AddCookie_Info" enctype="multipart/form-data" method="POST" action="A-Cookie_Infoupdate.php">

        <div class="col-md-6">
            <label for="inputCookieNo" class="form-label">ลำดับ</label>
            <input type="number" placeholder="ลำดับ" class="form-control" id="inputCookieNo" name="CookieNo" value="<?php echo $row['CookieNo']; ?>" require>
        </div>

        <div class="row mb-3">
            <label for="inputtypeName" class="col-sm-5 col-form-label">ประเภทสินค้า
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
            <input type="file" placeholder="รูปภาพสินค้า" class="form-control" id="inputCookie_Pic" name="Cookie_Pic" value="<?php echo $row['Cookie_Pic']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputCookie_Name" class="form-label">ชื่อสินค้า</label>
            <input type="text" placeholder="ชื่อสินค้า" class="form-control" id="inputCookie_Name" name="Cookie_Name" value="<?php echo $row['Cookie_Name']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputCookie_Size" class="form-label">ขนาดสินค้า</label>
            <input type="text" placeholder="ขนาดสินค้า" class="form-control" id="inputCookie_Size" name="Cookie_Size" value="<?php echo $row['Cookie_Size']; ?>" require>
        </div>

        <div class="col-md-6">
        <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดสินค้า</label>
        <input type="text" placeholder="รายละเอียดสินค้า" class="form-control" id="inputCookie_Detail" name="Cookie_Detail" value="<?php echo $row['Cookie_Detail']; ?>" require>
        </div>

        <div class="col-md-6">
            <label for="inputCake_Price" class="col-sm-2 col-form-label">ราคาสินค้า</label>
            <input type="number" placeholder="ราคาสินค้า" class="form-control" id="inputCookie_Price" name="Cookie_Price" value="<?php echo $row['Cookie_Price']; ?>"  require>
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

<?php include('footer.php');?>