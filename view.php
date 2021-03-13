<?php
  // 기존의 입력 정보 가져오기
  include("./lib.php");
  $db = new PDO("mysql:host=localhost;dbname=kmc0487;charset=utf8","kmc0487","dot0487!");
  $idx = $_GET['idx'] ?? NULL;
  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>게시물 조회 - <?php echo $row->subject?></title>
  <link rel="stylesheet" href="view_style.css">
</head>

<body>
<div class="every">

  <div class="table-body">

      <ul>
          <li class="label">스터디 명: </li>
          <li class="description">
              <?php echo "?".$row['study'] ?>
          </li>
      </ul>
      <ul>
          <li class="label">과목: </li>
          <li class="description">
              <?php echo $row->subject ?>
          </li>
      </ul>
      <ul>
          <li class="label">방장 이름: </li>
          <li class="description">
              <?php echo $row->name ?>
          </li>
      </ul>
      <ul>
          <li class="label">희망 인원수: </li>
          <li class="description">
              <?php echo $row->population ?>
          </li>
      </ul>
      <ul>
          <li class="label">활동 장소: </li>
          <li class="description">
              <?php echo $row->place ?>
          </li>
      </ul>

      <ul>
          <li class="label">내용: </li>
          <li class="description">
              <?php echo $row->content ?>
          </li>
      </ul>

  </div>
	<p></p></div>
	 <!--   // 작성자가 아닐경우 게시물 수정 불가
		if($member):
	    $writer = $row->writer;
	  	$my_name = $member->name;
	   if($writer == $my_name):
	  <button type="button"  onclick="location.href = './update.php?idx= echo $row->idx?>'" class = "ohyeah">수정하기</button>
	  <button type="button" class="button" onclick="location.href = './delete.php?idx== echo $row->idx?>'">삭제하기</button>
	   endif
	   endif
      <button type="button"  onclick="location.href =  './index.php'" class="hellyeah">홈으로</button> -->


</body>
</html>
