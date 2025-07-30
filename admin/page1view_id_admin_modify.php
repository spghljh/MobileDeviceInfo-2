


<head>
<title>page1view_id.php</title>
<meta charset="utf-8">
<link href="../css/page1view_id_body.css" rel="stylesheet">
<link href="../css/page1view_id_ForMainTitle.css" rel="stylesheet">
<link href="../css/page1view_id_body_CpuSpecToDevice.css" rel="stylesheet">
<link href="../css/index_body_admin.css" rel="stylesheet">
<link href="../css/main_header_admin.css" rel="stylesheet">
<link href="../css/page1view_id_body_modify.css" rel="stylesheet">

<link href="../css/all_admin.css" rel="stylesheet">
</head>





<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/admin/main_header_admin.php'; ?>





<?php
    if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
		$id_cpu = $_GET["id_cpu"];
	else 
		$id_cpu = "";

		// DB 접속
	$sql91 = "select * from mcl where id_cpu='$id_cpu'";	// 레코드 검색
	$result91 = mysqli_query($con, $sql91);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result91);			// 레코드 가져오기
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



                                        <div class="page1view_id_body_title_ForMainTitle" >
                                        <div class="Module_Layout_1_1_1_1_0" style="margin-left:10px; margin-top:6px; margin-right: 6px; width:38px !important;">
                                            <a style="font-size:18px;">P2</a>                                   
                                            </div>
                                            <div class="page1view_id_body_title_part1_ForMainTitle_Total" >
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: #6f6f6f !important;">프로세서 상세정보</a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color:rgb(255, 0, 170) !important;" ><?=$manf_cpu?></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color:rgb(255, 0, 170) !important;"><?=$name_cpu?></a>
                                            </div>
                                            <div class="Module_Layout_1_1_1_1_2_back_view" onclick="history.back()"><a class = "Module_Layout_1_1_1_1_1_0">취소</a></div>
                                        </div>




                                        <div class="page1view_id_body_title_ForMainTitle" >


                                            <div class="page1view_id_body_title_part2_ForMainTitle">
                                                <div class="page1view_id_body_title_part2_name_cpu_ForMainTitle">
                                                    <a style="color:rgb(255, 0, 170) !important;">프로세서 정보 수정하기</a>
                                                </div>
                                            </div>


                                            <div class="page1view_id_body_title_part4_ForMainTitle">
                                         
                          
                                        
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

<div class="Module1_start_page1view_id"><!--모듈1-Start-->

























	
<!--내용-->

 



    
<div class="module_name1">
<div class="module_name2">

    <div class="page1view_id_body_content_outer_title_moduleName1">
           <a>프로세서 기본 정보</a>
    </div>
    <div class="page1view_id_body_content_outer_title_moduleName2">
      
    </div>  
    <div class="page1view_id_body_content_outer_title_moduleName3_admin">
    <button class="save_button_admin_page1" onclick="check_input_modify()"><a>저장</a></button>
    </div>

</div>
</div> 






<script>
                        function check_input_modify() {
                            
                            if (!document.mcl.nameCpu.value) {
                                <?php $nameCpu=$name_cpu; ?>
                                document.mcl.nameCpu.value="<?=$nameCpu?>";
                                document.mcl.submit();   
                                }

                            if (!document.mcl.manf.value) {
                                <?php $manf=$manf_cpu; ?>
                                document.mcl.manf.value="<?=$manf?>";
                                document.mcl.submit();   
                                }

                            if (!document.mcl.release.value) {
                                <?php $release=$release_cpu; ?>
                                document.mcl.release.value=<?=$release?>;
                                document.mcl.submit();   
                                }


                            if (!document.mcl.core.value) {
                                <?php $core=$core_cpu; ?>
                                document.mcl.core.value=<?=$core?>;
                                document.mcl.submit();   
                                }

                            if (!document.mcl.thread.value) {
                                <?php $thread=$thread_cpu; ?>
                                document.mcl.thread.value=<?=$thread?>;
                                document.mcl.submit();   
                                }

                            if (!document.mcl.maxghz.value) {
                                <?php $maxghz=$maxghz_cpu; ?>
                                document.mcl.maxghz.value=<?=$maxghz?>;
                                document.mcl.submit();   
                                }
                                
                            if (!document.mcl.minghz.value) {
                                <?php $minghz=$minghz_cpu; ?>
                                document.mcl.minghz.value=<?=$minghz?>;
                                document.mcl.submit();   
                                }
                                document.mcl.submit();
                          
                        }

     
              
</script>








<div class="module1">
<div class="module2">  
<div class="module3">

<div class="module_spec_cpu">

