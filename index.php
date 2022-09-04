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
				<h7 class="text-muted text-center"> มหาวิทยาลัยมันตราธินี </h7>
			</div>
		<div class="row">
<!-- 			<div class="col-md-2">
				
			</div> -->
			<div class="col-md">
				<div class="card my-3">
				  <div class="card-body">
				    <h5 class="card-title">มหาวิทยาลัยมันตราธินี</h5>
				    <p class="card-text" style="font-size: 16px;">เป็นมหาวิทยาลัยเอกชนที่อุปถัมป์จากคณะภคิณีชั้นนำเป็นมหาวิทยาลัยระดับแนวหน้าของประเทศไทย ที่มีชื่อเสียง และได้รับการยอมรับจากสากล รวมถึงขึ้นชื่อว่า เป็นมหาวิทยาลัยที่ดีที่สุดติด TOP 100 ของมหาวิทยาลัยระดับโลก และเป็นมหาวิทยาลัยที่เปิดสอนในประเทศไทยแรกๆเป็นเวลายาวนานกว่าร้อยปี ที่นี่มีศิษย์ที่มีชื่อเสียงมากมายทั้งที่จบไปและยังศึกษาอยู่ในมหาวิทยาลัยแห่งนี้</p>
				    <p class="text-muted">อ้างอิงรูปจาก : Ruamrudee International School</p>
				  </div>
				  <img src="pic/12.png" class="card-img-bottom" alt="..." height="">
				</div>
			</div>
<!-- 			<div class="col-md-2">
				
			</div> -->
		</div>
	</div>

    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>