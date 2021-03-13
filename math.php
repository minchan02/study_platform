<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="math-style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathmatics Study Group</title>
</head>
<script>
    document.addEventListener("touchstart", function() {}, true);
</script>

<body>

    <header>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="math.php"><u>mat</u></a></li>
            <li><a href="science.php">sci</a></li>
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
    <h2><i><b>Mathematicians</b></i></h2>
    </center>
    <br><br>
    <hr>






    <br><br><br>
    <div class = "card">
        <h1><i>고등수학</i></h1>
        <div class = "content">
            <h2>HIGH School Math</h2><!--그룹명-->
            <p>16 + 2 + 6 = ?
            </p>

            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='highmath.php'">신청하기</button>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class = "card">
        <h1>대학수학</h1>
        <div class = "content">
            <h2>University Math</h2><!--그룹명-->
            <p>지금껏 세상에서 고난을 겪고 <br> 노력을 하지 않은 천재는 없었다.
                <br>-아이작 뉴턴-</p>
            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='unimath.php'">신청하기</button>
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
