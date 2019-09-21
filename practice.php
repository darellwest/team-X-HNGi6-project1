<?php 

$checker = "/^[a-z](_?[a-z0-9]+)/";
$checks = "/^[A-Za-z][A-Za-z0-9]*.[A-Za-z0-9]$/";
$str = "a3rllwest23333www";

 if(preg_match($checks, $str)){
	 
	 echo "it worked";
	 
 }else{
	 echo "it did not work";
 }



?>