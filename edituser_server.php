<?php

require_once 'functions.php';

if(empty($_POST['id']))
{
    die('id is empty');
}

if(empty($_POST['name']))
{
    die('name is empty');
}

if(empty($_POST['age']))
{
    die('age is empty');
}
$conn = connectDB();

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

$conn->query("UPDATE Users SET name = '$name', age = $age WHERE id = $id");

if($conn->errno)
{
    die($conn->error);
}else
{
    header('Location: allusers.php');
}