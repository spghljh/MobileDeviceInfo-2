<head>
<title>page2.php</title>
<meta charset="utf-8">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
<link href="../css/page2_body.css" rel="stylesheet">
<link href="../css/page0_body_total.css" rel="stylesheet">
</head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/main_header.php';?>

<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" style="margin-top:30px;"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->



<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">
            <div class="Module_Layout_1_1_1_1_0"><a style="font-size:18px;">D1</a></div>
            <div class="Module_Layout_1_1_1_1_1"><a class = "Module_Layout_1_1_1_1_1_0_page">디바이스 목록</a></div>
            <div class="Module_Layout_1_1_1_1_2_back" onclick="history.back()"><a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a></div>
        </div>
    </div>

<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1"><!--div class="Module_Layout_1_1_2_1"-->


        <div class="Module_Layout_1_1_2_1_1" style="margin-left : 10px; margin-bottom:1px; margin-top:25px;"> 
        <a class="mdi_a" style="font-size : 30px !important;">MobileDeviceInfo</a><a style="font-size : 24px !important;">에서 제공하는</a><a class="mdi_a">디바이스 탐색</a><a style="font-size : 24px !important;">을 시작하세요.</a>
        </div>

        <div class="Module_Layout_1_1_2_1_1" style="margin-left : 40px; margin-top: 10px;">
        <a>디바이스의 제조사 분포를 확인하거나, 목록에서 직접 탐색할 수 있습니다.</a>
        </div>



<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1"><!--모듈1-Start-->

<!--내용-->

<div style="margin-left:40px;">
<?php include $_SERVER['DOCUMENT_ROOT'].'/page3/page3_mdi_module2.php';?>
</div>

<table class="cpulist_table_page2">
            <?php
          
            $sql = "select * from mdl order by id_device asc";		// 일련번호 내림차순 전체 레코드 검색
            $result = mysqli_query($con, $sql);			// SQL 명령 실행
            $total_record = mysqli_num_rows($result); // 전체 글 수
            for ($i=0; $i<$total_record; $i++) {
            mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
            $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기
            $id_device         = $row["id_device"];			// 일련번호
            $name_device        = $row["name_device"];		// 이름
            $manf_device        = $row["manf_device"];	
            $cpu_device        = $row["cpu_device"];
            $type_device        = $row["type_device"];	
            $release_device        = $row["release_device"];
            ?>

<tr class="SearchResult_Table_Row_page2">    

    <td>
        <div class="total1_image">
            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;"><a style="font-size:14px; color:white; width: 40px;">Dvic</a></div>
        </div>
    </td>

    <td>
        <div class="total1_type">
            <div class="total2_type"><a>디바이스</a></div>
        </div>
    </td>

    <td>
        <div class="total1_manf_image">
            <div class="total2_manf_image"><?php include "./perBrand.php"; ?></div>
        </div>
    </td>

    <td>
        <div class="total1_name_device">
            <div class="total2_name_device"><a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$name_device?></a></div>
        </div>
    </td>
   
    <td style="margin-left:-30px">
        <div class="total1_cpuindevice">
            <div class="total2_cpuindevice"><a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$cpu_device?></a></div>
        </div>
    </td>

</tr>

<?php
            }
           
            $select_query = "SELECT id_device, name_device FROM mdl";
            $result_set = mysqli_query($con, "SELECT id_device, name_device FROM mdl");
            mysqli_data_seek($result_set, 2);
            $row = mysqli_fetch_row($result_set);
            mysqli_close($con);
?>
</table>
<!--내용-->

</div><!--모듈1-End-->

</div><!--div class="Module_Layout_1_1_2_1_2_1"-->
</div><!--div class="Module_Layout_1_1_2_1_2"-->
</div><!--div class="Module_Layout_1_1_2_1"-->
</div><!--div class="Module_Layout_1_1_2"-->
</div><!--div class="Module_Layout_1_1"-->
</div><!--div class="Module_Layout_1"-->

</div><!--div class="button_content1"-->
</div><!--div class="index_button_line1"-->
</div><!--div class="index_content"-->
</div><!--div class="ground"-->