<?php
  // DB 연결
  $db = new PDO("mysql:host=localhost;dbname=kmc0487;charset=utf8","kmc0487","dot0487!");

  // 쿼리문 작성
  $sql = "
    INSERT board SET
    study = '{$_POST['study']}',  #과목
    subject = '{$_POST['subject']}',  # 제목
    name = '{$_POST['name']}',  #방장이름
    population = '{$_POST['population']}', #인원수
    place = '{$_POST['place']}',    # 장소
    content = '{$_POST['content']}'  # 내용


  ";
  if ($db->query($sql)) {
    header('Location:./view2.php?idx='.$_GET['idx']); // 쿼리문이 정상적으로 실행되면 view.php로 이동
  } else {
    print_r($db->errorInfo());    // 쿼리문에 문제가 있으면 에러 출력
  }
  //WHERE idx = '{$_GET['idx']}' $sql 에서 잠시빼옴..update set 이랑 호응함.
