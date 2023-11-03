<?php
   function getConnection()
   {
   	$server="localhost";
   	$username="root";
   	$password="";
   	$dbName="mr. attorney";
   	$con= new mysqli($server,$username,$password,$dbName);
   	return $con; 
   }
?>