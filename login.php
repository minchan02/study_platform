<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
  </head>
  <body>
    <div align='center'>
        <span>로그인</span>

        <form method='post' action='login_action.php'>
                <p>EMAIL: <input name="email" type="text"></p>
                <p>PW: <input name="password" type="password"></p>
                <input type="submit" value="로그인">
        </form>
        <br />
        <button id="join" onclick="location.href='./join.php'">회원가입</button>

        </div>


  </body>
</html>
