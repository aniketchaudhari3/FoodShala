<?php 
include_once('components/product_card.php')
?>
<div class="container"> 
	<div class="row">
	<?php
	for($i = 0; $i < 8; $i++){
		$products = new ProductCard($i,'Product '.($i+1),'http://lorempixel.com/360/360/',(rand(0,1) > 0 ? 'non veg':'veg'),$i+rand(10,100));
		
	} 
	?>
	</div>
</div>