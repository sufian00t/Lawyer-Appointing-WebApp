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
    <link rel="stylesheet" href="\Mr. Attorneyy\Views\stylePendingAppointments.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pending Appointments</title>
</head>
<body>
    <form method="post">
        <h1 align="center"><u>Pending Appointments</u></h1> <br> <br> <br> <br>
        <a href="../../Views/Admin_Dash.php">
            <b><input type="button" name="button1" value="DashBoard">
        </a>
        <table border="1" align="center" width="50%">
            <tr>
                <th>Client Name</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Lawyer</th>
                <th>Action</th>
            </tr>
            <tbody>
                <?php
                require_once('../Model/alldb.php');
                $result=allAppointments();
                if (!$result) die("Query Failed" . mysqli_error());
                else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Client'] ?> </td>
                            <td><?php echo $row['Date'] ?> </td>
                            <td><?php echo $row['Time'] ?> </td>
                            <td><?php echo $row['Lawyer'] ?> </td>
                    <td><a href="/Mr. Attorneyy/Views/Sent.php"> Forward to Lawyer </a> ||
                    <a href="/Mr. Attorneyy/Views/Sent2.php"> Forward to Assistant </a></td>
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