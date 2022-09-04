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
				<h7 class="text-muted text-center"> มหาวิทยาลัยมันตราธินี | แผนที่ภายในมหาวิทยาลัย </h7>
			</div>
		<div class="row">
<!-- 			<div class="col-md-2">
				
			</div> -->
			<div class="col">
				<img src="pic/College_Map.png" width="300px" height="500px" class="rounded mx-auto d-block">
				<div class="row g-0">
					<div class="col">
						<p> 1. อาคารหอประชุมรวมธนิวัฒน์ </p> 
						<p> 2. ศูนย์โรงพยาบาลมันธานี และ อาคาคณะวิทย์สุขภาพ </p>
						<p> 3. อาคารพิบูลย์นรงค์ คณะนิติศาสตร์ </p>
						<p> 4. อาคารพิวัลย์นรงค์ คณะรัฐศาสตร์ </p>
						<p> 5. โดมกิจกรรมเพชรรังสิมันต์ </p> 
						<p> 6. อาคารชไล คณะวิศวกรรมศาสตร์ </p>
						<p> 7. อาคารคนางค์ คณะสถาปัตยกรรม </p>
						<p> 8. อาคารบัวตอง คณะศิลปศาสตร์ </p>
						<p> 9. อาคารบัวมาศ คณะศิลปกรรม </p>
						<p> 10. อาคารบัวบุญ วิทยาลัยดนตรี </p>
					</div>
					<div class="col">

					</div>
					<div class="col">
						<p> 11. อาคารวิมารมาศ อาคารพักผ่อน </p> 
						<p> 12. หอพักชายนเรศ </p>
						<p> 13. หอพักหญิงนรีย์ </p>
						<p> 14. อาคารญาริน วิทยาลัยประกอบการ </p>
						<p> 15. โอาคารไตรทิพย์ คณะบริหารธุรกิจ </p> 
						<p> 16. อาคารนวลอิง คณะนิเทศศาสตร์ </p>
						<p> 17. อาคารไลลา คณะเศรษฐศาสตร์ </p>
						<p> 18. ตึกอธิการบดี ธีรินทร์ </p>
						<p> 19. ร้านคาเฟ่ coffee & co </p>
						<p> 20. โบสถ์ประจำมหาวิทยาลัย </p>
					</div>
				</div>
			</div>
<!-- 			<div class="col-md-2">
				
			</div> -->
		</div>
	</div>

    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>