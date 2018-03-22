mysql_connect('107.170.53.190:3306','root','dl07988509tx');
mysql_select_db('testdrive');
<?php
$servername = '107.170.53.190;dbname=dads';
$username = 'root';
$password = 'dl07988509tx';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
		'db'=>array(
			'connectionString' => 'mysql:host=107.170.53.190;dbname=dads',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'dl07988509tx',
			'charset' => 'utf8',
		),
?>
