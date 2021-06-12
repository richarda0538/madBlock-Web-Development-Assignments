<!DOCTYPE html>
<html>
	<head>
		<title>Subscription Form Table</title>
	</head>
	<body>
		<table border="1">
			<tr>
				
				<th>Email ID</th>
				
				
			</tr>
		<?php
			
			// Server Credentials
			$server="localhost:3306";
			$username="root";
			$password="";
			$dbname="web-dev";

			// Connecting with Server
			$conn=mysqli_connect($server,$username,$password,$dbname);	
			if(!$conn) {
				echo 'Connection Failure';
			}

			// Prepare an SQL Injection
			$sql="SELECT * FROM subscription_form";

			// query this injection
			$data=mysqli_query($conn,$sql);
			if(mysqli_num_rows($data)>0) {
				while($row=mysqli_fetch_assoc($data)) {
		?>
					<tr>
						
						<td><?php echo $row['email_id'];?></td>
						
					</tr>
		<?php			
				}
			}
		?>
	</table>
	</body>
</html>