<?php
/**
 * Created by PhpStorm.
 * User: guohongjun
 * Date: 11/30/15
 * Time: 5:20 PM
 */

require_once 'functions.php';

if(!isset($_POST['name']))
{
    die('name is undefine');
}

if(!isset($_POST['age']))
{
    die('age is undefine');
}

$name = $_POST['name'];
$age = $_POST['age'];

if(empty($name))
{
    die('name is empty');
}

if(empty($age))
{
    die('age is empty');
}

$conn = connectDB();

$age = intval($age);

$conn->query("INSERT INTO Users(name,age) VALUE ('$name', $age)");

if($conn->errno)
{
    echo $conn->error;
}else
{
    header("Location: allusers.php");
}



