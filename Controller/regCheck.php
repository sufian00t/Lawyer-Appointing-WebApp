<?php
require_once('../Model/alldb.php');
if (isset($_REQUEST['sub'])) { 
    $utype = $_REQUEST['User'];  
    $fname = $_REQUEST['fname'];
    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['pass'];
    $cpass = $_REQUEST['cpass'];
    $mail = $_REQUEST['mail'];
    $phone = $_REQUEST['mobile'];
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';

    if (empty($fname) || empty($uname) || empty($pass) || empty($cpass) || empty($mail) || empty($phone) || empty($gender)) {
        echo 'Please Fill up all fields';
    } 
    else {
        if ($utype == 'Lawyer' && ($pass == $cpass)) {
            $law = addLawyer($fname , $uname , $pass , $gender , $mail ,$phone) ;
            if ($law) {
                header('location: /Mr. Attorneyy/Home.php/');
                echo 'Registration Successful';
                exit();
            } else {
                header('location: /Mr. Attorneyy/Views/Registration.php/') ;
                echo 'Registration Failed or User already exists. Try Again';
            }
        } else if ($utype == 'Client' && ($pass == $cpass)) {
            $client = addClient($fname , $uname , $pass , $mail , $gender ,$phone) ;
            if ($client) {
                echo 'Registration Successful';
                header('location: /Mr. Attorneyy/Home.php/');
                exit();
            } else {
                echo 'Registration Failed or User already exists. Try Again';
            }
        } else if ($utype == 'Assistant' && ($pass == $cpass)) {
            $x = $_REQUEST['lawyer'];
           $assistant = addAssistant($mail,$fname , $uname , $pass , $phone , $x ,$gender) ;
            if ($assistant) {
                echo 'Registration Successful';
                header('location: /Mr. Attorneyy/Home.php/');
                exit();
            } else {
                echo 'Registration Failed or User already exists. Try Again';
            }
        }
    }
}

?>