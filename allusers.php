<?php
    require_once 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<a href="adduser.html">添加用户</a>

<table style="text-align: left" border="1">
    <tr><th>id</th><th>姓名</th><th>年龄</th><th>修改</th><th>删除</th></tr>

<?php

$conn = connectDB();
$result = $conn->query("select * from Users");
$dataCount = $result->num_rows;

for($i=0;$i<$dataCount;$i++)
{
    $result_arr = $result->fetch_assoc();

    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];

    echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a></td>
              <td><a href='deleteuser.php?id=$id'>删除</a></td></tr>" ;
}

?>

</table>
</body>
</html>

