<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index1</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row"> 
			<div class="col-lg-3">
				<form action="manageCart.php" method="POST">
				<div class="card">
                  <img src="assets/img/Item1.jpg" class="card-img-top">
                  <div class="card-body text-center">
                     <h5 class="card-title">Dining Table</h5>
                     <p class="card-text">Price: 20000</p>
                     <button type-="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                     <input type="hidden" name="Item_name" value="Dining Table">
                     <input type="hidden" name="Price" value="20000">
                  </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
				<form action="manageCart.php" method="POST">
				<div class="card">
                  <img src="assets/img/category_img_02.png" class="card-img-top">
                  <div class="card-body text-center">
                     <h5 class="card-title">Sofa</h5>
                     <p class="card-text">Price: 25000</p>
                     <button type-="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                     <input type="hidden" name="Item_name" value="Sofa">
                     <input type="hidden" name="Price" value="25000">
                  </div>
                </div>
                </form>
            </div> 
            <div class="col-lg-3">
				<form action="manageCart.php" method="POST">
				<div class="card">
                  <img src="assets/img/item9.png" class="card-img-top">
                  <div class="card-body text-center">
                     <h5 class="card-title">Shoe Rack</h5>
                     <p class="card-text">Price: 7,699</p>
                     <button type-="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                     <input type="hidden" name="Item_name" value="Shoe Rank">
                     <input type="hidden" name="Price" value="7,699">
                  </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
				<form action="manageCart.php" method="POST">
				<div class="card">
                  <img src="assets/img/item8.png" class="card-img-top">
                  <div class="card-body text-center">
                     <h5 class="card-title">Mini Stool</h5>
                     <p class="card-text">Price: 2,199</p>
                     <button type-="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                     <input type="hidden" name="Item_name" value="Mini Stool">
                     <input type="hidden" name="Price" value="2,199">
                  </div>
                </div>
                </form>
            </div>          
        </div>
    </div>    
</body>
</html>