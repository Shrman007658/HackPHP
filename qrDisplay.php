<?php 
  session_start();
  // Include the qrlib file 
  include 'phpqrcode/phpqrcode/qrlib.php';
  // $text variable has data for QR   
  //echo "$textqR";
  $text="Hello there!";
  //echo $_SESSION['OrderList'];
  // QR Code generation using png() 
  // When this function has only the 
  // text parameter it directly 
  // outputs QR in the browser 
  QRcode::png($_SESSION['OrderList']); 
?> 
