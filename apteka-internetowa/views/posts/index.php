<ul>
	<?php foreach($posts as $post) { ?>
	<li>
	<?php echo $post->author; ?>
	<a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
	<input type="checkbox" value="<?php echo $post->content; ?>" ></input>
  </li>
<?php }  ?>
</ul>