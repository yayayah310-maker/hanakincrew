<?php
session_start();
$_SESSION = array(); // セッション変数をすべて解除
session_destroy();   // セッションを破棄
header('Location: login.php');
exit;