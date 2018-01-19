<ul>
<?php foreach($products as $product) { ?>
	<li>
		<img src='<?php echo $product->image; ?>' alt="Image miniature" style="margin-right:21px;">    
		<a href='?controller=products&action=show&id=<?php echo $product->id; ?>' style="margin-right:34px;margin-left:55px;"><?php echo $product->name;?></a>
		<?php echo $product->price; ?>
		<input type="button" id="add_to_cart" ></input>
	</li>
<?php }  ?>
</ul>