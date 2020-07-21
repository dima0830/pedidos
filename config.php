<?php 

 $base_url = "modulo-ortopedicos/";  
 $base_url = str_replace($base_url,"",$_SERVER['REQUEST_URI']); 
 $a = explode("?",$base_url); 
 $current_uri = explode("/",$a[0]); 
 if(empty($current_uri[1])){
   define('CURRENT_PAGE','home'); 
   define('CURRENT_FILE','home.php'); 
 }elseif(strtolower($current_uri[1])=="index"){
 	define('CURRENT_PAGE','home'); 
   	define('CURRENT_FILE','home.php'); 
 }else{
   define('CURRENT_PAGE',$current_uri[1]);	 
   define('CURRENT_FILE',$current_uri[1].".php");
 }






?>