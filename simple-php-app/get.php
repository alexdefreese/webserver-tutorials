<html>
	<head> <title>Simple PHP App | Get</title></head>

	<body>
		<?php $page = htmlspecialchars($_GET["page"]); ?>
		<h1>Get Response</h1>
		<p>Welcome user. You are viewing page <?php echo $page ?></p>
	</body>
</html>
