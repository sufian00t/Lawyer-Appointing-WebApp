<?php
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../../Views/Login1.php/');
    exit();
 }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="\Mr. Attorneyy\Views\styleAddUserClient.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Client</title>
</head>
<body>
    <form action="../../Controller/Entry.php" method="post">
        <h1 align="center"><u> Add Client </u> </h1> <br> <br>
        <b>User : <input type="text" name="User" value="Client" readonly > <br> <br>
        <b>Name : <input type="text" name="fname"> <br> <br>
        <b>User Name : <input type="text" name="uname"> <br> <br>
        <b>Password : <input type="password" name="upass"> <br> <br>
        <b>Confirm Password : <input type="password" name="cpass" placeholder=""> <br> <br>
        <b>E-Mail : <input type="email" name="Email"> <br> <br>
        <b>Phone : <input type="text" name="phone"> <br> <br>
        <b>Gender : 
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label> <br> <br>
        <input type="submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name=""><br>
    </form> 
</body>
</html>
