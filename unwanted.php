<!-- <!-- <!-- <!-- <!-- <td name="one"><?php echo $row["Name"] ;?></td> --> --> --> --> -->	<td name="tow"><?php echo $row["ID"] ;?></td>
					<td name="three"><?php echo $row["Price"] ;?></td>
					<td name="four"><?php echo $row["Quantity"];?></td><td><a href="edit.php"><button class="btn" name="reg_user">Edit</button></a></td>
					<td><a href="delete.php"><button class="btn" name="reg_user2">Delete</button></a></td>


					$productName=$_POST["one"];

			mysql_query("DELETE from product WHERE Name='$productName'");

			echo "Product deleted " ?>

			<a href="view.php"> Back To Home</a>

			<?php 
}

<?php 

$db = new mysqli('localhost', 'root', '', 'productname');

if (isset($_POST['reg_user4'])) {

	$productName=$_POST["username"];
	$productID=$_POST["id"];
	$productPrice=$_POST["price"];
	$productQuantity=$_POST["quanti"];


  	$query = "INSERT INTO product (Name, ID, Price,Quamtity) 
  			  VALUES('$productName', '$productID', '$productPrice','productQuantity')";
  	mysqli_query($db, $query);

  
  echo "Item updated"; ?>

	<a href="view.php"> Back To Home</a> 
	<?php
	
	}

?>