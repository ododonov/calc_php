<?php

// $_SESSION['x1'] = '';  - первый операнд
// $_SESSION['act'] = '';  - знак действия с операндами
// $_SESSION['x2'] = ''; - второй операнд
// $_SESSION['i'] = 1; - счетчик операндов в выведенном выражении
// $_SESSION['point'] = false; - метка наличия точки в выведенном выражении

  function output($val) {         //функция вывода на экран
    switch($val){
      case '1':
        $num = '1';
        break;
      case '2':
        $num = '2';
        break;
      case '3':
        $num = '3';
        break;
      case '4':
        $num = '4';
        break;
      case '5':
        $num = '5';
        break;
      case '6':
        $num = '6';
        break;
      case '7':
        $num = '7';
        break;
      case '8':
        $num = '8';
        break;
      case '9':
        $num = '9';
        break;
      case '0':
        if($_SESSION['x'.$_SESSION['i']] !== "0" || $_SESSION['point']) {     //0 не может следовать за 0 нигде, кроме дроби
          $num = '0';
        }
          break;
      case '+':
        if(empty($_SESSION['x'.$_SESSION['i']] == '')) {            //знак не может быть первым
          if(empty($_SESSION['act']) || $_SESSION['x2'] == '') {    //появление нажатого знака
            $_SESSION['act'] = '+';
            $_SESSION['point'] = false;
          } else {
            calc();                                                 //расчет выведенного выражения и появление знака
            $_SESSION['act'] = '+';
          }
        }
        break;
      case '-':
        if(empty($_SESSION['x'.$_SESSION['i']] == '')) {
          if(empty($_SESSION['act']) || $_SESSION['x2'] == '') {
            $_SESSION['act'] = '-';
            $_SESSION['point'] = false;
          } else {
            calc();
            $_SESSION['act'] = '-';
          }
        }
        break;
      case '*':
        if(empty($_SESSION['x'.$_SESSION['i']] == '')) {
          if(empty($_SESSION['act']) || $_SESSION['x2'] == '') {
            $_SESSION['act'] = '*';
            $_SESSION['point'] = false;
          } else {
            calc();
            $_SESSION['act'] = '*';
          }
        }
        break;
      case '/':
        if(empty($_SESSION['x'.$_SESSION['i']] == '')) {
          if(empty($_SESSION['act']) || $_SESSION['x2'] == '') {
            $_SESSION['act'] = '/';
            $_SESSION['point'] = false;
          } else {
            calc();
            $_SESSION['act'] = '/';
          }
        }
        break;
      case '.':
        if(!$_SESSION['point']) {
          if(empty($_SESSION['x'.$_SESSION['i']] == '')) {
            $num = "0.";
          }
          $num = '.';
          $_SESSION['point'] = true;
        }
        break;
      case 'C':
        $_SESSION['x1'] = '';
        $_SESSION['act'] = '';
        $_SESSION['x2'] = '';
        $_SESSION['i'] = 1;
        $_SESSION['point'] = false;
        break;
      case '=':
        calc();
        break;
        }
    if($_SESSION['act']) {
      $_SESSION['i']++;
      }
    if(isset($num)) {
      if($_SESSION['x'.$_SESSION['i']] == '0' && !$_SESSION['point']) {
        $_SESSION['x'.$_SESSION['i']] = $num;
      } else {
      $_SESSION['x'.$_SESSION['i']] = $_SESSION['x'.$_SESSION['i']].$num;
    }
    }
    $_SESSION['res'] = $_SESSION['x1'].$_SESSION['act'].$_SESSION['x2'];
    }

  function calc() {
    if($_SESSION['act'] == '+') {
      $_SESSION['x1'] = $_SESSION['x1'] + $_SESSION['x2'];
    }
    if($_SESSION['act'] == '-') {
      $_SESSION['x1'] = $_SESSION['x1'] - $_SESSION['x2'];
    }
    if($_SESSION['act'] == '*') {
      $_SESSION['x1'] = $_SESSION['x1'] * $_SESSION['x2'];
    }
    if($_SESSION['act'] == '/') {
      $_SESSION['x1'] = $_SESSION['x1'] / $_SESSION['x2'];
    }
  $_SESSION['act'] = '';
  $_SESSION['x2'] = '';
  $_SESSION['res'] = $_SESSION['x1'].$_SESSION['act'].$_SESSION['x2'];
  }

  ?>
