<!DOCTYPE html>
<html>
<head><title>JavaScript Validation</title>
<script>
function validate(){
	var city = document.getElementById('city').value;
	var state = document.getElementById('state').value;
	var length = state.length;
	var flag = false;
	if(city == ""){
		alert("fill in city");
		document.getElementById('city').focus();
		flag = true;
	}
	if(state == ""){
		alert("fill in state");
		document.getElementById('state').focus();
		flag = true;
	}else if(length != 2){
		alert("state code must be in 2 characters");
		document.getElementById('state').focus();
		flag = true;
	}
	if (!flag){
		document.getElementById('myform').submit();
	}
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