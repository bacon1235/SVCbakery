<title>คำถามที่พบบ่อย</title>

<?php 
	session_start();
    include('Connect.php');
    include('req_login.php');?>
<?php include('S-head.php'); ?>

<div class="container">
    <h2>คำถามที่พบบ่อย</h2>
</div>

<?php 

    $sql = "SELECT * FROM Quest_Info";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){

?>
    <div class="container">
        <h5><?php echo $row['QNo']; ?>. <?php echo $row['Quest']; ?></h5>
        <p><?php echo $row['Answer']; ?></p><hr>
    </div>


<?php } ?>
<?php include('footer.php'); ?>