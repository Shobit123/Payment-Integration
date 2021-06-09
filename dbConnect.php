<?php  
require_once 'config.php';

$db = new mysqli("localhost", "auth", "root"," ");

if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  

    exit();  

}
