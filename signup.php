<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Signup</title>
</head>
<body>
    <h2>Employee Signup</h2>
    <form action="signup_process.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Position:</label><br>
        <input type="text" name="position" required><br><br>
        
        <label>Salary:</label><br>
        <input type="number" step="0.01" name="salary" required><br><br>
        
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>