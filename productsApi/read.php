<?php

include "database.php";
include "products.php";


$database = new DataBaseConnection();
$db = $database->getConnection();

$product = new Product($db);

$method=$_SERVER['REQUEST_METHOD'];
if($method=='GET')
{
	if(isset($_GET['id']))
	$product->readProduct($_GET['id']);
else
	$product->readAllProducts();
}
elseif ($method=='POST') {
	if(isset($_POST['id']))
	$product->readProduct($_POST['id']);
else
	$product->readAllProducts();
}
