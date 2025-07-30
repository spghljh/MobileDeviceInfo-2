<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
    if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
		$id_device = $_GET["id_device"];
	else 
		$id_device = "";

		/*
        echo "id_device=$id_device";
        echo "</br>";
		*/


	$sql912 = "select * from mdl where id_device='$id_device'";	// 레코드 검색
	$result912 = mysqli_query($con, $sql912);		// SQL 명령 실행

	$row = mysqli_fetch_assoc($result912);			// 레코드 가져오기

	$id_device= $row["id_device"];		
    $name_device  = $row["name_device"];	
    $manf_device  = $row["manf_device"];


    $type_device  = $row["type_device"];
    $cpu_device  = $row["cpu_device"];	

    $lineup_device  = $row["lineup_device"];	
    $release_device  = $row["release_device"];	
    $weight_device  = $row["weight_device"];	
    $diagonal_device  = $row["diagonal_device"];	
    $choice_device  = $row["choice_device"];
?>	


<?php


/*
          
    echo "core=$core";
    echo "</br>";
*/

$nameDevice   = $_POST["nameDevice"];
$cpu   = $_POST["cpu"];
$type   = $_POST["type"];
$manf   = $_POST["manf"];
$release   = $_POST["release"];
$diagonal   = $_POST["diagonal"];  
$weight   = $_POST["weight"];  


$sql731 = "UPDATE MDL SET manf_device='$manf' WHERE id_device = '$id_device';";	// 레코드 검색
$result731 = mysqli_query($con, $sql731);		// SQL 명령 실행

$sql734 = "UPDATE MDL SET name_device='$nameDevice' WHERE id_device = '$id_device';";	// 레코드 검색
$result734 = mysqli_query($con, $sql734);		// SQL 명령 실행

$sql926= "UPDATE MDL SET cpu_device='$cpu' WHERE id_device = '$id_device';";	// 레코드 검색
$result926 = mysqli_query($con, $sql926);		// SQL 명령 실행

$sql9270= "UPDATE MDL SET type_device='$type' WHERE id_device = '$id_device';";	// 레코드 검색
$result9270 = mysqli_query($con, $sql9270);		// SQL 명령 실행

$sql925 = "UPDATE MDL SET release_device=$release WHERE id_device = '$id_device';";	// 레코드 검색
$result925 = mysqli_query($con, $sql925);		// SQL 명령 실행

$sql924 = "UPDATE MDL SET diagonal_device=$diagonal WHERE id_device = '$id_device';";	// 레코드 검색
$result924 = mysqli_query($con, $sql924);		// SQL 명령 실행

$sql922 = "UPDATE MDL SET weight_device=$weight WHERE id_device = '$id_device';";	// 레코드 검색
$result922 = mysqli_query($con, $sql922);		// SQL 명령 실행




    // 로그인 폼으로 이동
    echo "<script>
	          location.href = './page2view_id_admin.php?id_device=$id_device';
	      </script>";


?>
  
