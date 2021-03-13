<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="langclass.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영어 스터디</title>
</head>
<script>
    function isShow(link){
        if(confirm("신청하시겠습니까?")){
            open(link)
        }else{
            alert('취소되었습니다.');
        }
    }
</script>
<script>
    document.addEventListener("touchstart", function() {}, true);
</script>

<body>

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
        <h2><b>영어 | English</b></h2>
        </center>
        <br><br>
        <hr>
    </div>
    <br><br>


    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1><br>신재훈 영어회화</h1><br><h2>21학번 컴공과 신재훈<br>6명 / 비대면</h2></center>
            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    실생활에서 사용할만한 영어회화 문장, 표현등을 연습합니다.<br>
                    책이나 영상매체를 통해 공부하고 서로서로 자유롭게 활용할 예정입니다.
                    <br>코로나가 진정되면 대면으로 만나서 스터디를 진행할 계획입니다!

                </p><br>
                <div class="wrapper">
                    <div class="btn">
                        <button type = "button" onclick="isShow('https://open.kakao.com/o/grQnTrSc')">신청하기</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1><br>자연캠퍼스 토익 시작반</h1><br><h2>21학번 건축학부 장동학<br>4명 / 인천</h2></center>
            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    5인 이상 집합금지 관계로 4명으로 시작합니다.<br>
                    활동장소 1순위: 인천, 2순위: 자연캠, 3순위: 비대면<br>
                    다 같이 편하게 공유하며 공부 할 사람 모두 환영합니다!

                </p><br>
                <div class="wrapper">
                    <div class="btn">
                        <button type = "button" onclick="isShow('https://open.kakao.com/o/suPutDRc')">신청하기</button>
                    </div>
                </div>

            </div>

        </div>
    </div>







    <hr><br>
    <center><i><u><h5>
        dding_study <br>
        Contact : <a href="ddingstudy02@gmail.com">ddingstudy02@gmail.com</a><br>
        <br>

    </h5></u></i></center>


</body>
</html>
