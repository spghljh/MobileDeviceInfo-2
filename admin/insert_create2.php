<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
        		// DB 연결
        $sql = "SELECT * FROM mdl";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
        $total_record = mysqli_num_rows($result); // 전체 글 수


        $total_record2   = $total_record + 1;
?>



<?php

    $type_device_post   = $_POST["type_device_post"];
    $name_device_post   = $_POST["name_device_post"];
    $cpu_device_post   = $_POST["cpu_device_post"];
    $release_device_post   = $_POST["release_device_post"];
    $diagonal_device_post   = $_POST["diagonal_device_post"];
    $weight_device_post   = $_POST["weight_device_post"];
    $manf_device_post   = $_POST["manf_device_post"];

      // DB 접속

	$sql = "insert into mdl (id_device, type_device, release_device, name_device, manf_device, cpu_device, lineup_device, weight_device, diagonal_device, choice_device) ";    // 데이터 삽입 명령
	$sql .= "values('$total_record2', '$type_device_post', '$release_device_post', '$name_device_post', '$manf_device_post', '$cpu_device_post', '', '$weight_device_post', '$diagonal_device_post', '0' )";       

	mysqli_query($con, $sql);       // SQL 명령 실행
 



?>




<?php
    if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
		$id_device = $_GET["id_device"];
	else 
		$id_device = "9876";

		/*
        echo "id_device=$id_device";
        echo "</br>";
		*/

		// DB 접속
	$sql911 = "select * from mdl where name_device='$name_device_post'";	// 레코드 검색
	$result911 = mysqli_query($con, $sql911);		// SQL 명령 실행

	$row = mysqli_fetch_assoc($result911);			// 레코드 가져오기
    $id_device= $row["id_device"];		
    $type_device  = $row["type_device"];	
    $name_device  = $row["name_device"];	
    $manf_device  = $row["manf_device"];	
    $cpu_device  = $row["cpu_device"];	

    $lineup_device  = $row["lineup_device"];	
    $release_device  = $row["release_device"];	

    $weight_device  = $row["weight_device"];	
    $diagonal_device  = $row["diagonal_device"];	

    $choice_device  = $row["choice_device"];




        echo "<script>
	          location.href = '../admin/page2view_id_admin.php?id_device=$id_device';
	      </script>";
?>	