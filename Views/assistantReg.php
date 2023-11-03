<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<form action="../../Controller/regCheck.php" method="post">
     <h1 align = center><u>Lawyer Assistant Registration </u> </h1> <br> <br>

     <b> Name : <input type="text" name="fname" placeholder="enter name..."> <br> <br>

     <b> Username : <input type="text" name="uname" placeholder="enter username..."> <br> <br>

     <b> Password : <input type="password" name="pass" placeholder="enter password..."> <br> <br>

     <b> Confirm Password : <input type="password" name="cpass" placeholder=""> <br> <br>

     <b> E-mail : <input type="email" name="mail" placeholder="enter e-mail..."> <br> <br>

     <b> Phone : <input type="text" name="mobile" placeholder="enter phone..."> <br> <br>

     <b> Lawyer Name: <input type="text" name="lawname"> <br> <br>

     <b> Gender : <input type="radio" name="gender"  value = Male>
     	<label for = Male> Male </label>
        <input type="radio" name="gender"  value = Female>
     	<label for = Female> Female </label> <br> <br>
     <input type="submit" name="sub" value = "Register"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset" name=""><br>

</form>
     	
</body>

</html>
