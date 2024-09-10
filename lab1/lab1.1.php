<!DOCTYPE html>
<html>
<head>
	<title>Oppa Pasta</title>
</head>
<body>
	<h3>SDS Pasta Order & Delivery</h3>
	<form action="lb1.2.php" id="order" name="order" method="post">
		Pasta:<br>
		<input type="radio" value="aglio" name="pasta" >Aglio Olio (RM 10)<br>
		<input type="radio" value="cabonara" name="pasta" >Cabonara (RM 13)<br>
		<input type="radio" value="pomodoro" name="pasta" >Pomodoro (RM 15)<br>
		<br>
		Add-on: <br>
		<select name="topup[]" size="3" multiple="multiple">
			<option value="egg">Egg (RM 1)</option>
			<option value="mushroom">Mushroom (RM 2)</option>
			<option value="chicken">Chicken (RM 3)</option>
		</select>
		<br>
		<input type="submit" name="submit" value="Submit"/>
	</form>
	<p><a href="myDoc.docx">Need user guide?</a></p>
</body>
</html>
