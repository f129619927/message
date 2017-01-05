<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>
    <title>roy fat</title>
<head>
</head>
<body>
<form action="/" method="post">
    <p>名稱:<input name="name"  placeholder="請輸入名子" value="<?= $_POST["name"] ?>" ></input></p>
    <p>留言:<input name="contect"  placeholder="請輸入留言" value="<?= $_POST["contect"]?>"></input></p>
    <input type="submit" value="送出" ></input>
</form>
</body>
</html>
