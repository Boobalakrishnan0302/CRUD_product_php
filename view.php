<?php include('display.php') ?>



<html>
<head>-
	<title> View of my Data </title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div id="header">
		<h1> Table View </h1>
	</div>
	<table>

		<tr>
			<th> Product Name </th>
			<th> Product ID </th>
			<th> Price</th>
			<th> Quantity </th>
			<th colspan=3> Alter </th>
		</tr>

		<?php 

		$db = mysqli_connect('localhost', 'root', '', 'productname');
		$result="SELECT * FROM product";
		$value=$db->query($result);
		if($value->num_rows>0){
			while($row = $value->fetch_assoc()) {
				?>
				<form method="post" action="display.php">
				<tr>
					<td><?php echo $row["Name"] ;?><input type="hidden" name="one" value="<?php echo $row["Name"] ;?>" /></td>
					<td><?php echo $row["ID"] ;?><input type="hidden" name="two" value="<?php echo $row["ID"] ;?>" /></td>
					<td><?php echo $row["Price"] ;?><input type="hidden" name="three" value="<?php echo $row["Price"] ;?>" /></td>
					<td><?php echo $row["Quantity"] ;?><input type="hidden" name="four" value="<?php echo $row['Quantity']; ?>" /></td>
					<td> <button type="submit" class="btn" name="reg_user1">Edit</button></td>
					<td> <button type="submit" class="btn" name="reg_user2">Delete</button></td>
					<td> <button type="submit" class="btn" name="reg_user">View<a href="display.php"></button></td>
					
				
				</tr>
			</form>
			<?php 
		}
	}
	?>
	</table>
</body>
</html>