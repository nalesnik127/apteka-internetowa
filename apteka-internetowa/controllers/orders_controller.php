<?php
session_start();
  class OrdersController{
     public function addToCart(){
	 if(!isset($_SESSION['shopping_cart'])){
	 	 return call('orders', 'empty');
	 }
	    $cart = $_SESSION['shopping_cart'];
		$cart.push($id);

	 }
	 public function all(){
		 $cart = [];
	 	 $products= $_SESSION['shopping_cart'];
		 foreach($products as $product){
			$cart[] = Product::find(product);
		 }
	 }
	 public function empty(){
	 	 require_once('views/order/empty.php');
	 }

  }
?>