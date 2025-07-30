<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php

    if (isset($_SESSION["id"])) 
        $id = $_SESSION["id"];
    else 
        $id = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";


?>


<?php

if (isset($_SESSION["userid"])) 
      $userid = $_SESSION["userid"];
      else 
      $userid = "";

      if (isset($_SESSION["username"])) 
      $username = $_SESSION["username"];
      else 
      $username = "";
    ?>



<?php


		// DB 연결
$sql1 = "select * from members where id='$userid' ";		// 일련번호 내림차순 전체 레코드 검색
$result1 = mysqli_query($con, $sql1);			// SQL 명령 실행  	
$row = mysqli_fetch_assoc($result1); // 하나의 레코드 가져오기


$id         = $row["id"];	
$pass         = $row["pass"];	
$name         = $row["name"];	
$email         = $row["email"];	
$data1_cpu         = $row["data1_cpu"];	
$data2_cpu         = $row["data2_cpu"];	
$data3_cpu         = $row["data3_cpu"];
$data4_cpu         = $row["data4_cpu"];	
$data5_cpu         = $row["data5_cpu"];


if ( !(empty("$data3_cpu")) ){
?>

<?php
    if (isset($_GET["name_cpu"]))				// $_GET["num"] : 레코드 번호
		$name_cpu = $_GET["name_cpu"];
	else 
		$name_cpu = "";

		// DB 접속
	$sql2 = "select * from mcl where name_cpu='$data3_cpu'";	// 레코드 검색
	$result2 = mysqli_query($con, $sql2);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result2);			// 레코드 가져오기
    $id_cpu        = $row["id_cpu"];		
	$name_cpu      = $row["name_cpu"];	
    $manf_cpu      = $row["manf_cpu"];	
    $core_cpu        = $row["core_cpu"];		
	$maxghz_cpu      = $row["maxghz_cpu"];	

?>	

<div class = "cpulist_per_user2_outer">
    <div class = "cpulist_per_user2_1">
                <div class = "info1">

                        <div class = "units4_image" style="width:50px; height:50px; margin-left : 30px; margin-right : 10px;">
                        <?php require $_SERVER['DOCUMENT_ROOT'].'/page1/percpuBrand.php';?>
                        </div>

                        <div class = "units4">
                        <a href="../page1/page1view_id.php?id_cpu=<?=$id_cpu?>"><?=$manf_cpu?></a>
                        </div>

                        <div class = "units1_cpu">
                        <a href="../page1/page1view_id.php?id_cpu=<?=$id_cpu?>"><?=$name_cpu?></a>
                        </div>

                        <div class = "units">
                        <a href="../page1/page1view_id.php?id_cpu=<?=$id_cpu?>"><?=$core_cpu?> 코어</a>
                        </div>

                </div>

                <div class = "info2">
        
                </div>
    </div>

    <div class = "cpulist_per_user2_2">
        <div class="delete_button">
            <a class = "delete_button_css" onclick="location.href='./delete_cpu_FromUserCPU_data3_cpu.php' ">삭제</a>
        </div>
    </div>

</div>

<?php
}   
?>	