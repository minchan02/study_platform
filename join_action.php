<meta charset="utf-8">
<?php
	include "./lib.php";
	include "./password.php";

	$name = $_POST['name'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$password2 = $_POST['password'];
	$contact = $_POST['contact'];
	$major = $_POST['major'];
	$school_number = $_POST['school_number'];
	$email = $_POST['email'];
	$confirm_password = $_POST['confirm_password'];

	$num = rowCount("select * from usertable where email = '{$email}'");
	access($password2 === $confirm_password, "비밀번호 확인이 잘못되었습니다.");
	access($num === 0, '이미 등록된 아이디입니다.');

$sql = query("insert into usertable (name,password,contact,major,school_number,email) values('".$name."','".$password."','".$contact."','".$major."','".$school_number."','".$email."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
