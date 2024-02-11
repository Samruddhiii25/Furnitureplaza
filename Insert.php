<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Page</title>
	<link rel="stylesheet" href=".\css\inventory.css">
	<style type="text/css">
		
		table { font-family: arial, sans-serif; border-collapse: collapse; width: 95%; background-color: white;} 
		td, th { border: 1px solid #dddddd; text-align: left;padding: 8px; } 
		.scrollit { overflow-y: scroll;position: relative; height:350px;}

	</style>

</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo.png">
				<ul>
					<li><a href="Home.php">HOME</a></li>
					<li><a href="Aboutus.php">ABOUT US</a></li>
					<li><a class="active" href="Insert.php">INSERT PAGE</a></li>
					<li><a href="Inventory.php">INVENTORY</a></li>

			</nav>
<br><br><br>
      <div id="container">
        <div id="left-panel">
			<center>
  			<div style="font-size: 20px;margin: 10px;color: white;">Insert Data</div><br>

  			<form method="post" action="insertprocess.php">
							Item id:<br>
							<input type="text" name="item_id">
							<br><br>
							Item Name:<br>
							<input type="text" name="item_name">
							<br><br>
							Item quantities:<br>
							<input type="text" name="item_quantities">
							<br><br>
							Item price:<br>
							<input type="text" name="item_price">
							<br><br>

				<input id="button" type="submit" name="save" value="Insert"><br><br>

  			<center><a href="logout.php"><input id="button" type="button" value="Logout"></a></center><br>
			</center>
  		</form></div>


              <div id="right-section"> <center> <br> <p> List of Furniture available </p>

 <br><br>

 <div class="scrollit">

 
<?php 
$sql = "SELECT * FROM inventorydetails";
//$result = $con->query($sql);
$result =mysqli_query($con,$sql);  

if(mysqli_num_rows($result) > 0) {
// output data of each row

echo "<table>";
	echo "<tr>";
		echo "<th>id</th>";
		echo "<th>name</th>";
		echo "<th>quantities</th>";
		echo "<th>price</th>";
	echo "</tr>";
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['quantities'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
	echo "</tr>";

}
echo "</table>";

} else {
echo "0 results";
}

$con->close();

 ?>

</div>
</center>

<br><br>


		<center>
        	<table>
			<tr><a href="Update.php"><input id="button" type="submit" value="Update"></a></tr>
			<tr><a href="Remove.php"><input id="button" type="submit" value="Remove"></a></tr>
			</table><br>
        </center></div>

        

      </div>

		</div>
</body>
</html>