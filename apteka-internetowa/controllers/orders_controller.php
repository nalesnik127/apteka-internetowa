<?php
session_start();
  class OrdersController{
     public function addToCart(){
	 
	 
	 if (!isset($_GET['id'])) {
	 	 return call('pages', 'error');
	 } elseif(!isset($_SESSION['shopping_cart'])) {
		$cart = [];
	 	 $_SESSION['shopping_cart'] = $cart;
	 } else {
		$cart = $_SESSION['shopping_cart'];
		echo '<script type="text/javascript">alert("jebac");</script>';
		
	 }
	  $cart[] = $_GET['id'];
	  if(count($cart) > 1){
		echo '<script type="text/javascript">alert("koszyk: 1");</script>';
	  }
	  
	   return call('pages', 'home');
	 }
	 public function all(){
		 $cart = [];
	 	 $products= $_SESSION['shopping_cart'];
		 if(!empty($products)){
			foreach($products as $product){
			$cart[] = Product::find(product);
			}
			if(count($cart) !== 0){
				require_once('views/cart/show.php');
			}
			
		 } else {
		 
				require_once('views/order/empty.php');
		}
		 
		 
	 }
	 public function empty(){
	 	 require_once('views/order/empty.php');
	 }

  }
?>