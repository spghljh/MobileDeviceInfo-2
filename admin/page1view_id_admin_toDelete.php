<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
		$id_cpu = $_GET["id_cpu"];
	else 
		$id_cpu = "";

		// DB 접속
	$sql = "select * from mcl where id_cpu=$id_cpu";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
	$id_cpu= $row["id_cpu"];		
	$name_cpu  = $row["name_cpu"];	
	$manf_cpu  = $row["manf_cpu"];

	$core_cpu  = $row["core_cpu"];	
    $thread_cpu  = $row["thread_cpu"];
	$maxghz_cpu  = $row["maxghz_cpu"];	
	$minghz_cpu  = $row["minghz_cpu"];	

    $series_cpu  = $row["series_cpu"];	
    $generation_cpu  = $row["generation_cpu"];

    $choice_cpu  = $row["choice_cpu"];





      // DB 접속
    $sql = "DELETE FROM mcl WHERE id_cpu = $id_cpu";
	mysqli_query($con, $sql);       // SQL 명령 실행

	$sql112 ="set @cnt = 0;";
	$sql113 ="update mcl set mcl.id_cpu = @cnt:=@cnt+1;";
	mysqli_query($con, $sql112);       // SQL 명령 실행
	mysqli_query($con, $sql113);       // SQL 명령 실행
    mysqli_close($con);     


    // 로그인 폼으로 이동
    echo "<script>
	          location.href = './page1_list_admin.php';
	      </script>";






?>	

