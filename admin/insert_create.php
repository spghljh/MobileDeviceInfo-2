<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
        		// DB 연결
        $sql = "SELECT * FROM mcl";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
        $total_record = mysqli_num_rows($result); // 전체 글 수


        $total_record2   = $total_record + 1;
?>



<?php
    $name_cpu_post   = $_POST["name_cpu_post"];
    $manf_cpu_post   = $_POST["manf_cpu_post"];
    $release_cpu_post   = $_POST["release_cpu_post"];
    $core_cpu_post   = $_POST["core_cpu_post"];
    $thread_cpu_post   = $_POST["thread_cpu_post"];
    $maxghz_cpu_post   = $_POST["maxghz_cpu_post"];
    $minghz_cpu_post   = $_POST["minghz_cpu_post"];

      // DB 접속

	$sql = "insert into mcl (id_cpu, name_cpu, manf_cpu, release_cpu, core_cpu, thread_cpu, maxghz_cpu, minghz_cpu, choice_cpu) ";    // 데이터 삽입 명령
	$sql .= "values('$total_record2', '$name_cpu_post', '$manf_cpu_post', '$release_cpu_post', '$core_cpu_post', '$thread_cpu_post', '$maxghz_cpu_post', '$minghz_cpu_post', '0' )";       

	mysqli_query($con, $sql);       // SQL 명령 실행




?>




<?php
    if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
		$id_cpu = $_GET["id_cpu"];
	else 
		$id_cpu = "9876";

		/*
        echo "id_cpu=$id_cpu";
        echo "</br>";
		*/

		// DB 접속
	$sql911 = "select * from mcl where name_cpu='$name_cpu_post'";	// 레코드 검색
	$result911 = mysqli_query($con, $sql911);		// SQL 명령 실행

	$row = mysqli_fetch_assoc($result911);			// 레코드 가져오기
	$id_cpu= $row["id_cpu"];		
	$name_cpu  = $row["name_cpu"];	

	$manf_cpu  = $row["manf_cpu"];
	$release_cpu  = $row["release_cpu"];
	$core_cpu  = $row["core_cpu"];	
    $thread_cpu  = $row["thread_cpu"];
	$maxghz_cpu  = $row["maxghz_cpu"];	
	$minghz_cpu  = $row["minghz_cpu"];	

    $choice_cpu  = $row["choice_cpu"];




        echo "<script>
	          location.href = '../admin/page1view_id_admin.php?id_cpu=$id_cpu';
	      </script>";
?>	