<ul>
	<?php foreach($products as $product) { ?>
	<li>
	<?php echo $product->name; ?>
	<p><?php echo $product->price; ?></p>
	<p><?php echo $product->desc; ?></p>
  </li>
<?php }  ?>
</ul>