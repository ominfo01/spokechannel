<?php
session_start();
if (isset($_SESSION['savedposts']))
{
    //Do stuff
}else{
    
    $temparray=array('nothing');
    $_SESSION['savedposts']=$temparray;
}
  echo $_SESSION['savedposts'];
  
?>