<!DOCTYPE html>
 <html>
 <body>
  <div name="top" align="center">
 	<img src="images/cabecera.jpg" width="900" height="116"/>
 </div>
	<div name="middle" align="center">
		<table>
			  	<?php
				$server="us-cdbr-iron-east-03.cleardb.net";
				$user="b74ba3320e82ec";
				$pass="2d194843";
				$db="ad_bb6ddb2f34daf52";
				$conn=new mysqli($server, $user, $pass, $db);
				if($conn->connect_error){
					die("Connection Failed: ".$conn->connect_error);
				}
				
				?>
		  <tr>
		    <td><h3>For data scientists</h3></td>
		    <td><h3>For IT professionals</h3></td>
		  </tr>
		  <tr>
		    <td>
		    	<div name="middle" align="center">
			    	<table style="max-width:450px;">
				    <?php
					$result=$conn->query("select * from servicios where codigo_servicio in (001, 002, 003)");
					if($result->num_rows > 0){
					    while($row = $result->fetch_assoc() ){
					     ?> 
						    
							  <tr>
							    <td rowspan="2"><img src="<?php echo $row['imagen_servicio']?>"/></td>
							    <td><?php echo $row['nombre_servicio']?></td>
							  </tr>
							  <tr>
							    <td><?php echo $row['descripcion_servicio']?></td>
							  </tr>
					<?php
						}
					}
					else{
						echo "0 result";
					}
					
					?>
					</table>
					
		    	</div>
		
		    
		    </td>
		    <td>
				<div name="middle" align="center">
			    	<table style="max-width:450px;">
				    <?php
					$result=$conn->query("select * from servicios where codigo_servicio in (004, 005, 006)");
					if($result->num_rows > 0){
					    while($row = $result->fetch_assoc() ){
					     ?> 
						    
							  <tr>
							    <td rowspan="2"><img src="<?php echo $row['imagen_servicio']?>"/></td>
							    <td><?php echo $row['nombre_servicio']?></td>
							  </tr>
							  <tr>
							    <td><?php echo $row['descripcion_servicio']?></td>
							  </tr>
					<?php
						}
					}
					else{
						echo "0 result";
					}
					
					?>
					</table>
					
		    	</div>
		    </td>
		  </tr>
		  <?php 
		  $conn->close();
		  ?>
		</table>
	</div>
	<div name="bottom" align="center">
 	<img src="images/debajo.jpg" width="900" height="250"/>
 </div>
 </body>
 </html>
