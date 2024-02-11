<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Page</title>
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
					<li><a class="active" href="update.php">UPDATE PAGE</a></li>
					<li><a href="Inventory.php">INVENTORY</a></li>
			</nav>
<br><br><br>
      <div id="container">
        <div id="left-panel">
			<center>
  			<div style="font-size: 20px;margin: 10px;color: white;"> Update Data</div><br>

  	<form method="post" action="updateprocess.php">
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

		<input id="button" type="button" name ="saveu" value="Update"><br><br>
	</form>
			<center><a href="logout.php"><input id="button" type="submit" value="Logout"></a></center><br>
		
		</center></div>


        <div id="right-section"> <center> <br><p> List of Furniture available </p>

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
		echo "<th>update</th>";
	echo "</tr>";
	$i=0;
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['quantities'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
		?>
		<td><a href="updateprocess.php?id=<?php echo $row["id"]; ?>">Update</a></td>
		<?php
	echo "</tr>";
	$i++;

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
        	<tr><a href="Insert.php"><input id="button" type="submit" value="Insert"></a></tr>
			<tr><a href="Remove.php"><input id="button" type="submit" value="Remove"></a></tr>
			</table><br>
        </center>
	
		</div>      
    </div>
</div>
</body>
</html>