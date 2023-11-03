<?php
require_once('../Model/alldb.php');
session_start() ;
if (isset($_REQUEST['uname'])) {
    $uname = $_REQUEST['uname'];
    $delete = deleteLawyer($uname) ;
    if ($delete) {
        header('Location: ../Views/Lawyer Management.php/');
        exit();
    } else {
        echo "Error deleting record ";
    }
} else {
    die("Invalid request");
}
?>