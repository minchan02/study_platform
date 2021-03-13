<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="lang-style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Study Group</title>
</head>
<script>
    document.addEventListener("touchstart", function() {}, true);
</script>

<script>
    function isShow(link){
        if(confirm("신청하시겠습니까?")){
            open(link)
        }else{
            alert('취소되었습니다.');
        }
    }
</script>
<body>

    <header>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="math.php">mat</a></li>
            <li><a href="science.php">sci</a></li>
            <li><a href="lang.php"><u>lan</u></a></li>
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
    <h2><i><b>The magician of language</b></i></h2>
    </center>
    <br><br>
    <hr>






    <br><br><br>
    <div class = "card">
        <h1>Hello</h1>
        <div class = "content">
            <h2>Perfect</h2>
            <p><i>
                Darling, you looked perfect tonight.

            </i></p>

            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='eng.php'">신청하기</button>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class = "card">
        <h1>Others</h1>
        <div class = "content">
            <h2>Global World</h2>
            <p>영어를 제외한 다른 언어를 학습하세요</p>
            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='otherlang.php'">신청하기</button>
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
