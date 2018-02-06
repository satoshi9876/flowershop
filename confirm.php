<?php
session_start();
require_once dirname(__FILE__).'/php/functions.php';

// include 'ChromePhp.php';

$_POST = checkInput($_POST);

if (isset($_POST['ticket'], $_SESSION['ticket'])) {
  $ticket = $_POST['ticket'];
  if ($ticket !== $_SESSION['ticket']) {
    die('不正アクセスの疑いがあります。');
  }
} else {
  die('不正アクセスの疑いがあります。');
}

$name  = isset($_POST['name'])  ? $_POST['name']  : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$tel   = isset($_POST['tel'])   ? $_POST['tel']   : NULL;
$msg   = isset($_POST['msg'])   ? $_POST['msg']   : NULL;

$name  = trim($name);
$email = trim($email);
$tel   = trim($tel);
$msg   = trim($msg);

// ChromePhp::log($name);
// ChromePhp::log($email);
// ChromePhp::log($tel);
// ChromePhp::log($msg);

$error = array();

if($name == ''){
  $error[] = 'お名前は必須項目です。';
}elseif (mb_strlen($name) > 100) {
  $error[] = 'お名前は100文字以内でお願い致します。';
}

if($email == ''){
  $error[] = 'メールアドレスは必須項目です。';
}else{
    $pattern =
      '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD';
    if(!preg_match($pattern, $email)){
      $error[] = 'メールアドレスの形式が正しくありません。';
    }
}

if($tel == ''){
  $error[] = '電話番号は必須項目です。';
}

if($msg == ''){
  $error[] = '内容は必須項目です。';
}elseif (mb_strlen($msg) > 500) {
  $error[] = '内容は500文字以内でお願い致します。';
}

if(count($error) > 0){
  $error  = h($error);
  $name   = h($name);
  $email  = h($email);
  $tel    = h($tel);
  $msg    = h($msg);
  $ticket = h($ticket);

  // requireの場合、top.phpの内容とエラーメッセージはちゃんと表示されるがurlはindex.phpではなくconfirm.phpのままである。
  require 'php/top.php';
  // header関数の場合、index.phpに戻るがエラーメッセージが出ない。さすがにそれは問題。
  // header('Location: index.php');
}else{
  $_SESSION['name']  = $name;
  $_SESSION['email'] = $email;
  $_SESSION['tel']   = $tel;
  $_SESSION['msg']   = $msg;

  $name   = h($name);
  $email  = h($email);
  $tel    = h($tel);
  $msg    = h($msg);
  $ticket = h($ticket);

  require 'php/contact/confirm_view.php';
}

?>