<html>
<head>
<title>My App</title>
</head>
<body>
<?php 
     $conn = pg_connect("host=bd port=5432 user=test password=12345") or die("I cann't establish a connection");
     echo "The connection is established via the load balancer 2.";
     echo " Server version: ", pg_parameter_status($conn, "server_version");
?>
</body>
</html>

