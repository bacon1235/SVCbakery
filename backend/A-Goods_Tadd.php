<title>เพิ่มประเภทสินค้า</title>
<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>เพิ่มประเภทสินค้า</h2>

    <form name ="AddGoods_T" method="POST" action="A-Goods_Tinsert.php">

        <div class="row mb-3">
            <label for="inputtypeID" class="col-sm-2 col-form-label">ลำดับประเภทสินค้า</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับประเภทสินค้า" class="form-control" id="inputtypeID" name="typeID" require>
                </div>
        </div>    

        <div class="row mb-3">
            <label for="inputNameT" class="col-sm-2 col-form-label">ประเภทสินค้า</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ประเภทสินค้า" class="form-control" id="inputtypeName" name="typeName" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Goods_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>

<?php include('footer.php');?>