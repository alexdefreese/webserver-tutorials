<html>
	<head> <title>Simple PHP App | Post</title></head>

	<body>
		<?php 
			$name = htmlspecialchars($_POST["name"]);
			$email = htmlspecialchars($_POST["email"]);
		?>
		<h1>Post Response</h1>
		<p>Hello. Your name is <?php echo $name?> and your email is <?php echo $email ?></p>
	</body>
</html>
