<?php

require_once 'dbConnect.php';

$result_array = array();

if((isset($_POST['product_problem'])) && ($_POST['product_problem'] != ''))
{
    
    $product_problem = $_POST['product_problem'];

}
else{

	$result_array["status"] = 500;
    $result_array["message"] = "Problem of your product is required";
    json_encode($result_array);
    exit(0);

}

if((isset($_POST['price'])) && ($_POST['price'] != ''))
{

    $price = $_POST['price'];


}
else{

	$result_array["status"] = 500;
    $result_array["message"] = "Price is required";
    json_encode($result_array);
    exit(0);

}

$sql = "INSERT INTO orders(item_name, item_price) VALUES('" . $product_problem . "','" . $price . "')";
if($insert = $db->query($sql))
{

	$paymentid = $db->insert_id;

	$result_array["status"] = 200;
    $result_array["message"] = "Successfully inserted";
    $result_array["id"] = $paymentid;
    $result_array['product_problem'] = $product_problem;
    $result_array['price'] = $price;
}
else{

	$result_array["status"] = 500;
    $result_array["message"] = "Database error";

}

echo json_encode($result_array);
exit(0);

?>