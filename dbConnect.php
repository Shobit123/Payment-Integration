<?php  
require_once 'config.php';

$db = new mysqli("oxygenakaunting.cluster-cladr7eisf0t.us-east-1.rds.amazonaws.com", "VishalK", "n1UzKuIBIYAjxoq4","akaunting");

if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  

    exit();  

}