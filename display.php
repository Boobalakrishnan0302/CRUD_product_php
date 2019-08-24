<?php


if (isset($_POST['reg_user'])) {

	$productName=$_POST["one"];
	$productID=$_POST["two"];
	$productPrice=$_POST["three"];
	$productQuantity=$_POST["four"];


?>
<h1> The View Page </h1>

<p> The Items Selected to View </p>

<ul style="list-style-type:square;">
  <li><?php echo "The Product".$productName ?></li>
  <li><?php echo "The Product".$productID ?></li>
  <li><?php echo "The Product".$productPrice ?></li>
  <li><?php echo "The Product".$productQuantity ?></li>
</ul>

<a href="view.php"> Back To Home</a>

<?php 
}
?>


<?php


$db = new mysqli('localhost', 'root', '', 'productname');



if (isset($_POST['reg_user2'])) {
	
	$productNam=$_POST["one"];
	

	$my="DELETE FROM product WHERE Name='$productNam'";
	mysqli_query($db,$my) or die(mysqli_error($db));
	echo "the item deleted" ?>

	<a href="view.php"> Back To Home</a> 
	<?php
	
	}

?>


<?php   

$db = new mysqli('localhost', 'root', '', 'registration');

	
	if (isset($_POST['reg_user1'])) {

	$productName1=$_POST["one"];
	$productID1=$_POST["two"];
	$productPrice1=$_POST["three"];
	$productQuantity1=$_POST["four"];

	?>

	<form method="post" action="display.php">
	<div class="input-group"> 
		<label> ProductName: </label>
		<input type="text" name="username" value="<?php echo $productName1; ?>" readonly >
	</div>
	<div class="input-group">
		<label> ProductID</label>
		<input type="text" name="id" value="<?php echo $productID1; ?>">
	</div>
		<div class="input-group">
  	  <label>Price</label>
  	  <input type="text" name="price" value="<?php echo $productPrice1; ?>" >
  	</div>
  	<div class="input-group">
  	  <label>Quantity</label>
  	  <input type="text" name="quanti" value="<?php echo $productPrice1; ?>" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="reg_user4">Update</button>
  	</div>
  </form>
  <?php 

}
?>



<?php 



if (isset($_POST['reg_user4'])) {
	$db = new mysqli('localhost', 'root', '', 'productname');

	$productName=$_POST["username"];
	$productID=$_POST["id"];
	$productPrice=$_POST["price"];
	$productQuantity=$_POST["quanti"];

	echo $productName;


  	$query = "UPDATE product SET Price='$productPrice',Quantity='$productQuantity'";

  	mysqli_query($db, $query);

  	echo $query;


  
  echo "Item updated"; 
  ?>

	<a href="view.php"> Back To Home</a> 
	<?php
	
	}

?>

