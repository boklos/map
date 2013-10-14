<html>
	<head>
		<title>
			form processing
		</title>
	</head>
	<body>
		<?php
		
		$amount = $_POST['creditAmount'];
		$description = $_POST['creditDesc'];
		echo "{$amount} : {$description}";
		?>
	</body>
</html>
