<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<h2>Create User</h2>
    <form method="POST" action="actions/create_user.php">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>