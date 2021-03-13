<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="mathclass.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고등수학 스터디</title>
</head>


<script>
    document.addEventListener("touchstart", function() {}, true);
</script>

<body>
<!--
  <script>
  function isShow(){
          // $count = $count + 1;
          //mysqli_query($conn, "UPDATE phptest SET people = '{$count}' WHERE idx = 1");

  }
-->
  </script>

    <header>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="math.php">mat</a></li>
            <li><a href="science.php"><u>sci</u></a></li>
            <li><a href="lang.php">lan</a></li>
            <li><a href="human.php">hum</a></li>
        </ul>
    </header>
    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky")
        })
    </script>

    <br><br><br>
    <div class="title">
        <hr><br><br><center>
        <h2><b>고등수학 | HighSchool Math</b></h2>
        </center>
        <br><br>
        <hr>
    </div>
    <br><br>
    <?php
    include_once('lib.php');
    $idx = $_GET['idx'] ?? NULL;
    $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
    //$row = fetch($sql);
      $conn = mysqli_connect('localhost', 'kmc0487', 'dot0487!', 'kmc0487');

    //  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $count = $row['count'];
      $sql2 = "SELECT * FROM board WHERE subject = '고등수학'";
      $rows = fetchAll($sql2);
      foreach ($rows as $value) {
      if ($rows == NULL) { ?><center><h2>등록된 스터디가 없습니다. 새로운 스터디를 만들어보세요!</h2></center>
       <br><br> <button type = "button" onclick= "location.href='newstudy.php'" >신규 스터디 개설하기</button><?php
       }
       else{
    ?>
    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1>명지고등수학</h1><h2>21 전공자유학부 권OO<br><?php echo $count;?>명/ 비대면</h2></center>
            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    현역 이과출신 재수 나형 1등급(인증가능)<br>
                    3월 이전까지는 비대면 스터디로 진행하고 그 이후에는 자연캠에서 스터디를 할 계획입니다.<br>
                    개인톡으로 상담 및 문제풀이 안내를 진행합니다.<br>
                    기하를 제외한 고등수학 전과목을 스터디합니다!


                </p><br>
                <div class="wrapper">
                      <?php if($count >= 5): ?>
                             <?php echo "마감"; ?>
                             <br>
                              <a href="mailto:cmk0487@naver.com" title= "고딩수학 마감">관리자에게 문의 보내기</a>
                      <?php else:  ?>
                        <div class="btn">
                           <button type = "button" onclick= "location.href='check.php'" > 신청하기 </button>
                         </div>

                      <?php endif?>



                </div>

            </div>

        </div>
    </div>
    <br><br>
    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1><?php echo $row->study ?></h1><h2><?php echo $row->name ?><br><?php echo $count;?>명/ <?php echo $row->population ?>명</h2></center>
                <center><h2>활동장소: <?php echo $row->place ?></h2></center>

            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    <?php echo $row->content ?>
                </p><br>
                <div class="wrapper">
                      <?php if($count >= $row->population): ?>
                             <?php echo "마감"; ?>
                             <br>
                              <a href="mailto:cmk0487@naver.com" title= "고딩수학 마감">관리자에게 문의 보내기</a>
                      <?php else:  ?>
                        <div class="btn">
                           <button type = "button" onclick= "location.href='check.php'" > 신청하기 </button>
                         </div>

                      <?php endif?>



                </div>

            </div>

        </div>
    </div>
    <?php
  }}
    ?>



    <hr><br>
    <center><i><u><h5>
        dding_study <br>
        Contact : <a href="ddingstudy02@gmail.com">ddingstudy02@gmail.com</a><br>
        <br>

    </h5></u></i></center>


</body>
</html>
