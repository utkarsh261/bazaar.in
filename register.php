<!DOCTYPE html>
<html>
<head>
    <title>Register Now!</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
<div class="wrap">
	<h2>Sign Up Here</h2>
	<form action="insertintodb.php" method="POST">
		<input type="text" name="username" placeholder="Username" autofocus required>
		<input type="text" name="First" placeholder="First Name" required>
		<input type="text" name="last" placeholder="Last Name">
		<input type="text" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" value="Submit">
	</form>
</div>
</body>
</html>