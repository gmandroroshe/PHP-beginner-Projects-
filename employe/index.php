<?php
require_once('inc/corrction.php');?>
<?php
/*
// Set variables for user data
$_name = 'kavindu';
$_address = 'Rvkg';
$_email = 'Kasun@gmail.com';
$_phone = '0123544';

$query = "INSERT INTO data (name,address,email,phone) 
VALUES('{$_name}','{$_address}','{$_email}','{$_phone}')";
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
        <a class="btn btn-primary" href="create.php" role="button">New Student</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contac Number</th>
                    <th>Address</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>

            <?php
            //read all row from database table
            $sql = "SELECT * FROM data";
            $result = $connection->query($sql);

            //read data of each row
            while($row = $result->fetch_assoc())
            {
                echo"
                <tr>
                <td>$row[name]</td>
                <td>$row[address]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>
                <a class='btn btn-primary btn-sm' href='/1stphp/edit.php?id=$row[name]'>Edit</a>
                <a class='btn btn-danger btn-sm' href='/1stphp/delet.php?id=$row[name]'>Delete</a>
                </td>
                </tr>
                ";
                
            }
            ?>
        </table>
    </div>
</body>
</html>


