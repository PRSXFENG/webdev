<!DOCTYPE html>
<html>
<head><title>Web Form - POST/GET</title></head>
<body>
	<form id="forder" name="forder" action="lab6.10.php" method="POST">
		
		<!-- textfield: disabled (cannot send data) or readonly (cannot send data)-->		
		<label for="cust">Customer Name</label>
		<input type="text" size="35" id="cust" name="cust" 
		maxlength="30" placeholder="eg. Handsome Boy" required><br>
		
		<!-- radio button-->	
		Based
		<input type="radio" id="p" name="based" value="pasta" checked>
		<label for="p">pasta</label> 
		<input type="radio" id="r" name="based" value="rice">
		<label for="r">rice</label><br> 
		
		<!--drop-down list / combobox-->
		<label for="type">Type</label>
		<select name="type" id="type">
			<optgroup label="Vege">
				<option value="toufu">Toufu</option>
				<option value="tempeh">Tempeh</option>
			</optgroup>
			<optgroup label="Non-vege">
				<option value="fish">Fish</option>
				<option value="chicken">Chicken</option>
				<option value="prawn">Prawn</option>
			</optgroup>
		</select><br>
		<fieldset>
		<legend>Source</legend>
			<input type="checkbox" id="src1" name="src1" value="teriyaki">
			<label for="src1">teriyaki</label> 
			<input type="checkbox" id="src2" name="src2" value="gar gar">
			<label for="src2">gar gar</label><br> 
		</fieldset>	
		<!--listbox-->
		<label for="top[]">Topping</label><br>
		<select id="top[]" name="top[]" size="3" multiple>
			<option value="cucumber">Cucumber</option>
			<option value="tomato">Tomato</option>
			<option value="corn">Corn</option>
			<option value="edamame">Edamame</option>
		</select><br> 
		
		<!--textarea-->
		<label for="descr">Remark</label><br>
		<textarea id="descr" name="descr" cols="30" rows="3">No problem</textarea><br>

		<!--calendar-->
		<label for="odate">Date</label><br>
		<input type="date" id="odate" name="odate" value="<?=date("Y-m-d")?>"
		max="2025-12-31" min="<?php echo date("Y-m-d")?>"><br>
		
		<!--hidden field-->
		<input type="hidden" id="txtSecret" name="txtSecret" 
		value="=Thanks for Ordering=" readonly><br>
		
		<input type="submit" value="send" id="bsubmit" name="bsubmit">
		<input type="reset" value="clear" id="breset" name="breset">		
	</form>	
</body>
</html>