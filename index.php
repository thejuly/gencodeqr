<?php 
//header( 'Location: /index.html' ) ;  

$url = $_GET['url'];
//echo $url;  //for test local

//header( 'Location: /qrCodeGen/gencode.php' ) ; //for test local
header( 'Location: /gencode.php' ) ; // for used in heroku web

?>