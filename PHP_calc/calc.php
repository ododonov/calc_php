<?php
require_once "script.php";    // подгружаем файл с "вычислительным скриптом"
session_start();
$_SESSION['i'] = 1;           // счетчик операндов в калькуляторе
if($_POST) {
    $val = array_shift($_POST); //в случае срабатывания клавиши последнее значение считывается в функцию
    output($val);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title> Калькулятор </title>
  <link rel = "stylesheet" href = "calc_style.css">
</head>

<form method = 'post'>
<textarea rows = '1' columns = '20'><?= $_SESSION['res']?></textarea>
<input type = submit name = 'one' value = 1></input>
<input type = submit name = 'two' value = 2></input>
<input type = submit name = 'three' value = 3></input>
<input type = submit name = 'four' value = 4></input>
<input type = submit name = 'five' value = 5></input></p>
<input type = submit name = 'six' value = 6></input>
<input type = submit name = 'seven' value = 7></input>
<input type = submit name = 'eight' value = 8></input>
<input type = submit name = 'nine' value = 9></input>
<input type = submit name = 'zero' value = 0></input></p>
<input type = submit name = '+' value = '+'></input>
<input type = submit name = '-' value = '-'></input>
<input type = submit name = '*' value = '*'></input>
<input type = submit name = '/' value = '/'></input>
<input type = submit name = 'point' value = '.'></input></p>
<input type = submit name = 'C' value = 'C'></input>
<input type = submit name = 'equal' value = '='></input></p>
</form>
</html>
