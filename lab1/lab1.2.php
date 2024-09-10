<!DOCTYPE html>
<html>
<head>
	<title>Oppa Pasta</title>
</head>
<body>
	<h2>Order Confirmation</h2>
	<?php
	
		if(isset($_POST['submit']))
		{
						
			// Check if 'pasta' is set and not empty
			if(!empty($_POST['pasta']))
			{
				echo "<h4>Pasta:</h4>";
				$pasta = $_POST['pasta'];	
				echo "<p>$pasta</p>";				
			}

			// Check if 'topup' is set and not empty
			if(!empty($_POST['topup']))
			{
				echo "<h4>Add-on:</h4>";
				$topup = $_POST['topup']; // Ensure 'topup' is properly initialized
				foreach($topup as $t)
					echo "<p>$t</p>";				
			}
		}
	

	?>
</body>
</html>
