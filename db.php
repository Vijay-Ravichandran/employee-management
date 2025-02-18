<?php
$host = '127.0.0.1'; 
$dbname = 'employee_db';
$username = 'root'; 
$password = ''; 

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connection Successful';
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?> 