<form name="mcl" action="./id_cpu_modify.php?id_cpu=<?=$id_cpu?>" method="post"> 
     
        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec" >   
                <div class="chart_div">

                        <div class="chart_div_image1_ProductCpu">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px; background-color:transparent;">
                                <a style="font-size:14px; color:white; width: 40px;">Proc</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2_ProductCpu"><div><a>명칭</a></div></div>

                        <div class="chart_div_image2_modify_ProductCpu" style="width : 139px;">
                            <div class="modify_box">
                                    <input class = "modify_input_box" type="text" name="nameCpu" placeholder="<?=$name_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_graph_core_cpu_ProductCpu" style="width : 380px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">명칭</a>
                                    <a class="modify_guide_a1">을 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:180px; color:white !important;">텍스트</a>
                                </div>
                            </div>

                        </div>
                                    
                </div>   
            </div>
        </div>

        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">


                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Mnf</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>제조사</a></div></div>

                        <div class="chart_div_image2_modify" style="width : 139px;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="manf" placeholder="<?=$manf_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_graph_core_cpu" style="width : 380px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">제조사</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a><a class="modify_guide_a3" style="margin-left:167px;">텍스트</a>
                                </div>
                            </div>

                        </div>
                                    
                </div>   
            </div>
        </div>

        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Rel</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>제품 출시</a></div></div>

                        <div class="chart_div_image2_modify" style="width : 80px;">
                            <div class="modify_box">
                                    <input class = "modify_input_box" type="text" name="release" placeholder="<?=$release_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_image4" style="width:30px;"><div><a>년</a></div></div>
                        <div class="chart_div_graph_core_cpu">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">출시 연도</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:105px;">단위 :</a>
                                    <a class="modify_guide_a3" style="margin-left:5px;">4자리 연도</a>
                                </div>
                            </div>

                        </div>
                                    
                </div>   
            </div>
        </div>




        
        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Core</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2"><div><a>코어 수</a></div></div>

                        <div class="chart_div_image2_modify">
                            <div class="modify_box">
                                    <input class = "modify_input_box" type="text" name="core" placeholder="<?=$core_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>코어</a></div></div>
                        <div class="chart_div_graph_core_cpu">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">코어 수</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:92px;">단위 : </a>
                                    <a class="modify_guide_a3" style="margin-left: 6px;">물리 코어</a>
                                    <a class="modify_guide_a3" style="margin-left:7px;">개수</a>
                                </div>
                            </div>

                        </div>
                                    
                </div>   
            </div>
        </div>




        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">


                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Thrd</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>스레드 수</a></div></div>

                        <div class="chart_div_image2_modify">
                            <div class="modify_box">
                                    <input class = "modify_input_box" type="text" name="thread" placeholder="<?=$thread_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>스레드</a></div></div>
                        <div class="chart_div_graph_core_cpu">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">스레드 수</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:79px;">단위 :</a>
                                    <a class="modify_guide_a3" style="margin-left:6px; font-size:12px;">가상 스레드</a>
                                    <a class="modify_guide_a3" style="margin-left:4px;">개수</a>
                                </div>
                            </div>

                        </div>
                                    
                </div>   
            </div>
        </div>



        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">


                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Max</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>최고 속도</a></div></div>

                        <div class="chart_div_image2_modify">
                            <div class="modify_box">
                                    <input class = "modify_input_box" type="text" name="maxghz" placeholder="<?=$maxghz_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>Ghz</a></div></div>
                        <div class="chart_div_graph_core_cpu">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">최고 속도</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                    <a class="modify_guide_a3" style="margin-left:144px;">단위 :</a>
                                    <a class="modify_guide_a3" style="margin-left:5px;">Ghz</a>
                                </div>
                            </div>

                        </div>
                                    
                </div>   
            </div>
        </div>
                
        
        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                                <a style="font-size:14px; color:white; width: 40px;">Min</a>                                   
                            </div>
                        </div>

                        <div class="chart_div_image2" ><div><a>기본 속도</a></div></div>

                        <div class="chart_div_image2_modify">
                            <div class="modify_box">
                                    <input class = "modify_input_box" type="text" name="minghz" placeholder="<?=$minghz_cpu?>">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>Ghz</a></div></div>
                        <div class="chart_div_graph_core_cpu">

                        <div class="chart_div_core_modify">
                            <div class="modify_guide_div_cpu">
                                <a class="modify_guide_a2">기본 속도</a><a class="modify_guide_a1">를 수정할 수 있습니다.</a>
                                <a class="modify_guide_a3" style="margin-left:144px;">단위 :</a>
                                <a class="modify_guide_a3" style="margin-left:5px;">Ghz</a>
                            </div>
                        </div>

                        </div>
                                    
                </div>   
            </div>
        </div>

</form>

</div>

</div>
</div>
</div>

    

    



  











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



