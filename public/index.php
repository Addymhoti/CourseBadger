<?php 
	require __DIR__ . '/../app/src/get-username.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $json_data['user']['username']; ?>'s badges</title>
		<link rel="stylesheet" href="../app/css/main.css">
	</head>
	<body>
		

		<?php 
			/*import the header elements of the site*/
			include('../app/views/header.php');
			/*import the sidebar elements of the site*/
			include('../app/views/sidebar.php');
			/*import the main section of the site */
			include('../app/views/content.php');
			/*import the footer of the site */
			include('../app/views/footer.php');
		?>
	</body>
</html>