<?php
session_start();
require_once "libs/categories.php";
require_once "libs/product.php";
require_once 'config/config.php';
require_once 'libs/user.php';
require_once 'libs/comment.php';

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["qty"]>0)
{
	foreach($_POST as $key => $value){ //add all post vars to new_product array
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
	//remove unecessary vars
	unset($new_product['type']);
    unset($new_product['return_url']);
    $product = list_one_product($new_product['id']);
    
    if(isset($_SESSION["cart_products"])){  //if session var already exist
        if(isset($_SESSION["cart_products"][$new_product['id']])) //check item exist in products array
        {
            unset($_SESSION["cart_products"][$new_product['id']]); //unset old array item
        }           
    }
    $_SESSION["cart_products"][$new_product['id']] = $new_product; //update or create product session with new item 
    
    print_r($_SESSION["cart_products"]);
}


//update or remove items 
if(isset($_POST["qty"]) || isset($_POST["remove_code"]))
{
	//update item quantity in product session
	if(isset($_POST["qty"]) && is_array($_POST["qty"])){
		foreach($_POST["qty"] as $key => $value){
			if(is_numeric($value)){
				$_SESSION["cart_products"][$key]["qty"] = $value;
			}
		}
	}
	//remove an item from product session
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
		foreach($_POST["remove_code"] as $key){
			unset($_SESSION["cart_products"][$key]);
		}	
	}
}

//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);

?>