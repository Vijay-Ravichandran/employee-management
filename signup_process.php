<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $position = trim($_POST['position']);
    $salary = trim($_POST['salary']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password

    // Check if email already exists
    $checkEmail = "SELECT * FROM employees WHERE email = :email";
    $stmt = $pdo->prepare($checkEmail);
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "Error: Email already registered!";
        exit;
    }

    // Insert employee
    $sql = "INSERT INTO employees (name, email, position, salary, password) VALUES (:name, :email, :position, :salary, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'position' => $position,
        'salary' => $salary,
        'password' => $password
    ]);

    echo "Signup successful! <a href='login.php'>Login Here</a>";
}
?>
