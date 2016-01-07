<!DOCTYPE html>
<html>
	<head>
		
	</head>	
	
	<body>
		<?php
			include '../includes/sql_connect.php';
			$query1 = "select * from clothes where id_clothes = 1";
			$result = mysqli_query($con,$query1);	
		
			 while($row = mysqli_fetch_array($result)) {
				global $id1, $model1, $brand1, $name1, $price1, $image1, $link1;
				 	$id1 = $row['id_clothes'];
				 	$model1 = $row['clothes_model'];
				 	$brand1 = $row['clothes_brand'];
				 	$name1 = $row['clothes_name'];
				 	$price1 = $row['clothes_price'];
				 	$image1 = $row['clothes_img'];
				 	$link1 = $row['clothes_link'];
			 }
		?>
		
		<?php
			include '../includes/sql_connect.php';
			$query1 = "select * from clothes where id_clothes = 2";
			$result = mysqli_query($con,$query1);	
		
			 while($row = mysqli_fetch_array($result)) {
				global $id2, $model2, $brand2, $name2, $price2, $image2, $link2;
				 	$id2 = $row['id_clothes'];
				 	$model2 = $row['clothes_model'];
				 	$brand2 = $row['clothes_brand'];
				 	$name2 = $row['clothes_name'];
				 	$price2 = $row['clothes_price'];
				 	$image2 = $row['clothes_img'];
				 	$link2 = $row['clothes_link'];
			 }
		?>
		
		<?php
			include '../includes/sql_connect.php';
			$query1 = "select * from clothes where id_clothes = 5";
			$result = mysqli_query($con,$query1);	
		
			 while($row = mysqli_fetch_array($result)) {
				global $id3, $model3, $brand3, $name3, $price3, $image3, $link3;
				 	$id3 = $row['id_clothes'];
				 	$model3 = $row['clothes_model'];
				 	$brand3 = $row['clothes_brand'];
				 	$name3 = $row['clothes_name'];
				 	$price3 = $row['clothes_price'];
				 	$image3 = $row['clothes_img'];
				 	$link3 = $row['clothes_link'];
			 }
		?>
		
		<?php
			include '../includes/sql_connect.php';
			$query1 = "select * from clothes where id_clothes = 3";
			$result = mysqli_query($con,$query1);	
		
			 while($row = mysqli_fetch_array($result)) {
				global $id4, $model4, $brand4, $name4, $price4, $image4, $link4;
				 	$id4 = $row['id_clothes'];
				 	$model4 = $row['clothes_model'];
				 	$brand4 = $row['clothes_brand'];
				 	$name4 = $row['clothes_name'];
				 	$price4 = $row['clothes_price'];
				 	$image4 = $row['clothes_img'];
				 	$link4 = $row['clothes_link'];
			 }
		?>
		
		<?php
			include '../includes/sql_connect.php';
			$query1 = "select * from clothes where id_clothes = 6";
			$result = mysqli_query($con,$query1);	
		
			 while($row = mysqli_fetch_array($result)) {
				global $id5, $model5, $brand5, $name5, $price5, $image5, $link5;
				 	$id5 = $row['id_clothes'];
				 	$model5 = $row['clothes_model'];
				 	$brand5 = $row['clothes_brand'];
				 	$name5 = $row['clothes_name'];
				 	$price5 = $row['clothes_price'];
				 	$image5 = $row['clothes_img'];
				 	$link5 = $row['clothes_link'];
			 }
		?>
		
		<?php
			include '../includes/sql_connect.php';
			$query1 = "select * from clothes where id_clothes = 4";
			$result = mysqli_query($con,$query1);	
		
			 while($row = mysqli_fetch_array($result)) {
				global $id6, $model6, $brand6, $name6, $price6, $image6, $link6;
				 	$id6 = $row['id_clothes'];
				 	$model6 = $row['clothes_model'];
				 	$brand6 = $row['clothes_brand'];
				 	$name6 = $row['clothes_name'];
				 	$price6 = $row['clothes_price'];
				 	$image6 = $row['clothes_img'];
				 	$link6 = $row['clothes_link'];
			 }
		?>
		
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					
					<div class="thumbnail right-caption" id="info-display-panel">
						<div class="view third-effect">	
							<img src="<?= $image1 ?>" alt="image" style="height:150px;max-width:120px;" usemap="#<?= $id1 ?>">
							<map name="<?= $id1 ?>">
								<area shape="rect" coords="0,0,120,150" href="<?= $image1 ?>" data-lighter>	
							<div class="mask">  
								 <a href="#" class="info" title="Full Image">Full Image</a></a>
							</div> 
							</map>			
						</div>
					  <div class="caption">
						<h4><?= $model1 ?></h4>
						  <hr>
						  <table class="table table-condensed">
							<tbody>
							  <tr>
								<td>이름</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $name1 ?></td>
							  </tr>
							  <tr>
								<td>브랜드</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $brand1 ?></td>
							  </tr>
							  <tr>
								<td>가격</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $price1 ?></td>
							  </tr>
							  <tr>
								<td>링크</td>
								<td>&nbsp;&nbsp;&nbsp;<a href="<?= $link1 ?>"><?= $link1 ?> </a></td>
							  </tr>
							</tbody>
						  </table>
					  </div>
					</div>

					
				
					<div class="thumbnail right-caption" id="info-display-panel">
						<div class="view third-effect">	
							<img src="<?= $image2 ?>" alt="image" style="height:150px;max-width:120px;" usemap="#<?= $id2 ?>">
							<map name="<?= $id2 ?>">
								<area shape="rect" coords="0,0,120,150" href="<?= $image2 ?>" data-lighter>	
							<div class="mask">  
								 <a href="#" class="info" title="Full Image">Full Image</a></a>
							</div> 
							</map>			
						</div>
					  <div class="caption">
						<h4><?= $model2 ?></h4>
						  <hr>
						  <table class="table table-condensed">
							<tbody>
							  <tr>
								<td>이름</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $name2 ?></td>
							  </tr>
							  <tr>
								<td>브랜드</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $brand2 ?></td>
							  </tr>
							  <tr>
								<td>가격</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $price2 ?></td>
							  </tr>
							  <tr>
								<td>링크</td>
								<td>&nbsp;&nbsp;&nbsp;<a href="<?= $link2 ?>"><?= $link2 ?> </a></td>
							  </tr>
							</tbody>
						  </table>
					  </div>
					</div>
		
		
					<div class="thumbnail right-caption" id="info-display-panel">
						<div class="view third-effect">	
							<img src="<?= $image3 ?>" alt="image" style="height:150px;max-width:120px;" usemap="#<?= $id3 ?>">
							<map name="<?= $id3 ?>">
								<area shape="rect" coords="0,0,120,150" href="<?= $image3 ?>" data-lighter>	
							<div class="mask">  
								 <a href="#" class="info" title="Full Image">Full Image</a></a>
							</div> 
							</map>			
						</div>
					  <div class="caption">
						<h4><?= $model3 ?></h4>
						  <hr>
						  <table class="table table-condensed">
							<tbody>
							  <tr>
								<td>이름</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $name3 ?></td>
							  </tr>
							  <tr>
								<td>브랜드</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $brand3 ?></td>
							  </tr>
							  <tr>
								<td>가격</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $price3 ?></td>
							  </tr>
							  <tr>
								<td>링크</td>
								<td>&nbsp;&nbsp;&nbsp;<a href="<?= $link3 ?>"><?= $link3 ?> </a></td>
							  </tr>
							</tbody>
						  </table>
					  </div>
					</div>
	
	
					<div class="thumbnail right-caption" id="info-display-panel">
						<div class="view third-effect">	
							<img src="<?= $image4 ?>" alt="image" style="height:150px;max-width:120px;" usemap="#<?= $id4 ?>">
							<map name="<?= $id4 ?>">
								<area shape="rect" coords="0,0,120,150" href="<?= $image4 ?>" data-lighter>	
							<div class="mask">  
								 <a href="#" class="info" title="Full Image">Full Image</a></a>
							</div> 
							</map>			
						</div>
					  <div class="caption">
						<h4><?= $model4 ?></h4>
						  <hr>
						  <table class="table table-condensed">
							<tbody>
							  <tr>
								<td>이름</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $name4 ?></td>
							  </tr>
							  <tr>
								<td>브랜드</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $brand4 ?></td>
							  </tr>
							  <tr>
								<td>가격</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $price4 ?></td>
							  </tr>
							  <tr>
								<td>링크</td>
								<td>&nbsp;&nbsp;&nbsp;<a href="<?= $link4 ?>"><?= $link4 ?> </a></td>
							  </tr>
							</tbody>
						  </table>
					  </div>
					</div>

					<div class="thumbnail right-caption" id="info-display-panel">
						<div class="view third-effect">	
							<img src="<?= $image5 ?>" alt="image" style="height:150px;max-width:120px;" usemap="#<?= $id5 ?>">
							<map name="<?= $id5 ?>">
								<area shape="rect" coords="0,0,120,150" href="<?= $image5 ?>" data-lighter>	
							<div class="mask">  
								 <a href="#" class="info" title="Full Image">Full Image</a></a>
							</div> 
							</map>			
						</div>
					  <div class="caption">
						<h4><?= $model5 ?></h4>
						  <hr>
						  <table class="table table-condensed">
							<tbody>
							  <tr>
								<td>이름</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $name5 ?></td>
							  </tr>
							  <tr>
								<td>브랜드</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $brand5 ?></td>
							  </tr>
							  <tr>
								<td>가격</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $price5 ?></td>
							  </tr>
							  <tr>
								<td>링크</td>
								<td>&nbsp;&nbsp;&nbsp;<a href="<?= $link5 ?>"><?= $link5 ?> </a></td>
							  </tr>
							</tbody>
						  </table>
					  </div>
					</div>
				
				<div class="thumbnail right-caption" id="info-display-panel">
						<div class="view third-effect">	
							<img src="<?= $image6 ?>" alt="image" style="height:150px;max-width:120px;" usemap="#<?= $id6 ?>">
							<map name="<?= $id6 ?>">
								<area shape="rect" coords="0,0,120,150" href="<?= $image6 ?>" data-lighter>	
							<div class="mask">  
								 <a href="#" class="info" title="Full Image">Full Image</a></a>
							</div> 
							</map>			
						</div>
					  <div class="caption">
						<h4><?= $model6 ?></h4>
						  <hr>
						  <table class="table table-condensed">
							<tbody>
							  <tr>
								<td>이름</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $name6 ?></td>
							  </tr>
							  <tr>
								<td>브랜드</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $brand6 ?></td>
							  </tr>
							  <tr>
								<td>가격</td>
								<td>&nbsp;&nbsp;&nbsp;<?= $price6 ?></td>
							  </tr>
							  <tr>
								<td>링크</td>
								<td>&nbsp;&nbsp;&nbsp;<a href="<?= $link6 ?>"><?= $link6 ?> </a></td>
							  </tr>
							</tbody>
						  </table>
					  </div>
					</div>
					
					
					  </div>
					</div>
		
			<?php mysqli_close($con);
		?>
	</body>
</html>