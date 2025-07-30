<head>
<title>page1view_id.php</title>
<meta charset="utf-8">
<link href="../css/all_admin.css" rel="stylesheet">
<link href="../css/page2view_id_body.css" rel="stylesheet">
<link href="../css/index_body_admin.css" rel="stylesheet">
<link href="../css/page2view_id_ForMainTitle.css" rel="stylesheet">
<link href="../css/page2view_id_body_modify.css" rel="stylesheet">
<link href="../css/page2view_id_body_CpuSpecToDevice.css" rel="stylesheet">
<link href="../css/main_header_admin.css" rel="stylesheet">
</head>




<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/admin/main_header_admin.php'; ?>



<?php

    if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
		$id_device = $_GET["id_device"];
	else 
		$id_device = "";

		// DB 접속
	$sql998 = "select * from mdl where id_device='$id_device' ";	// 레코드 검색
	$result998 = mysqli_query($con, $sql998);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result998);			// 레코드 가져오기

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
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: #6f6f6f !important;">디바이스 상세정보</a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color:rgb(255, 0, 170) !important;"><?=$release_device?></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color:rgb(255, 0, 170) !important;"><?=$manf_device?></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color:rgb(255, 0, 170) !important;"><?=$name_device?></a>
                                            </div>
                                            <div class="Module_Layout_1_1_1_1_2_back_view" onclick="history.back()"><a class = "Module_Layout_1_1_1_1_1_0">취소</a></div>
                                        </div>




                                        <div class="page2view_id_body_title_ForMainTitle" >


                                            <div class="page2view_id_body_title_part2_ForMainTitle" >
                                                <div class="page2view_id_body_title_part2_name_device_ForMainTitle" style="color:#3f3f3f;">
                                                    <a style="color:rgb(255, 0, 170) !important;">디바이스 정보 수정하기</a>
                                                </div>
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
        <button class="save_button_admin_page2" onclick="check_input_modify_device()"><a>저장</a></button>
    </div>

</div>
</div> 






<script>
                        function check_input_modify_device() {

                            if (!document.mdl.manf.value) {
                                <?php $manf=$manf_device; ?>
                                document.mdl.manf.value="<?=$manf?>";
                                document.mdl.submit();   
                                }

                            
                            if (!document.mdl.nameDevice.value) {
                                <?php $nameDevice=$name_device; ?>
                                document.mdl.nameDevice.value="<?=$nameDevice?>";
                                document.mdl.submit();   
                                }

                            if (!document.mdl.type.value) {
                                <?php $type=$type_device; ?>
                                document.mdl.type.value="<?=$type?>";
                                document.mdl.submit();   
                                }

                            if (!document.mdl.cpu.value) {
                                <?php $cpu=$cpu_device; ?>
                                document.mdl.cpu.value="<?=$cpu?>";
                                document.mdl.submit();   
                                }

                            if (!document.mdl.release.value) {
                                <?php $release=$release_device; ?>
                                document.mdl.release.value=<?=$release?>;
                                document.mdl.submit();   
                                }
                            if (!document.mdl.diagonal.value) {
                                <?php $diagonal=$diagonal_device; ?>
                                document.mdl.diagonal.value=<?=$diagonal?>;
                                document.mdl.submit();   
                                }
                            if (!document.mdl.weight.value) {
                                <?php $weight=$weight_device; ?>
                                document.mdl.weight.value=<?=$weight?>;
                                document.mdl.submit();   
                                }
                                document.mdl.submit();  
                        }

     
              
</script>




<div class="module1">
<div class="module2">  
<div class="module3">

<div class="module_spec_device" >

<form name="mdl" action="./id_device_modify.php?id_device=<?=$id_device?>" method="post"> 
  
    <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1_ProductDevice">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px; background-color:transparent;">
                                <a style="font-size:14px; color:white; width: 40px;">Dvic</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2_ProductDevice" ><div><a>명칭</a></div></div>

             

                        <div class="chart_div_image3_modify_ProductDevice" style="width:300px; justify-content:left;">
                            <div class="modify_box" style="width: 100%;">
                                <input class = "modify_input_box" type="text" name="nameDevice" placeholder="<?=$name_device?>">
                            </div>
                        </div>


                    
                        <div class="chart_div_graph_device_nochart_ProductDevice" style="width: 225px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu" >
                                    <a class="modify_guide_a2">명칭</a>
                                    <a class="modify_guide_a1">을 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:32px; font-size:14px; color:white !important;">텍스트</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>


        <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Mnf</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>제조사</a></div></div>

             

                        <div class="chart_div_image3_modify" style="width:135px; justify-content:left;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="manf" placeholder="<?=$manf_device?>">
                            </div>
                        </div>


                    
                        <div class="chart_div_graph_device_nochart" style="width: 390px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">제조사</a>
                                    <a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:183px; font-size:14px;">텍스트</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>





       <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">CPU</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>프로세서</a></div></div>

             

                        <div class="chart_div_image3_modify" style="width: 190px; justify-content:left;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="cpu" placeholder="<?=$cpu_device?>">
                            </div>
                        </div>


                    
                        <div class="chart_div_graph_device_nochart" style="width:335px; justify-content:left;">
        
                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">탑재된 프로세서</a>
                                    <a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:68px; font-size:14px;">텍스트</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>



        <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Type</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>기기 유형</a></div></div>

             

                        <div class="chart_div_image3_modify" style="width:135px; justify-content:left;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="type" placeholder="<?=$type_device?>">
                            </div>
                        </div>


                    
                        <div class="chart_div_graph_device_nochart" style="width: 390px;">
         
                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">기기 유형</a><a class="modify_guide_a1">을 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:44px;">laptop</a>
                                    <a class="modify_guide_a3" style="margin-left:7px; font-size:11px; margin-top:7px;">또는</a>
                                    <a class="modify_guide_a3" style="margin-left:5px;">smartphone</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>




        <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Rel</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>제품 출시</a></div></div>

                        <div class="chart_div_image3_modify">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="release" placeholder="<?=$release_device?>">
                            </div>
                        </div>

                        <div class="chart_div_image4" style="width:45px;"><div><a>년도</a></div></div>


                    
                        <div class="chart_div_graph_device_nochart" style="width:397px;">
      
                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">출시 연도</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:106px;">단위 :</a>
                                    <a class="modify_guide_a3" style="margin-left:5px;">4자리 연도</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>


        
        <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Dig</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>화면 크기</a></div></div>

                        <div class="chart_div_image3_modify">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="diagonal" placeholder="<?=$diagonal_device?>">
                            </div>
                        </div>

                        <div class="chart_div_image4" style="width:45px;"><div><a>인치</a></div></div>


                    
                        <div class="chart_div_graph_device_nochart" style="width:397px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">디스플레이 크기</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:100px;">단위 :</a>
                                    <a class="modify_guide_a3" style="margin-left:5px;">inch</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>

 
        
        <div class="module_spec_device_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">


                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Wgt</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>무게</a></div></div>

                        <div class="chart_div_image3_modify">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="weight" placeholder="<?=$weight_device?>">
                            </div>
                        </div>

                        <div class="chart_div_image4" style="width:45px;"><div><a>kg</a></div></div>


                    
                        <div class="chart_div_graph_device_nochart" style="width:397px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">무게</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:173px;">단위 :</a>
                                    <a class="modify_guide_a3" style="margin-left:12px;">kg</a>
                                </div>
                            </div>

                        </div>

                </div>   
            </div>
        </div>





        


</div>

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