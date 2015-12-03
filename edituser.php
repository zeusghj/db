<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改用户</title>
</head>
<body>

<?php

require_once 'functions.php';

if (!empty($_GET['id']))
{
    $conn = connectDB();

    $id = intval($_GET['id']);

    $result = $conn->query("SELECT * FROM Users WHERE id = $id");

    if($conn->errno)
    {
        die($conn->error);
    }

    $arr = $result->fetch_assoc();

    $name = $arr['name'];
    $age = $arr['age'];

    //生成表单
    print_r($arr);

}else
{
    die('id is not define');
}

?>
<form action="edituser_server.php" method="post">
    <div>
        用户ID:<input type="text" name="id" value=<?php echo $id; ?>>
    </div>
    <div>
        用户姓名:<input type="text" name="name" value=<?php echo $name; ?>>
    </div>
    <div>
        用户年龄:<input type="text" name="age" value=<?php echo $age; ?>>
    </div>

    <input type="submit" value="提交">
</form>

</body>
</html>