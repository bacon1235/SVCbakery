<title>รายการประเภทการชำระเงิน</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>รายการประเภทการชำระเงิน</h2>
    <a type="button" class="btn btn-dark" href="A-Payment_Tadd.php">เพิ่มประเภทการชำระเงิน</a>

    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ประเภทการชำระเงิน</th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM payment_t";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

      <tbody>
            <td><?php echo $row['PaymentID']; ?></td>
            <td><?php echo $row['PaymentName']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Payment_Tedit.php?PaymentID=<?=$row['PaymentID']?>">แก้ไข</a></td>
      </tbody>

<?php } ?>

<?php include('footer.php');?>
    </table>
</div>

