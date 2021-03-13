<?php
include_once("./lib.php");
$idx = $_GET['idx'] ?? NULL;

  $conn = mysqli_connect('localhost', 'kmc0487', 'dot0487!', 'kmc0487');

  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $count = $row['count'];
  $count = $count + 1;
  mysqli_query($conn,"UPDATE board SET count = '{$count}' WHERE idx = '{$idx}'");

  header('Location:./update_ok_people.php'); // 쿼리문이 정상적으로 실행되면 list.php로 이동

?>
