<?php
  if(!defined('__CONFIG__')) {
    exit('Du har ikke definert en konfigurasjonsfil');
  }

  //inkluder DB.php

  include_once "classes/DB.php";


  $con = DB::getConnection();

?>
