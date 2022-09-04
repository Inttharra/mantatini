<?php
	include 'php/server.php';

	if (isset($_GET["logout"])) {
    session_destroy();
    echo "<script>alert('ไว้เจอกันใหม่นะคะ'); window.location = 'login.php'</script>";
  	}

  	if (!isset($_SESSION['firstname'])) {
  		echo "<script>alert('นิสิตกรุณาเข้าสู่ระบบ'); window.location = 'login.php'</script>";
  	}

  	//all
  $queryall = "SELECT * FROM subject";
  $resultall = mysqli_query($connect, $queryall);

//check reg
  $student_id = $_SESSION['student_id'];
  
  $register = "SELECT * FROM subject_register WHERE student_id = $student_id";
  $resultreg = mysqli_query($connect, $register);

  while ($row = $resultreg->fetch_assoc()) {
  	$_SESSION['subject_code'] = $row['subject_code'];
  }

  //subject code -> name
  $subject_code = $_SESSION['subject_code'];
  $queryname = "SELECT * FROM subject WHERE subject_code = $subject_code";
  $resultname = mysqli_query($connect, $queryname);

  if (mysqli_num_rows($resultname)) {
  	$name = mysqli_fetch_array($resultname);
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
				<h7 class="text-muted text-center"> มหาวิทยาลัยมันตราธินี | ลงทะเบียนวิชาเรียน </h7>
			</div>
		<div class="row">
<!-- 			<div class="col-md-2">
				
			</div> -->
	<div class="col">
				<div class="card mt-2">
				  <div class="card-header text-center">
				    ลงทะเบียนเลือกวิชาเพิ่มเติมเพิ่มเติม
				  </div>
				  <?php if (mysqli_num_rows($resultreg)) { ?>
				  <div class="card-body">
				  		<div> คุณ <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?> ได้ทำการเลือกวิชาเพิ่มเติมของวิชา
				  			<?php echo $name['subject_name'] ?>
				  		ไปแล้ว</div>
				  </div>
				  <?php } ?>
				<?php if (!mysqli_num_rows($resultreg)) { ?>
					<div class="card-body">
				    <div class="">เลือกวิชาลงทะเบียนเลือกวิชาเพิ่มเติม</div>
				    <form class="form mt-1" action="php/subject_db.php" method="POST">
				    	<select class="form-select" aria-label="Default select example" name="sub">
  							<option selected>เลือกวิชาเพิ่มเติม</option>
							    <?php
									while ($row = $resultall->fetch_assoc()) {
								?>
								<option value="<?php echo $row['subject_code'];?>"><?php echo $row['subject_name']?> </option>
								<?php } ?>
							</select>
				    	<button type="submit" name="submit" class="btn btn-success w-100 mt-2"> ยืนยัน </button>
				    </form>
				    </div>
				<?php } ?>
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