<?php
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
?>
<h1 class="title">Coffee Order</h1>
	<div class="bg-img">
		<form action="orderproductinput2result.php" method="get">
			<div class="container">
				<h2><?=$productName?></h2>
				<label><b>Coffee</b></label>
				<label><b>Order</b></label>
				<input type="number" name="amount" value="1" required>
				<input type="text" name="productName" value="<?=$productName?>" hidden>
				<input type="text" name="productPrice" value="<?=$productPrice?>" hidden>
				
				<button type="submit" class="btn">Order</button>
			</div>
		</form>
	</div>

