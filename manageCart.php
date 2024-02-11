<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['Add_To_Cart']))
	{
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION['cart'],'Item_name');
			if(in_array($_POST['Item_name'],$myitems))
			{
				echo"<script>
				   alert('Item Already Added');
				   window.location.href='index1.php';
				</script>";   
			}	
			$count=count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
			
		}	
	    else
	    {
 			$_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
 			echo"<script>
				   alert('Item Added');
				   window.location.href='index1.php';
				</script>";   
	    }	
	}	

}

?>