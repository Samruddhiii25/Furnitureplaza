<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $item_id = $_POST['item_id'];
	 $item_name = $_POST['item_name'];
	 $item_quantities = $_POST['item_quantities'];
	 $item_price = $_POST['item_price'];
	 $sql = "INSERT INTO inventorydetails VALUES ('$item_id','$item_name','$item_quantities','$item_price')";
	 if (mysqli_query($con, $sql)) 
	 {
		header("Location: inventory.php");
		exit;
	 } 
	 else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>