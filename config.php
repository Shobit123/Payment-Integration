<?php 
// Product Details 
$itemName = "Demo Product";  
$itemNumber = "S123";  
$itemPrice = 10;  
$currency = "USD";  
 
// Authorize.Net API configuration  
define('ANET_API_LOGIN_ID', 'xxxxxx');  
define('ANET_TRANSACTION_KEY', 'xxxxxxxxx');  
$ANET_ENV = 'SANDBOX'; // or PRODUCTION 
  
// Database configuration  
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'authorize'); 
