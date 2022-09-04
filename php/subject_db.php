<?php
    include "server.php";
    
        $name = $_SESSION['student_id'];
        $price = $_POST['sub'];

        $queryadd = "INSERT INTO subject_register (subject_code, student_id) VALUES ('$price', '$name')";
        $resultadd = mysqli_query($connect, $queryadd) or die("try");
        
        if ($resultadd) {
            echo "<script>alert('เลือกวิชาเพิ่มเติมสำเร็จแล้ว!!'); window.location = '../subject.php'</script>";
        }

?>