<?php
// filepath: c:\xampp\htdocs\project1\db.php
$host = 'localhost';
$user = 'root'; // Default XAMPP username
$password = ''; // Default XAMPP password
$database = 'project1';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>