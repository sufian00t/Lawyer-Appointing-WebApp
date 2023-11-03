<?php
session_start();
$username = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";
$password = isset($_COOKIE['pass']) ? $_COOKIE['pass'] : "";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="\Mr. Attorneyy\Views\styleLogin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>    
</head>

<body>
    <form method="post" action="../../Controller/loginCheck.php">
        <h1 align="center"><u> Login </u></h1> <br> <br>
        <b> User type <select name="User">
            <option value="Lawyer">Lawyer</option>
            <option value="Assistant">Assistant</option>
            <option value="Client">Client</option>
            <option value="Admin">Admin</option>
        </select> <br> <br>

        <b> Username : <input type="text" name="name" value = "<?php echo $username ?>" placeholder="enter username..."><br> <br>
        <b> Password : <input type="password" name="pass" value = "<?php echo $password ?>" placeholder="enter password..."> <br> <br>
        <b> <input type="checkbox" name="check" value="Remember me">
        <b> <label for="check"> Remember me</label><br><br>
        <input type="submit" name="sub" value="LOGIN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="res"><br> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/Mr. Attorneyy/Views/Registration.php/"> Don't Have Account? Signup Here </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </form>
</body>
</html>
