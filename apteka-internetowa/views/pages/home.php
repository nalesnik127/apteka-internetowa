<?php 
if(!isset($_SESSION)){
	session_start();
	$cart = [];
    $_SESSION['shopping_cart'] = $cart;
}
?>
<link rel="stylesheet" href="/apteka/css/home.css" type="text/css" />
<article>
	<section>
		<div id = "welcome_message">
			<a href='?controller=orders&action=all'><img src='images/shopping_cart.png' id = "image_button" style="float:right;" alt="Ikona koszyka"></img></a>
			<h2>Witaj, <?php echo $name . " " . $lastname; ?>!</h2>
			
			<div id = "navigation_help">
			   <input type="search" value="szukaj"></input>
			   <a href='?controller=products&action=show&id=1'>Zloz zamowienie</a>
			</div>
		</div>
		<div id="category_choice">
			<button class="category_buttons">Leki</button><br>
			<button class="category_buttons">Produkty</button>
		</div>
		<div id="product_list">
			<?php include('controllers/products_controller.php');
				$controller = new ProductsController();
				echo $controller->index();
			?>
		</div>
	<br><br><br>
	</section>
</article>
