<?php
include('db.php');

$sql = "SELECT * FROM employees";
$stmt = $pdo->query($sql);
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Employees List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($employees as $employee): ?>
    <tr>
        <td><?php echo $employee['id']; ?></td>
        <td><?php echo $employee['name']; ?></td>
        <td><?php echo $employee['email']; ?></td>
        <td><?php echo $employee['position']; ?></td>
        <td><?php echo $employee['salary']; ?></td>
        <td>
            <a href="edit_employee.php?id=<?php echo $employee['id']; ?>">Edit</a> |
            <a href="delete_employee.php?id=<?php echo $employee['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>