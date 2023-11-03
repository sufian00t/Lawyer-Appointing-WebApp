<?php
require_once('../Model/alldb.php');
session_start() ;
if (isset($_REQUEST['update'])) {
    $uname = $_REQUEST['uname'];
    $query = "SELECT * FROM clients WHERE uname = '$uname'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
     
    if (!$row) {
        die("Client not found");
    }
    $Mail = $row['Email'];
    $name = $row['fname'];
    $username = $row['uname'];
    $pass = $row['upass'];
    $phone = $row['phone'];
    $gender = $row['Gender'];

    if (isset($_REQUEST['update'])) {
        $Mail = $_REQUEST['Email'];
        $name = $_REQUEST['fname'];
        $username = $_REQUEST['uname'];
        $pass = $_REQUEST['upass'];
        $phone = $_REQUEST['phone'];
        $gender = $_REQUEST['Gender'];
        $update = "UPDATE lawyer SET Email = '$Mail', fname = '$name', uname = '$username', upass = '$pass', phone = '$phone', Gender = '$gender' WHERE uname = '$uname'";
        if ($update)  {
            header('Location: /Mr. Attorneyy/Client Management.php/');
            exit();
        } else {
            echo "Error updating record" ;
        }
    }
} else {
    die("Invalid request");
}
?>
