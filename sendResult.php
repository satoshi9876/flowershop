<?php
session_start();
require_once dirname(__FILE__).'/php/functions.php';

$_POST = checkInput($_POST);

if(isset($_POST['ticket'], $_SESSION['ticket'])){
  $ticket = $_POST['ticket'];
  if($ticket !== $_SESSION['ticket']){
    die('不正アクセスの疑いがあります。');
  }
}else{
  die('不正アクセスの疑いがあります。');
}

$name       = $_SESSION['name'];
$email      = $_SESSION['email'];
$tel        = $_SESSION['tel'];
$contNum    = 'T' . time();
$subject    = 'お問い合わせ ' . $contNum . ' ' . $tel;
$msg        = $_SESSION['msg'];
$mailTo     = 'emailaddress';
$returnMail = 'emailaddress';
/*
mb_language('ja');
mb_internal_encoding('UTF-8');
*/
$header = 'From: ' . mb_encode_mimeheader($name) . ' <' . $email . '>';
if(ini_get('safe_mode')){
  $result = mb_send_mail($mailTo, $subject, $msg, $header);
}else{
  $result = mb_send_mail($mailTo, $subject, $msg, $header, '-f' . $returnMail);
}

$message = '';
if($result){
  $contMsgTitle = '送信完了';
  $message      = '送信が完了しました。' . "\n" . 'あなたのお問い合わせ番号は ' . $contNum . ' です。';
}else{
  $contMsgTitle = '送信失敗';
  $message      = '送信が失敗しました。' . "\n" . '「戻る」を押して最初からやりなおしてください。';
}
$_SESSION = array();
session_destroy();
$message = h($message);

require 'php/contact/sendResult_view.php'
?>