<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php

$sql111 = " DROP TABLE MDL_".$id_cpu." ";	// 레코드 검색
$sql222 = " DROP TABLE MDL_MANF_".$id_cpu." ";	// 레코드 검색
$result = mysqli_query($con, $sql111);	
$result = mysqli_query($con, $sql222);		
$con->close();
?>