<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	include ('./includes/header.php');
	
?>
			<div id="home">
				<div class="grid_12">
				<p><a href="home.php">Home</a> &gt; <a class="current" href="admin.php">Admin</a></p>
					<?php echo searchBar(); ?>
				</div>
			
				<div class="grid_8">
					<div id="check">
						<h1>Enter a New Item:</h1>
					<form action="">
						<fieldset>
							<p><input type="text" name="productID" size="45px" /> Product ID</p>
							<p><input type="text" name="productName" size="20px" /> Product Name</p>
							<p><input type="text" name="brandName" size="45px" /> Brand Name</p>
							<p><input type="text" name="description" size="45px" /> Description</p>
							<p><input type="text" name="feat1" size="35px" /> Feature 1</p>
							<p><input type="text" name="feat2" size="35px" /> Feature 2</p>
							<p><input type="text" name="feat3" size="30px" /> Feature 3</p>
							<p><input type="text" name="category" size="20px" /> Category</p>
							<p><input type="text" name="sku" size="25px" /> SKU</p>
							<p><input type="text" name="stock" size="25px" /> Stock</p>
							<p><input type="text" name="cost" size="10px" /> Cost</p>
							<p><input type="text" name="price" size="10px" /> Price</p>
							<p><input type="text" name="salePrice" size="10px" /> Sale Price</p>
							<p><input type="text" name="productImage" size="45px" /> Product Image</p>
						</fieldset>
					</form>
					<h1>Or check an item's stock: </h1> 
					<p><input type="text" name="productImage" size="45px" /> (enter Product ID)</p>
					</div>
					
				</div>
				
				<div class="grid_3">
					<div id="contact">
						<h2>In Store Pick-up?</h2>
						<ul>
							<li>4000 Central Florida Blvd</li>
							<li>Orlando, FL 32816</li>
							<li>1-555-EDU-CATE</li>
							<li>&nbsp;</li>
							<li><h5>Questions/Comments?</h5></li>
							<li><a class="shopnow" href="contact.php">Contact us</a> via email or give us a call between <em class="it">9am-6pm M-F</em>.</li>
						</ul>
					</div>
				</div>
				
			</div>
<?php include ('./includes/footer.php'); ?>