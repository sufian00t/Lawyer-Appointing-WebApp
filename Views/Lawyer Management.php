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
    <link rel="stylesheet" href="\Mr. Attorneyy\Views\styleLawyerManagement.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lawyer Management</title>
</head>
<body>
    <form method="post">
        <h1 align="center"><u>Lawyer Management</u></h1> <br> <br> <br> <br>
        <a href="../../Views/AddUserLawyer.php">
            <b><input type="button" name="button1" value="Add Lawyer">
        <a href="../../Views/Admin_Dash.php">
            <b><input type="button" name="button1" value="DashBoard">
        </a>
        <table border="1" align="center" width="50%">
            <tr>
                <th>Name</th>
                <th>User Name</th>
                <th>Password</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Operations</th>
            </tr>
            <tbody>
                <?php
               require_once('../Model/alldb.php');
                $result=allLawyer();
                if (!$result) die("Query Failed" . mysqli_error());
                else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $uname = $row['uname'];
                        ?>
                        <tr>
                            <td><?php echo $row['fname'] ?> </td>
                            <td><?php echo $row['uname'] ?> </td>
                            <td><?php echo $row['upass'] ?> </td>
                            <td><?php echo $row['Mail'] ?> </td>
                            <td><?php echo $row['phone'] ?> </td>
                            <td><?php echo $row['Gender'] ?> </td>
                            <td>
                                <a href="../../Views/edit2.php?uname=<?php echo $row['uname'] ?>"> Update </a> ||
                                <a href="../../Controller/delete2.php?uname=<?php $row['uname'] ?>" onclick="return confirm('Are you sure want to Delete?')"> Delete </a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </form>
</body>
</html>