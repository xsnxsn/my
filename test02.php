<?php
function add_string(&$string){
  $string.="add some string.";
}
$str="this is a string.";
add_string($str);
echo $str;
 ?>
