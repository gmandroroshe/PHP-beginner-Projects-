<?php


$connection = mysqli_connect('localhost', 'root', '', 'employe');

if(mysqli_connect_error())
{
    die('Db error . mysqli_connect_error'());

}
else
{
    echo("connection successful.");
}

?>