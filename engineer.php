<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="scienceclass.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>화학 스터디</title>
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
        <h2><b>응용과학/공학 | Engineering</b></h2>
        </center>
        <br><br>
        <hr>
    </div>
    <br><br>

    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1>C/C++ 기초 스터디</h1><br><h2>21학번 컴공과 최효민<br>5명 / 디스코드</h2></center>
            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    플랫폼 개발자가 이끄는 기초 C/C++ 스터디입니다.<br> 개강전에 기초문법을 훑어보고 간단한 프로그램들을 만들어볼 예정입니다.<br>사이트 운영 때문에 빈도는 일주일에 2번 정도로 진행합니다

                    <br>
                </p><br>
                <div class="wrapper">
                    <div class="btn">
                        <button type = "button" onclick="isShow('https://open.kakao.com/o/ggaowBSc')">신청하기</button>
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
