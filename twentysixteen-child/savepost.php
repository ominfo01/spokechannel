<?php
session_start();

$id = $_REQUEST["q"];

if (in_array($id, $_SESSION['savedposts'])) 
  { 
    $index = array_search($id, $_SESSION['savedposts']);
    if($index !== false){
        unset($_SESSION['savedposts'][$index]);
    }  
    $_SESSION['savedposts'] = array_values($_SESSION['savedposts']);
  echo "save"; 
  } 
else
  { 
      array_push($_SESSION['savedposts'],$id);
  echo "saved"; 
  } 
?>