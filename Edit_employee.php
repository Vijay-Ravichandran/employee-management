<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include('db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$employee = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Edit Employee</h2>
<form action="update_employee.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $employee['name']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $employee['email']; ?>" required><br><br>

    <label>Position:</label><br>
    <input type="text" name="position" value="<?php echo $employee['position']; ?>" required><br><br>

    <label>Salary:</label><br>
    <input type="number" step="0.01" name="salary" value="<?php echo $employee['salary']; ?>" required><br><br>

    <input type="submit" value="Update Employee">
</form>