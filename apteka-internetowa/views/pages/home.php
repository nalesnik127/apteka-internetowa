<?php 
session_start();
$cart = new SplDoublyLinkedList();
$_SESSION['shopping_cart'] = $cart;
?>
<link rel="stylesheet" href="/apteka/css/home.css" type="text/css" />
<article>
	<section>
		<div id = "welcome_message">
			<button class = "category_buttons"id = "image_button" style="float:right;"></button>
			<h2>Witaj, <?php echo $name . " " . $lastname; ?>!</h2>
			
			<div id = "navigation_help">
			   <input type="search" value="szukaj"></input>
			   <a href='?controller=pages&action=orderStart'>Zloz zamowienie</a>
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
