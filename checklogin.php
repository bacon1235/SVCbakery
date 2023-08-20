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
                      $_SESSION["RoleID"] = $row["RoleID"];
                    
                  if (!empty($_POST['remember'])) {
                        setcookie('Username', $_POST['Username'], time() + (10 * 365 * 24 * 60 * 60));
                        setcookie('Pwd', $_POST['Pwd'], time() + (10 * 365 * 24 * 60 * 60));
                    } else {
                        if (isset($_COOKIE['Username'])) {
                            setcookie('Username', '');
            
                            if (isset($_COOKIE['Pwd'])) {
                                setcookie('Pwd', '');
                            }
                        }
                    }

                      if($_SESSION["RoleID"]=="3"){ 

                        Header("Location: backend/A-index.php");
                      }
                  if ($_SESSION["RoleID"]=="2"){ 

                        Header("Location: backend/T-index.php");
                      }
                  if($_SESSION["RoleID"]=="1"){ 

                        Header("Location: S-index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: login.php");
 
        }
?>