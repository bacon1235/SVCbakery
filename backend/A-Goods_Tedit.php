<title>แก้ไขประเภทสินค้า</title>
<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

$sql = "SELECT * FROM goods_t WHERE typeID= '$_REQUEST[typeID]' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<div class="container">
    <h2>แก้ไขประเภทสินค้า</h2>

    <form name ="AddGoodsT" method="post" action="A-Goods_Tupdate.php">

        <div class="row mb-3">
            <label for="inputtypeID" class="col-sm-2 col-form-label">ลำดับประเภทสินค้า</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับประเภทสินค้า" class="form-control" id="inputtypeID" name="typeID" value="<?php echo $row['typeID']; ?>" require>
                </div>
        </div>  

        <div class="row mb-3">
            <label for="inputNameT" class="col-sm-2 col-form-label">ประเภทสินค้า</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="inputtypeName" name="typeName" value="<?php echo $row['typeName']; ?>" require>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Goods_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

    </div>

<?php include('footer.php');?>