<?php 
require __DIR__ . '/../app/src/get-username.php';
require __DIR__ . '/../app/src/send-email.php';

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
			include('../app/views/header.php');  
			include('../app/views/sidebar.php');
			include('../app/views/contact-form.php');
			include('../app/views/footer.php');
		?>
	</body>
</html>