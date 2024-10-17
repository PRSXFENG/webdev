<!DOCTYPE html>
<html>
<body>
<h2>HTML Form Validation</h2>
<form action="#">
<!--validate required field & email-->
Email:
<input type="email" id="email" name="email" required>
<br>
Password:
<input type="password" id="password" name="password" required minlength="6" maxlength="16">
<br>
<!--range & numeric value-->
Age:
<input type="number" id="age" name="age" min="1" max="200">
<br>
<input type="submit" id="submit" name="submit" value="submit">
</body>
</html>
