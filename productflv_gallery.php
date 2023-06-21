<?php
 session_start();
 $connect = mysqli_connect("localhost", "root", "", "putoexpress");
 if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["name"],
                     'item_price'          =>     $_POST["price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="productflv_gallery.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["name"],
                'item_price'          =>     $_POST["price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="productflv_gallery.php"</script>';
                }
           }
      }
 }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu | Puto Flavors</title>
      <script src="fjavas.js"></script>
      <link rel="stylesheet" href="fmenu_putoflv(2).css">
  </head>
  <body>
    <div class="header">
    	 	<img src="putologo.png" width="250px" height="250px">
         		<h3>Delivering NutriPuto in a fast way!</h3>
    </div>
    <div class="nav_bar">
        <a href="findex.php" class="nav_links">Home</a>
              <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Menu
    <div class="triangle-down"></div></button>
              <div id="MenuDropdown" class="dropdown-content">
                <a href="productflv_gallery.php">Puto Flavors</a>
                <a href="#">Beverages</a>
              </div>
          </div>
        <a href="contact_us.php" class="nav_links">Contact Us</a>
        <a href="fabout.php" class="nav_links">About Us</a>
        <a href="fregister.php" id="reg" class="nav_links">Register</a>
      </div>
    <div class="body">
      <?php
              $query = "SELECT * FROM product_table ORDER BY id ASC";
              $result = mysqli_query($connect, $query);
              if(mysqli_num_rows($result) > 0)
              {
                   while($row = mysqli_fetch_array($result))
                   {
              ?>
              <div class="product-item">
                     <form method="post" action="productflv_gallery.php?action=add&id=<?php echo $row["id"]; ?>">
                          <div class="product-image">
                               <img src="<?php echo $row["image"]; ?>" class="product-image" /><br />
                          </div>
                          <div class="ptf">
                               <h3><?php echo $row["name"]; ?></h3>
                               <p class="product-description"><?php echo $row["description"]?></p>
                               <div ><?php echo "₱" . $row["price"]; ?></div>
                               <span>Quantity</span>
                               <input type="number" id="quantity" name="quantity" value="0" />
                               <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                               <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btnAddAction" value="Add to Cart" />
                          </div>
                     </form>
                </div>
        <?php
              }
          }
        ?>
        <div style="clear:both"></div>
                <br />
                <h3 style="text-align:center;">Order Details</h3>
                <div class="table">
                     <table style="	width:50%; margin:auto; border:1px solid grey; background:#ff9d5c;">
                          <tr>
                               <th width="40%" style="border:2px solid grey;">Item Name</th>
                               <th width="10%" style="border:2px solid grey;">Quantity</th>
                               <th width="20%" style="border:2px solid grey;">Price</th>
                               <th width="15%" style="border:2px solid grey;">Total</th>
                               <th width="5%" style="border:2px solid grey;">Action</th>
                          </tr>
                          <?php
                          if(!empty($_SESSION["shopping_cart"]))
                          {
                               $total = 0;
                               foreach($_SESSION["shopping_cart"] as $keys => $values)
                               {
                          ?>
                          <tr>
                               <td style="border:2px solid grey;"><?php echo $values["item_name"]; ?></td>
                               <td style="border:2px solid grey;"><?php echo $values["item_quantity"]; ?></td>
                               <td style="border:2px solid grey;"><?php echo "₱" . $values["item_price"]; ?></td>
                               <td style="border:2px solid grey;"><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                               <td style="border:2px solid grey;"><a href="productflv_gallery.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span style="padding;10px; border-radius:5px; background:red; font-weight:bold; color:#f5f5f5;">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right" style="border:2px solid grey;">Total</td>
                               <td align="right" style="border:2px solid grey;"> <?php echo "₱" . number_format($total, 2); ?></td>
                               <td></td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
           </div>
    </div>

    <div class="footer">
    	<p>©2023 PutoExpress. All rights reserved.</p>
    </div>

  </body>
</html>
