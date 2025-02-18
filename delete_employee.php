<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "Employee deleted successfully!";
} else {
    echo "Error deleting employee!";
}
?>