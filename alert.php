<?php
  include_once('./lib.php');
  $db = new PDO("mysql:host=localhost;dbname=kmc0487;charset=utf8","kmc0487","dot0487!");

  $sql = "SELECT * FROM phptest WHERE idx = 1";

  $row = fetch($sql);
  $count = $_GET['people'];
  $sql2 = "UPDATE phptest SET people = '{$count}' WHERE idx = 1"
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="mathclass.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고등수학 스터디</title>
</head>




<body>
  <script type="text/javascript">
  confirm("안녕하세요.");

    if(confirm("신청하시겠습니까?")){
      <?php $count = $count + 1;?>
      <?php echo $sql2; ?>
      alert('신청되었습니다!');
      location.href='index.php';
      //location.href='https://open.kakao.com/o/sTBeN5Sc';
    }
    else{
      alert('취소되었습니다.');
      return false;
    }

   </script>
</body>
