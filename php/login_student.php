<?php
	include 'server.php';

	$student_id = $_POST['student_id'];
	$password = $_POST['password'];

	$querylogin = "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password'";
	$resultlogin = mysqli_query($connect, $querylogin) or die('please try');

	while ($row = $resultlogin->fetch_assoc()) {
		$_SESSION['student_id'] = $row['student_id'];
		$_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
	}
	if (mysqli_num_rows($resultlogin)) {
        echo "<script>alert('ยินดีต้อนรับนิสิตเข้าสู่ระบบ'); window.location = '../index.php'</script>";
    } else {
        echo "<script>alert('เลขประจำตัว หรือ รหัสผ่านของนิสิตไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง'); window.location = '../login.php'</script>";
    }
?>