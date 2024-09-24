<?php
$id= ______

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbwdev";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tborder WHERE id=$id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	$id=$row["id"]; 
	$cust=$row["cust"];
	$based=$row["based"];
	$type=$row["type"];
	$src1 = $row["src1"];
	$src2 = $row["src2"];
	$top=______
	$ddate=$row["delivery"];
	$remark = $row["remark"];
  }
} 

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head><title>Web Form - POST/GET</title></head>
<body>
	<form id="patient" name="patient" action="lab6.7.php" method="POST">
	
		ID
		<input type="text"  id="txtid" name="txtid" maxlength="30" readonly value="<?=$id?>"><br>

		<!-- textfield: disabled (cannot send data) or readonly (cannot send data)-->		
		<label for="cust">Customer Name</label>
		<input type="text" size="35" id="cust" name="cust" maxlength="30" 
		placeholder="eg. Handsome Boy" value="______" required><br>
			
		<!-- radio button-->	
		Based
		<input type="radio" id="p" name="based" value="pasta" 
		<?php 
			______
		?>
		>
		<label for="p">pasta</label> 
		<input type="radio" id="r" name="based" value="rice"
		<?php 
			if($based=="rice") echo "checked"; 
		?>
		>
		<label for="r">rice</label><br> 
		
		<!--drop-down list / combobox-->
		<label for="type">Type</label>
		<select name="type" id="type">
			<optgroup label="Vege">
				<option value="toufu"
					<?php 
						______ 
					?>
				>Toufu</option>
				<option value="tempeh"
					<?php 
						if($type=="tempeh") echo "selected"; 
					?> 	
				>Tempeh</option>
			</optgroup>
			<optgroup label="Non-vege">
				<option value="fish"
					<?php 
						if($type=="fish") echo "selected"; 
					?> 
				>Fish</option>
				<option value="chicken"
					<?php 
						if($type=="chicken") echo "selected"; 
					?> 				
				>Chicken</option>
				<option value="prawn"
					<?php 
						if($type=="prawn") echo "selected"; 
					?> 					
				>Prawn</option>
			</optgroup>
		</select><br>
		<fieldset>
		<legend>Source</legend>
			<input type="checkbox" id="src1" name="src1" value="teriyaki"
					<?php 
						______
					?>				
			>
			<label for="src1">teriyaki</label> 
			<input type="checkbox" id="src2" name="src2" value="gar gar"
					<?php 
						if($src2=="gar gar") echo "checked"; 
					?>  			
			>
			<label for="src2">gar gar</label><br> 
		</fieldset>
		
		<!--listbox-->
		<label for="top[]">Topping</label><br>
		<select id="top[]" name="top[]" size="3" multiple>
			<option value="cucumber"
				<?php 
					______ 
				?>  	
			>Cucumber</option>
			<option value="tomato"
				<?php 
					if($top[1]=="tomato") echo "selected"; 
				?>   						
			>Tomato</option>
			<option value="corn"
				<?php 
					if($top[2]=="corn") echo "selected"; 
				?>
			>Corn</option>
			<option value="edamame"
				<?php 
					if($top[3]=="edamame") echo "selected"; 
				?> 			
			>Edamame</option>
		</select><br> 
		
		<!--textarea-->
		<label for="descr">Remark</label><br>
		<textarea id="descr" name="descr" cols="30" rows="3">______</textarea><br>

		<!--calendar-->
		<label for="odate">Delivery Date</label><br>
		<input type="date" id="ddate" name="ddate" value="______"
		max="2025-12-31" min="<?php echo date("Y-m-d")?>"><br>
		
		<!--hidden field-->
		<input type="hidden" id="txtSecret" name="txtSecret" 
		value="=Thanks for Ordering=" readonly><br>
		
		<input type="submit" value="send" id="bsubmit" name="bsubmit">
		<input type="reset" value="clear" id="breset" name="breset">		

	</form>
	
	

</body>
</html>



