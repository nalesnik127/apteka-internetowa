<?php
  class PagesController {
    public function home() {
      $name = 'B';
      $lastname  = 'Kenobi';
      require_once('views/pages/home.php');
    }
	public function orderStart() {
		include 'models/buyer.php';
		$buyer = Buyer::find(1);
		require_once('views/order/start.php');
	}
	public function follow(){
	  if(!isset($_GET['buyer'])){
	  	  require_once('views/pages/error.php');
	  }
	  $buyer = $_GET['b_name'];
	  require_once('views/order/submit.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>