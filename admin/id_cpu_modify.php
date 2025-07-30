<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
    if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
		$id_cpu = $_GET["id_cpu"];
	else 
		$id_cpu = "9876";

		/*
        echo "id_cpu=$id_cpu";
        echo "</br>";
		*/

	$sql911 = "select * from mcl where id_cpu='$id_cpu'";	// 레코드 검색
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
?>	


<?php


/*
          
    echo "core=$core";
    echo "</br>";
*/





$nameCpu   = $_POST["nameCpu"];
$manf   = $_POST["manf"];
$release   = $_POST["release"];  
$core   = $_POST["core"];  
$thread   = $_POST["thread"];  
$maxghz   = $_POST["maxghz"];  
$minghz   = $_POST["minghz"];  


$sql730 = "UPDATE mcl SET name_cpu='$nameCpu' WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result730 = mysqli_query($con, $sql730);		// SQL 명령 실행

$sql9222 = "UPDATE mcl SET manf_cpu='$manf' WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result9222 = mysqli_query($con, $sql9222);		// SQL 명령 실행

$sql81 = "UPDATE mcl SET release_cpu=$release WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result81 = mysqli_query($con, $sql81);		// SQL 명령 실행

$sql91 = "UPDATE mcl SET core_cpu=$core WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result91 = mysqli_query($con, $sql91);		// SQL 명령 실행

$sql92 = "UPDATE mcl SET thread_cpu=$thread WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result92 = mysqli_query($con, $sql92);		// SQL 명령 실행

$sql93 = "UPDATE mcl SET maxghz_cpu=$maxghz WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result93 = mysqli_query($con, $sql93);		// SQL 명령 실행

$sql94 = "UPDATE mcl SET minghz_cpu=$minghz WHERE id_cpu = '$id_cpu';";	// 레코드 검색
$result94 = mysqli_query($con, $sql94);		// SQL 명령 실행

    // 로그인 폼으로 이동
    echo "<script>
	          location.href = './page1view_id_admin.php?id_cpu=$id_cpu';
	      </script>";


?>
  
