<?php
 session_start();
 require_once('../Model/alldb.php');
 if(!isset($_SESSION['username'])){
    header('location: ../../Views/Login1.php/');
    exit();
 }
$uname = isset($_REQUEST['uname']) ? $_REQUEST['uname'] : '';   
$result=editClient($uname);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="\Mr. Attorneyy\Views\styleUpdateClient.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Client</title>
</head>
<body>
    <form action="/Mr. Attorneyy/Controller/Update.php" method="post">
        <h1 align="center"><u>Update Client</u></h1> <br><br>
    <?php while($row=$result->fetch_assoc()){ ?>
        <b>User : <input type="text" name="Use" value="Client" readonly> <br><br>
        <b>E-Mail : <input type="email" name="Mail" value="<?php echo $row["Email"] ?>"> <br><br>
        <b>Name : <input type="text" name="fname" value="<?php echo $row["fname"] ?>"> <br><br>
        <b>User Name : <input type="text" name="uname" value="<?php echo $row["uname"] ?>"> <br><br>
        <b>Password : <input type="password" name="upass" value="<?php echo $row["upass"] ?>"> <br><br>
        <b>Phone : <input type="text" name="phone" value="<?php echo $row["phone"] ?>"> <br><br>
        <b>Gender : <input type="text" name="Gender" value="<?php echo $row["Gender"] ?>"> <br><br>
    <?php } ?>
        <input type="submit" name="update" value="Update"><br>
    </form>
</body>