<?php 
session_start();
        if(isset($_POST['Username'])){
                  include("Connect.php");
                  $Username = $_POST['Username'];
                  $Pwd = $_POST['Pwd'];

                  $sql="SELECT * FROM allmember 
                  WHERE  Username='$Username' 
                  AND  Pwd='$Pwd' ";
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["Username"] = $row["Username"];
                      $_SESSION["Pwd"] = $row["Pwd"];
                      $_SESSION["RoleName"] = $row["RoleName"];

                      if($_SESSION["RoleName"]=="ผู้ดูแลระบบ"){ 

                        Header("Location: A-index.php");
                      }
                  if ($_SESSION["RoleName"]=="คุณครู/อาจารย์"){ 

                        Header("Location: T-index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: login.php"); //user & password incorrect back to login again
 
        }
?>