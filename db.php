<?php
$db_host = "localhost";
$db_user = "kmc0487";
$db_passwd = "dot0487!";
$db_name = "kmc0487";

$con = new mysqli($db_host, $db_user, $db_passwd, $db_name);

function alert ($msg) {
  echo "<script>alert('{$msg}')</script>";
}

function move ($url = false) {
  // url이 false일 경우 뒤로가기, url이 있으면 해당 url로 이동
  echo "<script>";
    echo $url ? "location.replace('{$url}')" : "history.back()";
  echo "</script>";
  exit;
}
