<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include('db.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$salary = $_POST['salary'];

$sql = "UPDATE employees SET name = :name, email = :email, position = :position, salary = :salary WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':position', $position);
$stmt->bindParam(':salary', $salary);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "Employee updated successfully!";
} else {
    echo "Error updating employee!";
}
?>