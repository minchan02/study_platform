<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="humclass.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>인문학 스터디</title>
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
        <h2><b>독서 | Reading</b></h2>
        </center>
        <br><br>
        <hr>
    </div>
    <br><br>
    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1><br>하루 독서</h1><br><h2>정지수<br>20명 / 오픈카톡</h2></center>
            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    혼자 책 읽기 심심하신 분! 끈기가 부족해서 누군가와 함께 독서하고 싶으신 분! 책을 읽고 싶지만 어떤 책을 읽어야할지 모르겠다 하시는 분! 모두 환영합니당 :)<br>참여코드 : 210121

                </p><br>
                <div class="wrapper">
                    <div class="btn">
                        <button type = "button" onclick="isShow('https://open.kakao.com/o/gqwW5xSc')">신청하기</button>
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
