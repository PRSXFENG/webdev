<!DOCTYPE html>
<html>
<head><title>JavaScript Validation</title>
<script>
function validate(){

}
</script>
</head>
<body>
<form action="#" method="post" id="myform">
	<div>
	  Email: <input type="email" name="email" required /><br />
	  City: <input type="text" name="city" id="city" /> 
	  <br />
	  State: <input type="text" name="state" id="state" 
	  size="2" maxlength="2" /> <br />
	  ZIP: <input type="text" name="zip" size="5" 
	  maxlength="5" /> 
	  <br />
	  <input type="button" value="submit" onclick="validate()" />
	</div>
</form>
</body>
</html>