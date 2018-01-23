<link rel="stylesheet" href="/apteka/css/home.css" type="text/css" />
<article>
  <section>
    <h2>Zamowienie:</h2>

    <ul>
	  <li><img src='<?php echo $product->image; ?>' alt="Image miniature" style="margin-right:21px; width:100px; height:80px">
	      <?php echo $product->name; ?>
	      cena: <?php echo $product->price; ?> zl
	  </li>
	</ul>
	<p style="text-align:center;">Laczna cena: <?php echo $product->price; ?> zl </p>
	<input type="checkbox">Dodac do zamowien stalych?<br><br><br>
	<a href='?controller=pages&action=orderStart'>Potwierdzam zamowienie</a>
  </section>
</article>