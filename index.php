<?php
include_once('./lib.php');
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="idx-style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@dding</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


<script>
    document.addEventListener("touchstart", function() {}, true);
</script>

    <body>
      <?php if(isset($_SESSION['email'])): ?>

        <header>
            <nav>
                <input type="checkbox"  id="check">
                <label for="check" class = "checkbtn">
                    <i class ="fas fa-bars"></i>
                </label>
                <label class = "logo" href="index.php">@dding_Study.</label>
                <ul>
                    <li><a class = "active" href="mypage.php">내 정보</a></li>
                    <li><a class = "active" href="logout.php">logout</a></li>
                    <li><a href="math.php">수학</a></li>
                    <li><a href="science.php">과학</a></li>
                    <li><a href="lang.php">외국어</a></li>
                    <li><a href="human.php">인문학/독서</a></li>
                    <li><a href="newstudy.php">신규 스터디 개설</a></li>
                    <li><a href="contact.php">Contact</a></li>

                </ul>
            </nav>
        </header>
        <section class="banner"></section>
      <?php else: ?>
        <header>
            <nav>
                <input type="checkbox"  id="check">
                <label for="check" class = "checkbtn">
                    <i class ="fas fa-bars"></i>
                </label>
                <label class = "logo">@dding_Study.</label>
                <ul>
                    <li><a class = "active" href="index.php">Home</a></li>
                    <li><a class = "active" href="login.php">login</a></li>
                    <li><a href="math.php">수학</a></li>
                    <li><a href="science.php">과학</a></li>
                    <li><a href="lang.php">외국어</a></li>
                    <li><a href="human.php">인문학/독서</a></li>
                    <li><a href="contact.php">Contact</a></li>

                </ul>
            </nav>
        </header>
        <section class="banner"></section>
      <?php endif?>

        <section class="banner"></section>

        <br><br><br><br><br><br><br><br><br>
        <div class = "lookslikebodybutitsnot">


            <div class = "container">
                <div class = "card">

                    <div class = "imgBx">
                        <img src="mju.png">
                    </div>
                    <div class = "content">
                        <h2>Welcome!</h2>
                        <p>'띵스터디'에 오신걸 환영합니다!<br>원하는 과목을 무료로 함께 공부하세요!<br>과목별로 나누어진 스터디를 고르고 <br> 신청하여 공부도 하고 친목도 다지세요!
                            </p>
                    </div>
                    <br>
                    <div class = "content">
                        <h2>코시국에 스터디를 해요?</h2>
                        <p>비대면으로도 스터디를 할 수 있습니다!<br>스터디정보에서 활동장소를 확인해주세요!
                        </p>
                    </div>
                    <br>
                    <div class = "content">
                        <h2>제가 원하는 스터디가 없어요 :(</h2>
                        <p>걱정마세요! 없으면 만들면 되죠! <br>메뉴창에서 스터디 개설을 확인해주세요.<br>본인이 원하는 모든 스터디를 <br> 만들 수 있습니다! </p>
                    </div>
                    <br>
                    <div class = "content">
                        <h2>노베이스인데 괜찮을까요?</h2>
                        <p>노베이스면 배우면 되죠! <br>부담가지지 말고 자유롭게 신청해주세요!<br>배움의 문은 누구에게나 열려있습니다!  </p>
                    </div>
                    <br>
                    <div class = "content">
                        <h2>디자인이 왜 이 모양이죠?</h2>
                        <p>죄송합니다! 제가 소질이 없습니다! <br>CONTACT 메뉴에서 자유롭게 피드백을 남겨주세요! </p>
                    </div>
                    <div class = "content">
                        <h2>후원은 언제나 환영입니다!</h2>
                        <p>더욱 원활한 서비스를 위해 서버작업에 총력을 가하고 있습니다.<br>하지만 서버비용과 개발 인력을 구하는건 금전적인 문제가 생깁니다.<br>도움을 주실 개발자분들이나 후원자분들의 연락을 기다립니다.</p>
                    </div>
                </div>
            </div>
            <br>



        </div>





    </body>
</html>
