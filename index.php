<?php
session_start();
session_regenerate_id();

require_once dirname(__FILE__).'/php/functions.php';

$name  = isset($_SESSION['name'])  ? $_SESSION['name']  : NULL;
$email = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
$tel   = isset($_SESSION['tel'])   ? $_SESSION['tel']   : NULL;
$msg   = isset($_SESSION['msg'])   ? $_SESSION['msg']  : NULL;

if (!isset($_SESSION['ticket'])) {
  $_SESSION['ticket'] = sha1(uniqid(mt_rand(), TRUE));
}
$ticket = $_SESSION['ticket'];

$name  = h($name);
$email = h($email);
$tel   = h($tel);
$msg   = h($msg);

require 'php/top.php';

?>