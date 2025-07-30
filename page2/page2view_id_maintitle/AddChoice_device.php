<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layer popup</title>
    <link href=".\index.css" type="text/css" rel=stylesheet>
</head>


<?php
if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
$id_device = $_GET["id_device"];
else 
$id_device = "";

include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';
$sql = "select * from mdl where id_device=$id_device";	// 레코드 검색
$result = mysqli_query($con, $sql);			// SQL 명령 실행
$row = mysqli_fetch_assoc($result);			// 레코드 가져오기

$id_device        = $row["id_device"];		
$name_device      = $row["name_device"];	
$manf_device      = $row["manf_device"];	
$cpu_device      = $row["cpu_device"];	

?>


<?php
    if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
		$id_device = $_GET["id_device"];
	else 
		$id_device = "";


?>	

<div class="run_div">


  <form class="run_form" method="post" >
  <img class="run_div_img" src="./aad.png">
    <input type="submit" name="test1" value="" class="run_input">
  </form>

</div>

 
<?php
if(array_key_exists('test1',$_POST)){






testfun(); // 해당 id_device의 choice_device 1 증가





echo "<script>
location.href = 'page2_Choice.php?id_device='+$id_device;
  </script>";
// page1_Choice.php : 사용자 세션에 추가하는 페이지











}
?>









<?php

function testfun()
{

if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
$id_device = $_GET["id_device"];
else 
$id_device = "";

include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';
$sql = "select * from mdl where id_device=$id_device";	// 레코드 검색
$result = mysqli_query($con, $sql);			// SQL 명령 실행

$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
$id_device        = $row["id_device"];		
$name_device      = $row["name_device"];	
$manf_device      = $row["manf_device"];	





$sql0 = "UPDATE mdl SET ";
$sql0 .= "choice_device = choice_device + 1 ";
$sql0 .= "WHERE id_device = $id_device;";

mysqli_query($con, $sql0);       // SQL 명령 실행

}

?>




