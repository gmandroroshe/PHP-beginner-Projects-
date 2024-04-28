<?php
require_once('inc/corrction.php');?>
<?php
/*
// Set variables for user data
$ID = '01'
$First_Name = 'Thilina';
$Last_Name = 'Rv';
$Email = 'Kasun@gmail.com';
$Password = '123456';


$query = "INSERT INTO st (ID,First_Name, Last_Name, Email, Password) 
VALUES('{$ID},{$First_Name}','{$Last_Name}','{$Email}','{$Password}')";

$result = mysqli_query($connection, $query);	
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css";>
</head>
<body>
    <div class="container my-5">
        <h2>List of Students</h2>
        <a class="btn btn-primary" href="/1stphp/create.php" role="button">New Student</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>

            <?php
            //read all row from database table
            $sql = "SELECT * FROM st";
            $result = $connection->query($sql);

            //read data of each row
            while($row = $result->fetch_assoc())
            {
                echo"
                <tr>
                <td>$row[ID]</td>
                <td>$row[First_Name]</td>
                <td>$row[Last_Name]</td>
                <td>$row[Email]</td>
                <td>$row[Password]</td>
                <td>
                <a class='btn btn-primary btn-sm' href='/1stphp/edit.php?id=$row[ID]'>Edit</a>
                <a class='btn btn-danger btn-sm' href='/1stphp/delet.php?id=$row[ID]'>Delete</a>
                </td>
                </tr>
                ";
                
            }
            ?>
        </table>
    </div>
</body>
</html>


