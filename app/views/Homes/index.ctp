<?php foreach($products as $product) { ?>
<div class="w3-col w3-container l3 s6">
	<div class="w3-container">
		<div class="w3-display-container">
			<img src="/cakephp/img/<?php echo $product['Product']['image']; ?>" style="width:100%">
			<div class="w3-display-middle w3-display-hover">
	            <a href="/cakephp/carts/add?id=<?php echo $product['Product']['id']; ?>"><button class="w3-button">Add to cart &nbsp;<i class="fa fa-shopping-cart"></i></button></a>
	        </div>
        </div>
        <p><?php echo $product['Product']['name'] ?><br><b>$<?php echo $product['Product']['price']; ?></b></p>
	</div>
</div>
<?php } ?>