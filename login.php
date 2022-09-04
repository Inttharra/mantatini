<?php
	include 'php/server.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mantatini University</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'php/navbar.php'; ?>

	<div class="container">
		<img src="pic/pin.png" width="100px" height="100px" class="rounded mx-auto d-block">
			<div class="row">
				<h5 class="text-center"> Mantatini University </h5>
				<h7 class="text-muted text-center"> มหาวิทยาลัยมันตราธินี </h7>
			</div>
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<div class="card my-3">
					<div class="card-header text-center">
						นิสิตเข้าสู่ระบบ
					</div>
					<div class="card-body">
						<form method="POST" action="php/login_student.php">
							<label>เลขประจำตัวนิสิต</label>
							<input type="text" name="student_id" placeholder="ใส่เลขประจำตัวนิสิต" required class="form-control mb-2">
							<label>รหัสผ่าน</label>
							<input type="password" name="password" placeholder="ใส่รหัสผ่านของตัวนิสิต" required class="form-control mb-2">
							<button class="btn btn-success w-100">เข้าสู่ระบบ</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</div>

    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>