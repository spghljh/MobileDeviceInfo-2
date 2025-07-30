
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layer popup</title>
    <link href=".\index.css" type="text/css" rel=stylesheet>
</head>



<?php
    if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
		$id_cpu = $_GET["id_cpu"];
	else 
		$id_cpu = "";

  include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';
	$sql = "select * from mcl where id_cpu=$id_cpu";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
  $id_cpu        = $row["id_cpu"];		
	$name_cpu      = $row["name_cpu"];	
  $manf_cpu      = $row["manf_cpu"];	
?>	


<?php
    if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
		$id_cpu = $_GET["id_cpu"];
	else 
		$id_cpu = "";


?>	


<div class="run_div">


  <form class="run_form" method="post" >
  <img class="run_div_img" src="./aad.png">
    <input type="submit" name="test1" value="" class="run_input">
  </form>

</div>


<?php
if(array_key_exists('test1',$_POST)){






testfun(); // 해당 id_cpu의 choice_cpu 1 증가





echo "<script>
location.href = 'page1_Choice.php?id_cpu='+$id_cpu;
  </script>";
// page1_Choice.php : 사용자 세션에 추가하는 페이지











}
?>









<?php

function testfun()
{

if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
$id_cpu = $_GET["id_cpu"];
else 
$id_cpu = "";

include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';
$sql = "select * from mcl where id_cpu=$id_cpu";	// 레코드 검색
$result = mysqli_query($con, $sql);			// SQL 명령 실행

$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
$id_cpu        = $row["id_cpu"];		
$name_cpu      = $row["name_cpu"];	
$manf_cpu      = $row["manf_cpu"];	





$sql0 = "UPDATE mcl SET ";
$sql0 .= "choice_cpu = choice_cpu + 1 ";
$sql0 .= "WHERE id_cpu = $id_cpu;";

mysqli_query($con, $sql0);       // SQL 명령 실행

}

?>