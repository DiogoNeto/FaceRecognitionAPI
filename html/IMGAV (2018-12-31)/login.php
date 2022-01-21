<!DOCTYPE html>
<html>
<head>
<title>Photos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="login.php" method="POST" align="center">
		<?php require_once 'process.php'; ?>
		<div class="field">
			<div class="control">
				<input name="User" placeholder="User" id="User" autofocus="" value="<?php echo $User; ?>">
			</div>
		</div>
		<div class="field">
			<div class="control">
				<input name="Password" id="Password" type="Password" placeholder="Password" value="<?php echo $Password; ?>">
			</div>
		</div>
			<button type="submit" name="login">Login</button>
	</form>
</body>
</html>