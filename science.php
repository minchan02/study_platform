<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="sci-style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Study Group</title>
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

    <hr><br><br><center>
    <h2><i><b>Idealistic explorers</b></i></h2>
    </center>
    <br><br>
    <hr>






    <br><br><br>
    <div class = "card">
        <h1>자연과학</h1>
        <div class = "content">
            <h2>Science</h2><!--그룹명-->
            <p> 어려워서 시작하지 않는게 아니라<br> 그냥 안해서 어려운 것이다. <br> - 아인슈타인 -  </p>

            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='puresci.html'">신청하기</button>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class = "card">
        <h1>응용과학<br>공학</h1>
        <div class = "content">
            <h2>Engineering</h2><!--그룹명-->
            <p>돈은 나의 관심사가 아닙니다. <br> 난 인류가 더 나은 삶을 살기 원합니다. <br>- 니콜라 테슬라 -</p>
            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='engineer.html'">신청하기</button>
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
