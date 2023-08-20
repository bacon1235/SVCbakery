<title>เพิ่มประเภทตำแหน่ง</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>
<br>

<div class="container">
    <h2>เพิ่มประเภทตำแหน่ง</h2>

    <form name ="AddRole_T" method="POST" action="A-Role_Tinsert.php">

        <div class="row mb-3">
            <label for="inputRoleID" class="col-sm-2 col-form-label">ลำดับประเภทตำแหน่ง</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ลำดับประเภทตำแหน่ง" class="form-control" id="inputRoleID" name="RoleID" require>
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputNameR" class="col-sm-2 col-form-label">ประเภทตำแหน่ง/บทบาท</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="ประเภทตำแหน่ง/บทบาท" class="form-control" id="inputRoleName" name="RoleName" require>
                </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-Role_Tlist.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>

    </form>

</div>

<?php include('footer.php');?>