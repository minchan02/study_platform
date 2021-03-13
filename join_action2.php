<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
		<?php
		include_once('./lib.php');

		extract($_POST);
		$num = rowCount("SELECT * from usertable where school_number = '{$school_number}' or email = '{$email}'");
		access($password === $confirm_password, "비밀번호 확인이 잘못되었습니다.");
		access($num === 0, "이미 등록된 회원입니다.");
		$sql = "
			INSERT INTO usertable SET
			name = '{$name}',
			email = '{$email}',
			contact = '{$contact}',
			password = md5('{$password}{$email}'),
			major = '{$major}',
			school_number = '{$school_number}'
		";
		query($sql); // query 함수에서 에러처리를 함
		alert('회원가입이 완료되었습니다.');
		move('./login.php');
		?>
</html>
