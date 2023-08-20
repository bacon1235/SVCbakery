<html>
<head>
<title>ลืมรหัสผ่าน</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/svc.png">
    <link href="bootstrap-5.2.0-dist/bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<head>
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Prompt?query=prompt">
            <style>
                body {

                  font-family: "Prompt", sans-serif;
                  background-color: white;
				  color:white;

                }
				.card {
                    align-items: center;
                    text-align: center;
                    display: flex;
                    justify-content: center;
                }
				.card .a {
					color:dark;

				}
                .container {
                    max-width: 650px;
                    width: 100%;
                    padding: 25px 30px;
                }
			</style>

<body>
<?php
	include('Connect.php');
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;
	 
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	 
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	$mail->CharSet = "utf-8";

    $Username = $_POST['Username'];
	$strSQL = "SELECT * FROM allmember WHERE  Username='$Username'";
	$objQuery = mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult) { ?>
	<br>	<br>
	<br>
	<br>
	<br>	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="container text-center">
			<div class="card">
				<div class="card-body text-dark">
					<h7>ขออภัย อีเมลนี้ยังไม่ได้ทำการสมัครสมาชิก <br> กรุณาคลิกปุ่มด้านล่างเพื่อทำการสมัครสมาชิก</h7> <br>
				<a href="register.php" class="btn btn-primary">สมัครสมาชิก</a>
				</div>
				</div>
		</div>
	<?php }
	else
	{
		//echo "Your password send successful.<br>Send to mail : ".$objResult["email"];
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;             //Enable verbose debug output
		$mail->isSMTP();                                     //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';    //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                       //Enable SMTP authentication
		$mail->Username   = 'bergerfish.yumm@gmail.com';    //SMTP username
		$mail->Password   = 'vhbqwvrwjwsihsuo';             //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
		$mail->Port       = 465;  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	 
		//Recipients ผู้รับ
		$mail->setFrom($Username, 'AdminCake');
		$mail->addAddress($Username, 'member');
	 
		//Content
		$mail->isHTML(true);
		/*$mail->Subject = "Your Account information username and password.";
		$mail->Subject = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
		$mail->Subject .= "From: bergerfish.yumm@gmail.com\nReply-To: bergerfish.yumm@gmail.com";
		$mail->Body = "";
		$mail->Body .= "สวัสดีคุณ : ".$objResult["email"]."<br>";
		$mail->Body .= "email : ".$objResult["email"]."<br>";
		$mail->Body .= "Password : ".$objResult["pass"]."<br>";
		$mail->Body .= "=================================<br>";
		$mail->Body .= "บาย<br>";
		$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);*/
										  //Set email format to HTML
		//$mail->Subject = "Content-type: text/html; charset=UTF-8\n";
		$mail->Subject = "ข้อมูลบัญชีของคุณ ".$objResult["Username"]." ";
		//$mail->Subject = "ข้อมูลบัญชีของคุณ ".$objResult["email"]." ";
		//$mail->Subject .= "Content-type: text/html; charset=UTF-8\n";
		//$mail->Subject .= "From: bergerfish.yumm@gmail.com\nReply-To: bergerfish.yumm@gmail.com";
		$mail->Body    = "Email : ".$objResult["Username"]."<br>";
		$mail->Body .= "Password : ".$objResult["Pwd"]."<br>";
		$mail->Body .= "ชื่อ-นามสกุล : ".$objResult["Firstname"]." ".$objResult["Surname"]."<br>";
		$mail->Body .= "ทางระบบได้ส่งข้อมูลบัญชีของท่านเรียบร้อยแล้ว กรุณาเข้าสู่ระบบใหม่อีกครั้ง";
		//$mail->AltBody = 'ทางระบบได้ส่งข้อมูลบัญชีของท่านเรียบร้อยแล้ว กรุณาเข้าสู่ระบบใหม่อีกครั้ง';
	 
		$mail->send();
		echo "<script>alert('ทางระบบได้ส่งข้อมูลบัญชีไปทางอีเมลล์ของท่านแล้ว');</script>";
		echo "<script>window.location='login.php';</script>";
		//echo 'Message has been sent';
	}
			
			/*$strSubject = "Your Account information username and password.";
			$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
			$strHeader .= "From: bergerfish.yumm@gmail.com\nReply-To: bergerfish.yumm@gmail.com";
			$strMessage = "";
			$strMessage .= "สวัสดีคุณ : ".$objResult["email"]."<br>";
			$strMessage .= "email : ".$objResult["email"]."<br>";
			$strMessage .= "Password : ".$objResult["pass"]."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "บาย<br>";
			$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);
			$mail->send();*/

	
	//mysqli_close();
?>
</body>
</head>
</body>
</html>
