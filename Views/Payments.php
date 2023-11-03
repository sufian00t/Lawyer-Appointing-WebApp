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
    <link rel="stylesheet" href="\Mr. Attorneyy\Views\stylePayments.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Records</title>
</head>
<body>
    <form method="post">
        <h1 align="center"><u>Payment Records</u></h1> <br> <br> <br> <br>
        <a href="../../Views/Admin_Dash.php">
            <b><input type="button" name="button1" value="DashBoard">
        </a>
        <table border="1" align="center" width="50%">
            <tr>
                <th>Client Name</th>
                <th>Lawyer Name</th>
                <th>Payment Date</th>
                <th>Payment Time</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
            <tbody>
                <?php
                require_once('../Model/alldb.php');
                $result=allPayments();
                if (!$result) die("Query Failed" . mysqli_error());
                else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Client'] ?> </td>
                            <td><?php echo $row['Lawyer'] ?> </td>
                            <td><?php echo $row['Date'] ?> </td>
                            <td><?php echo $row['Time'] ?> </td>
                            <td><?php echo $row['Amount'] ?> </td>
                            <td><?php echo $row['Status'] ?> </td>
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