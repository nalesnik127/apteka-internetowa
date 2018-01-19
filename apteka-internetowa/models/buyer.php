<?php
  class Buyer{
  	  public $id;
	  public $name;
	  public $surname;
	  public $city;
	  public $street;
	  public $number;

	  public function __construct($id, $name, $surname, $city, $street, $number){
	  	  $this -> id = $id;
		  $this -> name = $name;
		  $this -> surname = $surname;
		  $this -> city = $city;
		  $this -> street = $street;
		  $this -> number = $number;
	  }
	  public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM buyers WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Buyer($post['id'], $post['name'], $post['surname'], $post['city'], $post['street'], $post['number']);
    }

  }
?>