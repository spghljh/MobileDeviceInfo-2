<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
		$id_device = $_GET["id_device"];
	else 
		$id_device = "nonde";

		// DB 접속
	$sql = "select * from mdl where id_device=$id_device";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기

	$name_device  = $row["name_device"];	
    $type_device  = $row["type_device"];
	$id_device= $row["id_device"];	
	$manf_device  = $row["manf_device"];



	$cpu_device  = $row["cpu_device"];	

	$diagonal_device  = $row["diagonal_device"];
	$release_device  = $row["release_device"];	
	$weight_device  = $row["weight_device"];	
	$battery_device  = $row["battery_device"];	


    $choice_device  = $row["choice_device"];





      // DB 접속
    $sql = "DELETE FROM mdl WHERE id_device = $id_device";
	mysqli_query($con, $sql);       // SQL 명령 실행


	$sql112 ="set @cnt = 0;";
	$sql113 ="update mdl set mdl.id_device = @cnt:=@cnt+1;";
	mysqli_query($con, $sql112);       // SQL 명령 실행
	mysqli_query($con, $sql113);       // SQL 명령 실행
    mysqli_close($con);     


    // 로그인 폼으로 이동
    echo "<script>
	          location.href = './page2_list_admin.php';
	      </script>";






?>	

