<html>
<head>
<title>Things to do</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.9/angular.min.js"></script>
<link rel=s"tylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
<head>
<body>
<table class="table">
<tr><td>Usuario</td><td>eMail</td></tr>
<?php
	$conn = new mysqli(getenv("MYSQL_HOST"),getenv("MYSQL_USER"),getenv("MYSQL_PASSWORD"),getenv("MYSQL_DB"));
	$SQL  = "select * from user";
	$results = $conn->query($SQL);
	while ($user = $results->fetch_assoc()){
	?>
	<tr><td><?php echo $user['username']?></td><td><?php echo $user['email']?></td></tr>
	<?php
	}

?>
</body>
</html>
