<title>เพิ่มสมาชิก</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php'); ?>

<div class="container">
    <h2>เพิ่มสมาชิก</h2>

    <form class="row g-3" name ="Addmember" method="POST" action="A-allmember-insert.php">

    <div class="col-md-6">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control"name="Username" placeholder="อีเมล" required>
        </div>

        <div class="col-md-6">
            <label for="exampleInputPwd">รหัสผ่าน</label>
            <input type="password" class="form-control"name="Pwd" placeholder="รหัสผ่าน" required>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="Firstname" placeholder="ชื่อ" required>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" name="Surname" placeholder="นามสกุล" required>
        </div>

        <div class="col-md-6">
            <label for="inputRoleName" class="form-label">ตำแหน่ง</label>
            <select class="form-select" name="RoleName" id="RoleName" aria-label="Default select example">
                        <?php
                            $sql1="SELECT * FROM Role_T ";
                            $qr1=mysqli_query($conn,$sql1);
                            while($rs=mysqli_fetch_array($qr1)){
                        ?>
                <option value="<?=$rs['RoleID']?>"><?=$rs['RoleName']?></option>
                        <?php } ?>    
            </select>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="A-allmember-list.php">ยกเลิก</a>
            <button class="btn btn-primary" type="submit" value="submit">บันทึกข้อมูล</button>
        </div>
        </div>
    </form>

</div>

<?php include('footer.php');?>