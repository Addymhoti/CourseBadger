<?php 
	require __DIR__ . '/../app/src/get-username.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $json_data['user']['username']; ?>'s badges</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../app/css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
			require __DIR__ . '/../app/src/get-badges-json.php';
			include('../app/views/header.php');  
			include('../app/views/sidebar.php');
			include('../app/views/main-badger.php');
			include('../app/views/footer.php');
		?>
	</body>
</html>