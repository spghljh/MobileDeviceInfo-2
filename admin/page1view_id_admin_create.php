<head>
<title>page1view_id.php</title>
<meta charset="utf-8">


<link href="../css/main_header_menu_search.css" rel="stylesheet">
<link href="../css/page1view_id_body.css" rel="stylesheet">
<link href="../css/page1view_id_ForMainTitle.css" rel="stylesheet">
<link href="../css/page1view_id_body_CpuSpecToDevice.css" rel="stylesheet">
<link href="../css/index_body_admin.css" rel="stylesheet">
<link href="../css/main_header_admin.css" rel="stylesheet">
<link href="../css/page1view_id_body_modify.css" rel="stylesheet">

<link href="../css/all_admin.css" rel="stylesheet">
<link href="../css/user_admin.css" rel="stylesheet">
</head>



<?php include $_SERVER['DOCUMENT_ROOT'].'/admin/main_header_admin.php'; ?>









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
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: #6f6f6f !important;" >제조사</a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0_22" STYLE="MARGIN-RIGHT:12PX; font-size:22px;">></a>
                                                    <a class = "Module_Layout_1_1_1_1_1_0" STYLE="MARGIN-RIGHT:12PX; font-size:22px; color: #6f6f6f !important;">프로세서 명칭</a>
                                            </div>
                                            <div class="Module_Layout_1_1_1_1_2_back_view" onclick="history.back()"><a class = "Module_Layout_1_1_1_1_1_0">취소</a></div>
                                        </div>




                                        <div class="page1view_id_body_title_ForMainTitle" >


                                            <div class="page1view_id_body_title_part2_ForMainTitle">
                                                <div class="page1view_id_body_title_part2_name_cpu_ForMainTitle">
                                                    <a style="color:rgb(255, 0, 170) !important;">새로운 프로세서 추가하기</a>
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
        <button type="save_button" class="save_button_admin_page1" onclick="check_input_create2()">
            <a>완료</a>
        </button>
    </div>

</div>
</div> 










<script>
    
   function check_input_create2() {
      document.member.submit();
   }

</script>




<div class="module1">
<div class="module2">  
<div class="module3">

<div class="module_spec_cpu">
                
<form name="member" action="./insert_create.php" method="post">

        <div class="module_spec_cpu_version2_modify">
            <div class="line_spec">   
                <div class="chart_div">

                        <div class="chart_div_image1_ProductCpu">
                            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px; background-color:transparent;">
                                <a style="font-size:14px; color:white; width: 40px;">Proc</a>                                   
                            </div>
                        </div>
                        
                        <div class="chart_div_image2_ProductCpu" ><div><a>명칭</a></div></div>

                        <div class="chart_div_image2_modify_ProductCpu" style="width : 139px;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="name_cpu_post" placeholder="name_cpu">
                            </div>
                        </div>

                        <div class="chart_div_graph_core_cpu_ProductCpu" style="width : 380px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">명칭</a>
                                    <a class="modify_guide_a1">을 입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:223px; color:white !important;">텍스트</a>
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
                                <input class = "modify_input_box" type="text" name="manf_cpu_post" placeholder="manf_cpu">
                            </div>
                        </div>

                        <div class="chart_div_graph_core_cpu" style="width : 380px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">제조사</a>
                                    <a class="modify_guide_a1">를 입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:210px;">텍스트</a>
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

                        <div class="chart_div_image2_modify" style="width : 112px;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="release_cpu_post" placeholder="release_cpu">
                            </div>
                        </div>

                        <div class="chart_div_image4" style="width:30px;"><div><a>년</a></div></div>
                        <div class="chart_div_graph_core_cpu" style="width:368px;">

                            <div class="chart_div_core_modify" >
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">출시 연도</a>
                                    <a class="modify_guide_a1">입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:128px;">단위 :</a>
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

                        <div class="chart_div_image2" ><div><a>코어 수</a></div></div>

                        <div class="chart_div_image2_modify" style="width : 90px;">
                            <div class="modify_box">
                                <input class = "modify_input_box" type="text" name="core_cpu_post" placeholder="core_cpu">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>코어</a></div></div>
                        <div class="chart_div_graph_core_cpu" style="width:360px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">코어 수</a>
                                    <a class="modify_guide_a1">를 입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:93px;">단위 : </a>
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

                        <div class="chart_div_image2_modify" style="width : 105px;">
                            <div class="modify_box">
                            <input class = "modify_input_box" type="text" name="thread_cpu_post" placeholder="thread_cpu">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>스레드</a></div></div>
                        <div class="chart_div_graph_core_cpu" style="width:345px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">스레드 수</a>
                                    <a class="modify_guide_a1">를 입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:65px;">단위 :</a>
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

                        <div class="chart_div_image2_modify" style="width : 115px;">
                            <div class="modify_box">
                            <input class = "modify_input_box" type="text" name="maxghz_cpu_post" placeholder="maxghz_cpu">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>Ghz</a></div></div>
                        <div class="chart_div_graph_core_cpu" style="width:336px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">최고 속도</a>
                                    <a class="modify_guide_a1">를 입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:125px;">단위 :</a>
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

                        <div class="chart_div_image2_modify" style="width : 115px;">
                            <div class="modify_box">
                            <input class = "modify_input_box" type="text" name="minghz_cpu_post" placeholder="minghz_cpu">
                            </div>
                        </div>

                        <div class="chart_div_image4"><div><a>Ghz</a></div></div>
                        <div class="chart_div_graph_core_cpu" style="width:336px;">

                            <div class="chart_div_core_modify">
                                <div class="modify_guide_div_cpu">
                                    <a class="modify_guide_a2">기본 속도</a>
                                    <a class="modify_guide_a1">를 입력하세요.</a>
                                    <a class="modify_guide_a3" style="margin-left:125px;">단위 :</a>
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



