<?php
    session_start();
    //$_SESSION['sum_Price'] = "sum_Price";
    //$_SESSION['intLine'] = "intLine";
    //$_SESSION['strProductID'] = "strProductID";
    //$_SESSION['strQty'] = "strQty";
    include('Connect.php');

//ภาพสลิป 

isset( $_POST['Username'] ) ? $Username = $_POST['Username'] : $Username = "";
isset( $_POST['PaymentID'] ) ? $PaymentID = $_POST['PaymentID'] : $PaymentID = "";
isset( $_POST['order_date'] ) ? $order_date = $_POST['order_date'] : $order_date = "";
isset( $_FILES['payment_slip'] ) ? $payment_slip = $_FILES['payment_slip'] : $payment_slip = "";

    $sql="INSERT INTO order_cart (Username, price_total, PaymentID,  StatusNO,  order_date ) VALUES ('$Username' ,'" . $_SESSION["sum_Price"] . "' , '$PaymentID' ,'4' , '$order_date') ";
    mysqli_query($conn,$sql);
    
    $Order_NO = mysqli_insert_id($conn);
    for($i=0; $i <=(int)$_SESSION["intLine"]; $i++) {
        if(($_SESSION["strProductID"][$i]) != ""){
            //ดึงข้อมูลสินค้า
            $sql1="SELECT * FROM Product_Info WHERE PD_No= '" . $_SESSION["strProductID"][$i] . "' ";
            $result1=mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_array($result1);
            $price=$row1['PD_Price'];
            $total=$_SESSION["strQty"][$i] * $price;

            $sql2="INSERT INTO order_cart_detail (Order_NO, PD_NO, PD_Price, QTY, price_total, payment_slip) VALUES ('$Order_NO', '" . $_SESSION["strProductID"][$i] . "' , '$price' ,'" . $_SESSION["strQty"][$i] . "' ,'" . $_SESSION["sum_Price"] . "', '') ";
        }else{

            $tmp = $_FILES['payment_slip']['tmp_name'];
            $name = $_FILES['payment_slip']['name'];
            copy($tmp,$name);
            $locate_img ="backend/fileupload/slip/";
            move_uploaded_file($tmp,$locate_img.$name);

            $sql4="SELECT * FROM Product_Info WHERE PD_No= '" . $_SESSION["strProductID"][$i] . "' ";
            $result4=mysqli_query($conn,$sql4);
            $row4=mysqli_fetch_array($result4);
            $price=$row4['rs_discount'];
            $total=$_SESSION["strQty"][$i] * $price;

            $sql3="INSERT INTO order_cart_detail (Order_NO, PD_NO, PD_Price, QTY, price_total, payment_slip) VALUES ('$Order_NO', '" . $_SESSION["strProductID"][$i] . "' , '$price' ,'" . $_SESSION["strQty"][$i] . "' ,'" . $_SESSION["sum_Price"] . "', '$name') ";
        }
        
        if(mysqli_query($conn,$sql2)){
            //ตัดสต็อกสินค้า
            $sql3="UPDATE Product_Info SET PD_amount=PD_amount-'" . $_SESSION["strQty"][$i] . "' WHERE PD_No= '" . $_SESSION["strProductID"][$i] . "' ";
            mysqli_query($conn,$sql3);
            echo "<script>alert('บันทึกคำสั่งซื้อเรียบร้อย');</script>";
            echo "<script>window.location='T-history.php';</script>";

        }
        }
    

mysqli_close($conn);
unset($_SESSION["intLine"]);
unset($_SESSION["strProductID"]);
unset($_SESSION["strQty"]);
unset($_SESSION["sum_Price"]);
//session_destroy();
?>