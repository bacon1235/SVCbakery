<?php
ob_start();
session_start();
include('Connect.php');

if(!isset($_SESSION["intLine"]))    //เช็คว่าแถวเป็นค่าว่างมั๊ย ถ้าว่างให้ทำงานใน {}
{
	 $_SESSION["intLine"] = 0;
	 $_SESSION["strProductID"][0] = $_GET["PD_No"];   //รหัสสินค้า
	 $_SESSION["strQty"][0] = 1;                   //จำนวนสินค้า
	 header("location:T-cart.php");
}
else
{
	
	$key = array_search($_GET["PD_No"], $_SESSION["strProductID"]);
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] - 1;
	}
	else
	{
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strProductID"][$intNewLine] = $_GET["PD_No"];
		 $_SESSION["strQty"][$intNewLine] = 1;
	}
	 header("location:T-cart.php");
}
?>