<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>连接数据库</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: guohongjun
 * Date: 11/30/15
 * Time: 11:59 AM
 */

$conn = new mysqli('localhost', 'root', '', 'myapp');

if($conn)
{
    echo '连接成功 <br>';

    $result = $conn->query("select COUNT(*) from Users WHERE name='zhangsan'");

    if($result)
    {
        $query_arr = $result->fetch_array();

        echo '张三个数:'.$query_arr[0];
    }else
    {
        echo '查询失败';
    }

}else
{
    echo '连接失败';
}


?>

</body>
</html>
