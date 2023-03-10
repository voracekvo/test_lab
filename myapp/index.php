<?php
$dbhost = getenv('DB_HOST');
$dbport = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$dbuser = getenv('DB_USER');
$dbpass = getenv('DB_PASS');
$mongo_host = getenv('MONGO_HOST');
$mongo_port = getenv('MONGO_PORT');

// Connect to MySQL
$pdo = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname", $dbuser, $dbpass);
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Connect to MongoDB
$client = new MongoDB\Client("mongodb://$mongo_host:$mongo_port");
$collection = $client->mydb->users;
$documents = $collection->find();

// Display data
echo "<h1>Users</h1>";
echo "<ul>";
foreach ($users as $user) {
    echo "<li>{$user['name']}</li>";
}
echo "</ul>";
echo "<h1>MongoDB Users</h1>";
echo "<ul>";
foreach ($documents as $document) {
    echo "<li>{$document['name']}</li>";
}
echo "</ul>";
?>

