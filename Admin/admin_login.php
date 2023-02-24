<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form action="admin_validate.php" method="post">
        <input type="text" name="id" placeholder="ID"/>
        <input type="text" name="aname" id="aname" placeholder="Admin Name">
        <input type="password" name="pass" id="pass">
        <input type="submit" value="LOGIN" name="login"/>
    </form>
</body>
</html>