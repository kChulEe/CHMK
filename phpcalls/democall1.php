<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				width: 80%;
				border-collapse: collapse;
			}

			table, td, th {
				border: 1px solid black;
				padding: 5px;
				width: 500px;
			}

			th {text-align: middle;
				witdth: 500px;
			}
		</style>
	</head>	
	
	<body>
		<?php
			include '../includes/sql_connect.php';

			 $query1 = "select * from pants where pants_id = 2";
			 $result = mysqli_query($con,$query1);

			 echo "<table>
				<tr>
				<th>Image</th>
				<th>Brand</th>
				<th>Name</th>
				<th>Price</th>
				</tr>";
			  while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . '<img src="'.$row['pants_image'].'" width="100" height="100" />' . "</td>";
				  echo "<td>" . $row['pants_brand'] . "</td>";
				  echo "<td>" . $row['pants_name'] . "</td>";
				  echo "<td>" . $row['pants_price'] . "</td>";
				  echo "</tr>";
			  }
			  echo "</table>";

		
			 $query2 = "select * from shirts where shirt_id = 2";
			 $result = mysqli_query($con,$query2);

			 echo "<table>
				<tr>
				<th>Image</th>
				<th>Brand</th>
				<th>Name</th>
				<th>Price</th>
				</tr>";
			  while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . '<img src="'.$row['shirt_image'].'" width="100" height="100" />' . "</td>";
				  echo "<td>" . $row['shirt_brand'] . "</td>";
				  echo "<td>" . $row['shirt_name'] . "</td>";
				  echo "<td>" . $row['shirt_price'] . "</td>";
				  echo "</tr>";
			  }
			  echo "</table>";
		
			$query2 = "select * from shirts where shirt_id = 2";
			 $result = mysqli_query($con,$query2);

			 echo "<table>
				<tr>
				<th>Image</th>
				<th>Brand</th>
				<th>Name</th>
				<th>Price</th>
				</tr>";
			  while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . '<img src="'.$row['shirt_image'].'" width="100" height="100" />' . "</td>";
				  echo "<td>" . $row['shirt_brand'] . "</td>";
				  echo "<td>" . $row['shirt_name'] . "</td>";
				  echo "<td>" . $row['shirt_price'] . "</td>";
				  echo "</tr>";
			  }
			  echo "</table>";
		
			$query2 = "select * from shirts where shirt_id = 1";
			 $result = mysqli_query($con,$query2);

			 echo "<table>
				<tr>
				<th>Image</th>
				<th>Brand</th>
				<th>Name</th>
				<th>Price</th>
				</tr>";
			  while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . '<img src="'.$row['shirt_image'].'" width="100" height="100" />' . "</td>";
				  echo "<td>" . $row['shirt_brand'] . "</td>";
				  echo "<td>" . $row['shirt_name'] . "</td>";
				  echo "<td>" . $row['shirt_price'] . "</td>";
				  echo "</tr>";
			  }
			  echo "</table>";

		mysqli_close($con);	
		?>
	</body>
</html>