<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="wrap">
      <form action="join_action.php" method="post">
        <h2>SignUp</h2>
		<u>
			<input type="text" name="name" placeholder="회원명" required>
      <input type="text" name="major" placeholder="전공명" required>
      <input type="text" name="school_number" placeholder="학번" required>
			<input type="email" name="email" placeholder="이메일" required>
			<input type="tel" name="contact" placeholder="연락처 번호" required>
			<input type="password" name="password" placeholder="비밀번호" required>
			<input type="password" name="confirm_password" placeholder="비밀번호 확인" required>
		</u>
        <br>
        <input type="checkbox" required>이용약관을 읽었으며 이에 동의합니다.
        <br>
        <input type="submit" value="회원가입" class="btn btn-primary">
        <center>
			<button type = "button" onclick="location.href = 'index.php'" class="input">뒤로가기</button>		 </center>



      </form>

    </div>
  </body>
</html>
