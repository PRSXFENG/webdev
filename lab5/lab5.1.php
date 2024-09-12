<!--
<form> 
-> action : specify URL that to process the form data
-> method : way of sending data (GET/POST)

<input> 
-> type: type of control; 
-> name: form the name of parameter 
-> value: specify intial text, stated the data that to be sent

type="text" 
-> text field
-> disabled, maxlength, readonly, size, placeholder

type="hidden" 
-> invisible textfield 
-> must have value attribute

type="radio" 
-> radio button 
-> name attribute used to indicate the button group
-> must have value attribute
-> checked attribute to pre-select
	
type="checkbox"
-> checkbox
-> name attribute doesn't need to be the same like radio button	
-> value attribute is important
-> checked attribute to pre-select

<select>
-> default is combobox
-> multiple attribute become listbox
-> disabled 			
-> multiple attribute to create listbox
-> size attribute number of items to be displayed
-> value attribute is important
-> selected attribute to pre-select

<optgroup> 
-> label attribute is used to categorize our ddl items

<textarea> 
-> cols & rows to indicate the dimension
-> readonly
-> initial value put within the tag

<legend> & <fieldset> is to group form controls together
-->

<!DOCTYPE html>
<html>
<head><title>Web Form - POST/GET</title></head>
<body>
	<form id="forder" name="forder" action="lab5.2.php" method="POST">
		
		<!-- textfield: disabled (cannot send data) or readonly (cannot send data)-->		
		<label for="cust">Customer Name</label>
		<input type="text" size="35" id="cust" name="cust" 
		maxlength="30" placeholder="eg. Handsome Boy" required><br>
		
		<!-- radio button-->	
		Base
		______
		<label for="p">pasta</label> 
		<input type="radio" id="r" ______ value="rice">
		<label for="r">rice</label><br> 
		
		<!--drop-down list / combobox-->
		<label for="type">Type</label>
		<select name="type" id="type">
			______
				<option value="toufu">Toufu</option>
				<option value="tempeh">Tempeh</option>
			</optgroup>
			<optgroup label="Non-vege">
				<option value="fish">Fish</option>
				<option value="chicken">Chicken</option>
				<option value="prawn">Prawn</option>
			</optgroup>
		</select><br>
		______
		______
			______
			<label for="src1">teriyaki</label> 
			<input type="checkbox" id="src2" name="src2" value="gar gar">
			<label for="src2">gar gar</label><br> 
		</fieldset>	
		<!--listbox-->
		<label for="top[]">Topping</label><br>
		<select id="top[]" ______ size="3" ______>
			<option value="cucumber">Cucumber</option>
			<option value="tomato">Tomato</option>
			<option value="corn">Corn</option>
			<option value="edamame">Edamame</option>
		</select><br> 
		
		<!--textarea-->
		<label for="descr">Remark</label><br>
		______ No problem</textarea><br>

		<!--calendar-->
		<label for="odate">Date</label><br>
		______<br>
		
		<!--hidden field-->
		<input ______ id="txtSecret" name="txtSecret" 
		value="=Thanks for Ordering=" ______><br>
		
		<input type="submit" value="send" id="bsubmit" name="bsubmit">
		<input type="reset" value="clear" id="breset" name="breset">		
	</form>	
</body>
</html>