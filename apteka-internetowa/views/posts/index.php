<ul>
	<?php foreach($posts as $post) { ?>
	<li>
	<?php echo $post->author; ?>
	<a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
	<input type="button" id="add_to_cart" ></input>
  </li>
<?php }  ?>
</ul>