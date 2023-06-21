<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "putoexpress";

// Create a new database connection
$db_handle = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

session_start();

case "add":
	if(!empty($_POST["quantity"])) {
		$productByCode = $db_handle->query("SELECT * FROM product_table WHERE id='" . $_GET["id"] . "'");
		$itemArray = array($productByCode[0]["id"]=>array('name'=>$productByCode[0]["name"],
                'id'=>$productByCode[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"],
                'image'=>$productByCode[0]["image"]));

		if(!empty($_SESSION["cart_item"])) {
			if(in_array($productByCode[0]["id"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}
	break;

switch ($_GET["action"]) {
    case "add":
        if (!empty($_POST["quantity"])) {
            // Your existing code goes here
        }
        break;

    // Handle other cases if needed

    default:
        // Default case handling
        break;
}
?>
