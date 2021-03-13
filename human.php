<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="hum-style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humanities Study Group</title>
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
            <li><a href="science.php">sci</a></li>
            <li><a href="lang.php">lan</a></li>
            <li><a href="human.php"><u>Hum</u></a></li>
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
    <h2><i><b>Warm Heart</b></i></h2>
    </center>
    <br><br>
    <hr>






    <br><br><br>
    <div class = "card">
        <h1>역사</h1>
        <div class = "content">
            <h2>History</h2><!--그룹명-->
            <p> 역사를 잊은 민족에게<br> 미래는 없다 <br> - 단재 신채호 -  </p>

            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='history.php'">신청하기</button>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class = "card">
        <h1>말하기</h1>
        <div class = "content">
            <h2>Speaking</h2><!--그룹명-->
            <p> 귀를 훔치지 말고<br> 가슴을 흔드는 말을 해라. <br> - 유재석 -  </p>

            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='speak.php'">신청하기</button>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class = "card">
        <h1>독서</h1>
        <div class = "content">
            <h2>Reading</h2><!--그룹명-->
            <p>사람은 책을 만들고,  <br>책은 사람을 만든다 <br> - 신용호 -</p>
            <div class="wrapper">
                <div class="btn">
                    <button type = "button" onclick="location.href='book.php'">신청하기</button>
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
