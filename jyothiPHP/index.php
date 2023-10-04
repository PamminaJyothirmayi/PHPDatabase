<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data</title>
</head>
<body>
    <h1>Inserting Data</h1>
    <form method="POST" action="insert.php">
        <label>Name</label>
        <input type="text" name="name" required><br/>

        <label>Email</label>
        <input type="email" name="email" required><br/>

        <input type="submit" value="Insert Data">

    </form>
</body>
</html>