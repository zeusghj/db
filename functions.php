<?php
/**
 * Created by PhpStorm.
 * User: guohongjun
 * Date: 11/30/15
 * Time: 3:59 PM
 */

require_once 'config.php' ;

function connectDB(){

    $conn = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_DB);

    if(!$conn)
    {
        die('can not connect db');
    }

    return $conn;
}