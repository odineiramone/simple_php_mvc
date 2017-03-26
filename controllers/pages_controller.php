<?php
  class PagesController {
    public function home() {
      $first_name = 'Jão';
      $last_name  = 'das Neve';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
