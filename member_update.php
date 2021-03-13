<meta charset="utf-8" />
<?php

include "./lib.php";
include "./password.php";

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$name = $_POST['name'];
$contact = $_POST['contact'];
$major = $_POST['major'];
$school_number = $_POST['school_number'];

$sql = mq("update usertable set password='".$password."', name='".$name."', contact='".$contact."',major='".$major."', school_number='".$_POST['school_number']."' where email='".$_SESSION['email']."'");
echo "<script>alert('정보변경이 완료되었습니다 	'); history.back();</script>";

?>
