<?php
	include "./lib.php";
	if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
	<div class="find">
		<form method="post" action="member_update.php">
			<?php
				$sql = mq("select * from usertable where email='{$_SESSION['email']}'");
				while($member = $sql->fetch_array()){
					?>
			<h1>내 정보</h1>
			<p><a href="index.php">홈으로</a></p>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
							<tr>
								<td>이메일</td>
								<td><input type="text" size="35" name="email" value="<?php echo $_SESSION['email'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="password" placeholder="비밀번호"></td>
							</tr>
							<tr>
								<td>이름</td>
								<td><input type="text" size="35" name="name" placeholder="이름" value="<?php echo $member['name']; ?>"></td>
							</tr>
							<tr>
								<td>연락처</td>
								<td><input type="text" size="35" name="contact" placeholder="연락처" value="<?php echo $member['contact']; ?>"></td>
							</tr>
							<tr>
								<td>학과</td>
								<td><input type="text" size="35" name="major" placeholder="학과" value="<?php echo $member['major']; ?>"></td>
							</tr>
							<tr>
								<td>학번</td>
								<td><input type="text" size="35" name="school_number" placeholder="학번" value="<?php echo $member['school_number']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="정보변경" />
			</fieldset>
			<?php } ?>
		</form>
	</div>
</body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
