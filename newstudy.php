<?php

include_once('./lib.php');

  $db = new PDO("mysql:host=localhost;dbname=kmc0487;charset=utf8","kmc0487","dot0487!");
  $idx = $_GET['idx'];
  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="contnewdon.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Group!</title>
</head>
<script>
    document.addEventListener("touchstart", function() {}, true);

    function confirmter(){
      alert("잠깐!")
      if(confirm("이대로 등록하시겠습니까?")){
      //  location.href='./view2.php?idx=<?php echo $row->idx?>';
      }
      else{
        return false;
      }
    }
</script>

<body>

    <header>
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="index.php">home</a></li>
            <li><a href="newstudy.php"><u>new</u></a></li>
            <li><a href="#"></a></li>

        </ul>
    </header>

    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky")
        })
    </script>

    <br><br><br>

    <hr><br><br><center>
    <h2><i><b>신규 스터디 개설하기!</b></i></h2>
    </center>
    <br><br>
    <hr>
    <form action="update_ok.php" method="post">
        <center> 자신의 스터디를 소개해주세요. </center>
        <p>
        스터디명: <input type="text" placeholder="스터디 명을 입력하세요. " name="study"style="width:300px; height:50px;" required>
      </p>
      <br>
      <p>
        과목:
        <select name="subject">
          <option>과목</option>
          <optgroup label="수학">
            <option value="고등수학">고등수학</option>
            <option value="대학수학">대학수학</option>
          </optgroup>
          <optgroup label="과학">
            <option value="자연과학">자연과학</option>
            <option value="응용과학/공학">응용과학/공학</option>
          </optgroup>
          <optgroup label="외국어">
            <option value="영어">영어</option>
            <option value="기타">기타</option>
          </optgroup>
          <optgroup label="인문학/독서">
            <option value="역사">역사</option>
            <option value="말하기">말하기</option>
            <option value="독서">독서</option>

          </optgroup>
        </select>

              </p>
    <br>
    <p>
    작성자: <input type="text" placeholder="이름을 입력하세요. " name="name"style="width:300px; height:50px;" required>
  </p>
  <br>
  <p>
  희망 인원수: <input type="text" name="population"style="width:100px; height:50px;" required>명
</p>
<br>
<p>
활동 장소: <input type="text" placeholder="활동 장소를 입력하세요." name="place"style="width:300px; height:50px;" required>
</p>
<br>
    <p>
    스터디 내용: <textarea type="text" size="100" placeholder="내용을 입력하세요. " name="content"style="width:300px; height:150px;"></textarea>
  </p>

    	<button type="submit" onclick="confirmter()">완료</button> <br><br>
    	<button type="button" onclick="location.href = 'index.php'">취소</button>
    </form>




    <br><br><br>
    <div class = "card">
        <h1><i>어떻게 <br>신청하죠?</i></h1>
        <div class = "content">
            <h2>이렇게 하세요!</h2><!--그룹명--><br>
            <p>다음 양식으로 카톡을 보내주세요! <br>

                - 스터디명<br>
                - 인원수<br>
                - 활동장소<br>
                - 과목<br>
                - 스터디 소개 (자세하면 좋아요!)<br>
                - 스터디 단톡방 링크<br>
                - 방장소개 (이름, 학번, 학과)<br>

                <br>

            </p>

            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='https://open.kakao.com/o/svLEllSc'">신청하기</button>
                </div>
            </div>
        </div>
    </div>
    <br>



    <hr><br>
    <center><i><u><h5>
        dding_study <br>
        Contact : <a href="ddingstudy02@gmail.com">ddingstudy02@gmail.com</a><br>
        <br>

    </h5></u></i></center>


</body>
</html>
