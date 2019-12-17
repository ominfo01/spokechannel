<?php
session_start();
if (isset($_SESSION['savedposts']))
{
    //Do stuff
}else{
    
    $temparray=array();
    $_SESSION['savedposts']=$temparray;
}
$id = $_REQUEST["q"];

if (in_array($id, $_SESSION['savedposts'])) 
  { 
    $index = array_search($id, $_SESSION['savedposts']);
    if($index !== false){
        unset($_SESSION['savedposts'][$index]);
    }  
    $_SESSION['savedposts'] = array_values($_SESSION['savedposts']);
  } 
else
  { 
      array_push($_SESSION['savedposts'],$id);
  
  } 
?>