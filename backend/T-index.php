<title>หน้าแรก</title>
<?php 
      session_start();
      include('Connect.php');
      include('req_login.php');?>
<?php include('T-head.php');?>

<br>

<div class="container text-center">
    <h2>- รายการสินค้า -</h2>

<div class="container">
    <div class="row">

        <?php 

            $sql = "SELECT * FROM Product_Info";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                $discount=$row['discount'];
                $rs_discount=$row['PD_Price']*(100-5)/100;
                $PD_amount1=$row['PD_amount'];

        ?>

    <div class="imgBox col-sm-6 col-md-4" style="width: 23rem;">
            <img src="fileupload/img/<?=$row['PD_Pic']; ?>" width="260px" height="200px" class="img-thumbnail">  <br>
            <h1>         </h1>
            <h5><?php echo $row['PD_Name']; ?></h5>
            <h6>
                <?php if($discount < 1){ echo "<h6>ราคากล่องละ $row[PD_Price].-</h6>";
                        }elseif($discount > 1){
                            echo "<h6>ราคากล่องละ <del>$row[PD_Price] </del> .-</h6>";
                            echo "<b style='color:red'> เหลือ $rs_discount .-</b>";
                        }
                ?>
            </h6>
            <p>จำนวน <?php echo $row['PD_amount']; ?> กล่อง</p>
    
            <?php 
        if($PD_amount1 <= 0) { ?>
            
            <a href="#" class="btn btn-danger">สินค้าหมด</a>
    <?php }else{ ?>

        <a href="T-detail_PD.php?PD_No=<?php echo $row['PD_No'];?>" class="btn btn-warning">ดูรายละเอียด</a>
            <a href="order.php?PD_No=<?=$row['PD_No']?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>เพิ่มสินค้าลงตะกร้า</a>
            <h1>         </h1>

    <?php } ?>
    </div>

<?php } ?>
</div>
    </div>
</div>
    
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>