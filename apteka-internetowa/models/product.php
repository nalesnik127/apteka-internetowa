<?php
  class Product {
  	  public $id;
	  public $name;
	  public $price;
	  public $instock;
	  public $image;
	  public $desc;

	  public function __construct($id, $name, $price, $instock, $image, $desc){
	  	  $this -> id = $id;
		  $this -> name = $name;
		  $this -> price = $price;
		  $this -> instock = $instock;
		  $this -> image = $image;
		  $this -> desc = $desc;
	  }
	  public static function all(){
	  	  $list = [];
		  $db = Db::getInstance();
		  $req = $db -> query('SELECT * FROM products');

		  foreach($req->fetchAll() as $post) {
			$list[] = new Product($post['ID'], $post['Name'], $post['Price'], $post['Instock'], $post['Image'], $post['Description']);
		  }
		  return $list;
	  }
	  public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM products WHERE ID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Product($post['ID'], $post['Name'], $post['Price'], $post['Instock'], $post['Image'], $post['Description']);
    }
  }


?>