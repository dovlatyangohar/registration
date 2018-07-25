
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='reg_style.css' rel='stylesheet' type='text/css' >
</head>
<body>

<form action="reg.php" method="POST">
<div class="container">
<h1>Register</h1>
<p>Please fill in this form to create an account.</p>
<hr>

<label ><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>

<p><?echo $emailError?></p>
<label ><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>

<p><? echo $passError?></p>
<label ><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
<hr>

<button type="submit" class="registerbtn">Register</button>
</div>

</form>

</body>
</html>
