<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php"" method="post">
        <p>My test calculator</p>
    <input type="number" name="num1" placeholder="Enter first number">
    <select name="oper">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <input type="number" name="num2" placeholder="Enter second number">
    <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
