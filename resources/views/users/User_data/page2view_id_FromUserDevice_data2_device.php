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

$data1_device         = $row["data1_device"];	
$data2_device         = $row["data2_device"];	
$data3_device         = $row["data3_device"];
$data4_device         = $row["data4_device"];	
$data5_device         = $row["data5_device"];

if ( !(empty($data2_device)) ){

?>

<?php
    if (isset($_GET["name_device"]))				// $_GET["num"] : 레코드 번호
		$name_device = $_GET["name_device"];
	else 
		$name_device = "";

		// DB 접속
	$sql3 = "SELECT * FROM mdl WHERE name_device='$data2_device'";	// 레코드 검색
	$result3 = mysqli_query($con, $sql3);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result3);			// 레코드 가져오기
    $id_device        = $row["id_device"];		
    $name_device      = $row["name_device"];	 
    $manf_device      = $row["manf_device"];	
    $cpu_device      = $row["cpu_device"];

?>	

<div class = "cpulist_per_user2_outer">
    <div class = "cpulist_per_user2_1">

                <div class = "info1">

                    <div class = "units4_image" style="width:50px; height:50px; margin-left : 30px; margin-right : 10px;">
                        <?php require $_SERVER['DOCUMENT_ROOT'].'/page2/perBrand.php';?>
                    </div>

                    <div class = "units4">
                        <a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$manf_device?></a>
                    </div>

                    <div class = "units1_device">
                        <a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$name_device?></a>
                    </div>

                    <div class = "units">
                        <a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$cpu_device?></a>
                    </div>

                </div>

                <div class = "info2">

                </div>
    </div>


    <div class = "cpulist_per_user2_2">

        <div class="delete_button">
            <a class = "delete_button_css" onclick="location.href='./delete_device_FromUserDevice_data2_device.php' ">삭제</a>
        </div>

    </div>

</div>


<?php
}   
?>	