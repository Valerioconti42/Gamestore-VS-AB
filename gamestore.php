<?php
  ini_set("display_errors", 1);
  function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  $cat= test_input($_POST["categoria"]);
  $catarr= array("sport"=>array(),"fps"=>array(),"idle"=>array(),"mp"=>array(),"indie"=>array(),"adv"=>array());
?>
