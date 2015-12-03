<?php

require_once 'functions.php';

if(empty($_GET['id']))
{
    die('id is empty');
}

$id = $_GET['id'];

$conn = connectDB();

$conn->query("DELETE FROM Users where id = $id");

if($conn->errno)
{
    echo $conn->error;
}else
{
    header("Location: allusers.php");
}
