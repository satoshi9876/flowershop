<?php
function h($var){
  if(is_array($var)){
    return array_map('h', $var);
  }else{
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
  }
}
function checkInput($var){
  if(is_array($var)){
    return array_map('checkInput', $var);
  }else{
    if(get_magic_quotes_gpc()){
      $var = stripcslashes($var);
    }
    if(preg_match('/\0/', $var)){
      die('不正な入力です。');
    }
    if(!mb_check_encoding($var, 'UTF-8')){
      die('不正な入力です。');
    }
    return $var;
  }
}
function connectPractice(){
  $dbobj = mysqli_connect('servername', 'username', 'password')
    or die(mysqli_error($dbobj));
  mysqli_select_db($dbobj, 'dbname');
  mysqli_set_charset($dbobj, 'utf8');
  return $dbobj;
}
?>