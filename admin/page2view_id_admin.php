<head>
<title>page2view_id.php</title>
<meta charset="utf-8">
<link href="../css/index_body_admin.css" rel="stylesheet">
<link href="../css/main_header_menu_search.css" rel="stylesheet">
<link href="../css/page2view_id_body.css" rel="stylesheet">
<link href="../css/page2view_id_ForMainTitle.css" rel="stylesheet">
<link href="../css/page2view_id_CpuGraph.css" rel="stylesheet">
<link href="../css/page0_body_total.css" rel="stylesheet">
<!--page2view_id 처럼 통합 필요 : version2-line_spec-chart_div 로-->
<link href="../css/page2view_id_body_DeviceToManf.css" rel="stylesheet">
<link href="../css/page2view_id_spec/id_device.css" rel="stylesheet">
<link href="../css/page2view_id_spec/release_device.css" rel="stylesheet">
<link href="../css/page2view_id_spec/type_device.css" rel="stylesheet">
<link href="../css/page2view_id_spec/name_device.css" rel="stylesheet">
<link href="../css/page2view_id_spec/manf_device.css" rel="stylesheet">
<link href="../css/main_header_admin.css" rel="stylesheet">
<!--page2view_id 처럼 통합 필요 : version2-line_spec-chart_div 로-->

<link href="../css/page2view_id_body_modify.css" rel="stylesheet">
</head>


<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/admin/main_header_admin.php'; ?>

<?php

    if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
		$id_device = $_GET["id_device"];
	else 
		$id_device = "";

		// DB 접속
	$sql997 = "select * from mdl where id_device=$id_device";	// 레코드 검색
	$result997 = mysqli_query($con, $sql997);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result997);			// 레코드 가져오기

    $id_device= $row["id_device"];		
    $type_device  = $row["type_device"];	
    $name_device  = $row["name_device"];	
    $manf_device  = $row["manf_device"];	
    $cpu_device  = $row["cpu_device"];	
    $lineup_device  = $row["lineup_device"];	
    $release_device  = $row["release_device"];	
    $weight_device  = $row["weight_device"];	
    $diagonal_device  = $row["diagonal_device"];	
    $choice_device  = $row["choice_device"];

    

?>	




<div class="ground"><!--div class="ground"-->
<div class="index_content" style="margin-top:70px;"><!--div class="index_content"-->
<div class="index_button_line1"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->









<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->






    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">







            <div class="Module_Layout_1_1_1_1_1" style="height:120px;">







                    <div class="module1_ForMainTitle">
                    <div class="module3_ForMainTitle" >



                                        <div class="page2view_id_body_title_ForMainTitle">
                                        <div class="Module_Layout_1_1_1_1_0" style="margin-left:10px; margin-top:6px; margin-right: 6px; width:38px !important;">
                                            <a style="font-size:18px;">D2</a>                                   
                                            </div>
                                            <div class="page2view_id_body_title_part1_ForMainTitle_Total">

                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: white !important;">디바이스 상세정보</a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: white !important;"><?=$release_device?></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: white !important;"><?=$manf_device?></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: white !important;"><?=$name_device?></a>
                                            </div>
                                            <div class="Module_Layout_1_1_1_1_2_back_view" onclick="history.back()"><a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a></div>
                                        </div>




                                        <div class="page2view_id_body_title_ForMainTitle" >


                                            <div class="page2view_id_body_title_part2_ForMainTitle">
                                                <div class="page2view_id_body_title_part2_name_device_ForMainTitle"><a><?php echo $name_device?></a></div>
                                            </div>


                                           <div class="page2view_id_body_title_part4_ForMainTitle">
                                         
                                    
                                        
                                            </div>

                                        </div>

        

                    </div>
                    </div>


                   



            </div>








            <div class="Module_Layout_1_1_1_1_2">
                <a class = "Module_Layout_1_1_1_1_1_0"></a>                            
            </div>





        </div>
    </div>





















<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1" style="background-color:white; border-bottom-left-radius:8px; border-bottom-right-radius:8px;"><!--div class="Module_Layout_1_1_2_1"-->

            <div class="Module_Layout_1_1_2_1_1"> 

            </div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1_start_page2view_id" ><!--모듈1-Start-->

























	
<!--내용-->

























<div class="module_name1">
<div class="module_name2">

<div class="page2view_id_body_content_outer_title_moduleName1">
   <a>디바이스 기본 정보</a>
</div>
<div class="page2view_id_body_content_outer_title_moduleName2">
   
</div>
<div class="page2view_id_body_content_outer_title_moduleName3_admin">
<button type="save_button_admin_page2" class="save_button_admin_page2" onclick="location.href='./page2view_id_admin_modify.php?id_device=<?=$id_device?>'">
    <a href ="./page2view_id_admin_modify.php?id_device=<?=$id_device?>">
        <a>수정</a></a></button>
</div>

</div>
</div> 









<div class="module1">
<div class="module2">  
<div class="module3">

<div class="module_spec_device" >
  

       <div class="module_spec_device_version2">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_spec/ManfGraph_id_device.php');?>
        </div>

        <div class="module_spec_device_version2">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_spec/CpuGraph_id_device.php');?>
        </div>

        <div class="module_spec_device_version2">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_spec/TypeGraph_id_device.php');?>
        </div>

        <div class="module_spec_device_version2">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_spec/ReleaseGraph_id_device.php');?>
        </div>

        <div class="module_spec_device_version2">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_spec/DiagnoalGraph_id_device.php');?>
        </div>

        <div class="module_spec_device_version2">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_spec/WeightGraph_id_device.php');?>
        </div>

 

   

        


</div>

</div>
</div>
</div>






<div class="module_name1">
<div class="module_name2">

<div class="page2view_id_body_content_outer_title_moduleName1">
    <a><?=$manf_device?> (<?=$release_device?>) 탑재 프로세서</a>
</div>
<div class="page2view_id_body_content_outer_title_moduleName2">

</div>
<div class="page2view_id_body_content_outer_title_moduleName3">
<a class="page2view_id_body_content_outer_title_moduleName3_text">유사한 라인업에 탑재된 프로세서를 확인하세요.</a>
</div>

</div>
</div> 





<div class="module1">
<div class="module2">  
<div class="module3">

<?php require $_SERVER['DOCUMENT_ROOT'].'/action/(MDL_MANF_manf_device)WITH(MDL_MANF_id_device_release_device)_CREATE.php';?>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_cpuCount/CpuGraph_MDL_MANF_cpuCount.php');?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/action/(MDL_MANF_manf_device)WITH(MDL_MANF_id_device_release_device)_DROP.php';?>

</div> 
</div>
</div>  





<div class="module_name1">
<div class="module_name2">

<div class="page2view_id_body_content_outer_title_moduleName1">
    <a><?=$lineup_device?> (<?=$release_device?>) 라인업</a>
</div>
<div class="page2view_id_body_content_outer_title_moduleName2">

</div>
<div class="page2view_id_body_content_outer_title_moduleName3">
<a class="page2view_id_body_content_outer_title_moduleName3_text">해당 디바이스와 유사한 라인업을 살펴보세요.</a>
</div>

</div>
</div> 











<div class="module1">
<div class="module2">  
<div class="module3">

<?php require $_SERVER['DOCUMENT_ROOT'].'/page2/page2view_id_YearLineup/page2view_id_body_DeviceToYearLineup.php';?>

</div>   
</div>
</div>
























 



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