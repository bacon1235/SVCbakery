<title>รายละเอียดสินค้า</title>
<?php 
      session_start();
      include('Connect.php');
      include('req_login.php');?>
<?php include('T-head.php');?>
<?php
$PD_No = $_GET['PD_No'];
$sql="SELECT * FROM Product_Info WHERE PD_No=$PD_No";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
/*extract($row);*/
?>

<div class="container mb-5">
<div class="row d-flex justify-content-center">
<div class="col-md-20">
    <div class="row">
        <div class="col-md-6">
            <div class="images p-3">
                <div class="text-center p-4"> <img src="fileupload/img/<?=$row['PD_Pic']; ?>" width="80%"></div>
            </div>
        </div>
                    
        <div class="col-md-6">
            <div class="product p-4">                          
            <div class="mt-4 mb-9">
                <br>
                <br>
                <br>
                <h3 class="text-uppercase"><?php echo $row['PD_Name']; ?></h3>
            </div>
                <p class="about"><?php echo $row['PD_Detail']; ?></p>

        <!--<form name ="Addcart" method="POST" action="#">
            <div class="row mb-3">
                <label for="inputQTY" class="col-sm-2 col-form-label">จำนวน : </label>
                    <div class="col-sm-3">
                        <input type="number" placeholder="" class="form-control" id="inputqty" name="QTY" require>
                    </div>
            </div> 
        </form>-->

                
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="order.php?PD_No=<?=$row['PD_No']?>" class="btn btn-danger d-grid gap-2 d-md-flex justify-content-md-end"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>เพิ่มสินค้าลงตะกร้า</a>
            </div>
               
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');?>