<!DOCTYPE html>
<html>
<head>
	<title>Dummy Data</title>
</head>
<body>
	<?php

	// Connect to MySQL
	$mysql_host = getenv('DB_HOST');
	$mysql_port = getenv('DB_PORT');
	$mysql_database = getenv('DB_NAME');
	$mysql_username = getenv('DB_USER');
	$mysql_password = getenv('DB_PASS');
	$mysql_dsn = "mysql:host=$mysql_host;port=$mysql_port;dbname=$mysql_database;charset=utf8mb4";

	try {
		$mysql_conn = new PDO($mysql_dsn, $mysql_username, $mysql_password);
		$mysql_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Get some dummy data from MySQL
		$mysql_query = "SELECT * FROM dummy_table";
		$mysql_result = $mysql_conn->query($mysql_query);
		$mysql_data = $mysql_result->fetchAll(PDO::FETCH_ASSOC);

	} catch(PDOException $e) {
		echo "Error connecting to MySQL: " . $e->getMessage();
	}

	// Connect to MongoDB
	$mongo_host = getenv('MONGO_HOST');
	$mongo_port = getenv('MONGO_PORT');

	try {
		$mongo_conn = new MongoDB\Client("mongodb://$mongo_host:$mongo_port");

		// Get some dummy data from MongoDB
		$mongo_query = [];
		$mongo_options = ['limit' => 5];
		$mongo_result = $mongo_conn->myapp->dummy_collection->find($mongo_query, $mongo_options);
		$mongo_data = $mongo_result->toArray();

	} catch(MongoDB\Driver\Exception\Exception $e) {
		echo "Error connecting to MongoDB: " . $e->getMessage();
	}

	// Display the dummy data
	echo "<h1>Dummy Data from MySQL</h1>";
	foreach($mysql_data as $row) {
		echo "<p>{$row['id']}: {$row['name']}</p>";
	}

	echo "<h1>Dummy Data from MongoDB</h1>";
	foreach($mongo_data as $document) {
		echo "<p>{$document['id']}: {$document['name']}</p>";
	}

	?>
</body>
</html>

