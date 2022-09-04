<?php
	include 'php/server.php';

	if (isset($_GET["logout"])) {
    session_destroy();
    echo "<script>alert('ไว้เจอกันใหม่นะคะ'); window.location = 'login.php'</script>";
  }

  if (!isset($_SESSION['firstname'])) {
  		echo "<script>alert('นิสิตกรุณาเข้าสู่ระบบ'); window.location = 'login.php'</script>";
  	}
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
				<h7 class="text-muted text-center"> มหาวิทยาลัยมันตราธินี | กฎระเบียบของทางมหาลัย</h7>
			</div>
		<div class="row">
<!-- 			<div class="col-md-2">
				
			</div> -->
			<div class="col-md">
				<div class="my-3">
				  <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>1.สามารถทำสีผมและเเต่งชุดไปรเวทมาเรียนได้บางวิชา สามารถย้อมสีผม ทำสีเล็บ ได้ตาความเหมาะสม ยกเว้นคณะหมวดหมู่การแพทย์และวิทย์สุขภาพ</p>
		                	<!-- <img src="pic/pencil.png" width="50px" height="50px"> -->
		                </div>
		            </div>
		            <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>2.ห้ามกระทำการอนาจารภายในสถานศึกษา</p>
		                </div>
		            </div>
		            <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>3.ห้ามทำลายทรัพย์สินของทางมหาวิทยาลัย</p>
		                </div>
		            </div>
		            <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>4.ห้ามก่อเหตุทะเลาะวิวาทกันภายในสถานศึกษา</p>
		                </div>
		            </div>
		            <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>5.โปรดรักษาความสะอาดและช่วยดูแลความเรียบร้อยของมหาวิทยาลัย</p>
		                </div>
		            </div>
		            <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>6.ไม่อนุญาตให้นำสารเสพติดและแอลกอฮอล์มาในเขตมหาวิทยาลัย รวมถึงการพนันวางเงินในสถานศึกษา หรือในขณะที่ใส่ชุดที่มีตราหรือสัญลักษณ์นักศึกษาของมหาลัย</p>
		                </div>
		            </div>
		            <hr class="mb-5" />
		            <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
		                <div>
		                	<p>7.นักศึกษาสามารถนำรถยนต์ มอเตอร์ไซค์เข้ามาจอดภายในมหาวิทยาลัยได้ โดยจอดในที่ที่มหาวิทยาลัยกำหนดไว้ให้เท่านั้น เเละขอความร่วมมือในการรักษากฎจราจรอย่างเคร่งครัด</p>
		                </div>
		            </div>
		            <hr class="mb-5" />
				</div>
			</div>
<!-- 			<div class="col-md-2">
				
			</div> -->
		</div>
	</div>

    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>