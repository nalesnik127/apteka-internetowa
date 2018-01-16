<?php
  class PagesController {
    public function home() {
      $name = 'Hello there!';
      $lastname  = 'splash';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>