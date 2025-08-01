
<?php
if(!isset($_SESSION)) 
{ 
session_start(); 
}

if (isset($_SESSION["userid"])) 
$userid = $_SESSION["userid"];
else 
$userid = "";

if (isset($_SESSION["username"])) 
$username = $_SESSION["username"];
else 
$username = "";
?>


<div class="main_header_part" ><!--div class="main_header_part"-->
<div class="main_header"><!--div class="main_header"-->


<!--메인_로고-->
<div class="main_header_line2_1_000">

<div class="main_header_line2_2_update">
    <div class="main_header_line2_3_Logo" style="margin-right:-18px;">
        <div class="main_header_menu_content1_Logo">
        <div class="Module_Layout_1_1_1_title_0" style="font-size:13px; margin-bottom:2px;">MDI</div>
        </div>
    </div>

    <div class="main_header_line2_3_update_outer">
        <div class="main_header_line2_3_update">
            <div class="main_header_menu_content1_update_title" >

                <!-- <a href="http://mdi.dothome.co.kr/index.php">MobileDeviceInfo</a> -->
                <a href="/index.php">MobileDeviceInfo</a>

            </div>
        </div>
        <div class="main_header_line2_3_update">
            <!--<div class="main_header_menu_content1_update_status"><a>ver. 24.12.04.</a></div>-->
        </div>
    </div>
</div>

</div>
<!--메인_로고-->

<!--메인_메뉴-->
<div class="main_header_line2_1_001"><!--div class="main_header_line2_1_001"-->


           <div class="drop2">
                <div class="drop1_menu0">
                    <div class="drop1_menu_title_false">

                        <a href="http://mdi.dothome.co.kr/page3/page1_mdi.php"></a>
                    </div>
                    <div class="drop1_menu_title_true">






                        <div class="drop1_menu_title_true_1">
                            
                            <div class="drop1_menu_title_true_1_title1">
                            
                                <div class="drop1_menu_title_true_1_title1_text">
                                <a>프로세서 검색</a>
                                </div>
                            </div>

                            <div class="drop1_menu_title_true_1_title_semi">
                                <div class="drop1_menu_title_true_1_title_semi1" style="margin-top: 3px;">
                                <a>프로세서 명칭으로 검색하세요.</a>
                                </div>
                            </div>

                            <div class="drop1_menu_title_true_1_title2">
                             
                                <div class="drop1_menu_title_true_1_title1_text">
                                <a>디바이스 검색</a>
                                </div>
                            </div>

                            <div class="drop1_menu_title_true_1_title_semi">
                                <div class="drop1_menu_title_true_1_title_semi1" style="margin-top: 8px;">
                                <a>디바이스 명칭으로 검색하세요.</a>
                                </div>
                            </div>
                           
                        </div>









                        <div class="drop1_menu_title_true_1" style="margin-left:30px; margin-right:40px;">
                           
                             <div class="drop1_menu_title_true_1_title1_search">
                             <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0view_id_SearchModule/page0_body_SearchModule_cpu.php';?>

                            </div>

                            <div class="drop1_menu_title_true_1_title_semi">
                                <div class="drop1_menu_title_true_1_title_semi1">
                                <a></a>
                                </div>
                            </div>

                            <div class="drop1_menu_title_true_1_title2_search">
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0view_id_SearchModule/page0_body_SearchModule_device.php';?>

                            </div>

                            <div class="drop1_menu_title_true_1_title_semi">
                                <div class="drop1_menu_title_true_1_title_semi1">
                                <a></a>
                                </div>
                            </div>
                            
                        </div>





                        <div class="drop1_menu_title_true_1" style="margin-left:210px; margin-top:40px">

                        

                        <div class="drop1_menu_title_true_1_title1_base" style="margin-top: -8px;">

                                <div class="drop1_menu_title_true_1_title1_icon">
                                <div class="Module_Layout_1_1_1_1_0"><a style="font-size:18px; text-shadow: -2px 0px black, 0px 2px black, 2px 0px black, 0px -2px black;">B1</a></div>
                                </div>

                                <div class="drop1_menu_title_true_1_title1_text_base" >

                                <a style="font-size: 18px; " href="/resources/views/page3/page3_list_base.php">프로세서 베이스 확인하기</a>
                                </div>

                        </div>

                        <div class="drop1_menu_title_true_1_title_semi_base">
                                <div class="drop1_menu_title_true_1_title_semi1_base" style="margin-top: 2px;">
                                <a></a>
                                </div>
                        </div>

                        <div class="drop1_menu_title_true_1_title1_base" style="margin-top: 52px;">

                                <div class="drop1_menu_title_true_1_title1_icon">
                                <div class="Module_Layout_1_1_1_1_0"><a style="font-size:18px; text-shadow: -2px 0px black, 0px 2px black, 2px 0px black, 0px -2px black;">B2</a></div>
                                </div>

                                <div class="drop1_menu_title_true_1_title1_text_base">
                                <!--
                                <a style="font-size: 18px;" href="http://mdi.dothome.co.kr/page3/page3_list_base.php#Module_Layout_1_device">디바이스 베이스 확인하기</a>
                                -->
                                <a style="font-size: 18px;" href="/resources/views/page3/page3_list_base.php#Module_Layout_1_device">디바이스 베이스 확인하기</a>
                                </div>
                        </div>

                        <div class="drop1_menu_title_true_1_title_semi_base">
                                <div class="drop1_menu_title_true_1_title_semi1_base" style="margin-top: 5px;">
                                <a></a>
                                </div>
                        </div>





                        </div>






                  
                    </div>
                    <div class="drop1_menu_title_false">

                        <a href="/resources/views/page3/page1_mdi.php"></a>

                    </div>
                </div>
         
             
            </div>



<!--메인_메뉴-프로세서_중심-->
<div class="main_header_line2_3_000">
    
             
<div class="main_header_menu_content1">
<div class="drop2_title">

<div class="drop_yet0"><a>P1</a></div>
<div class="drop_yet1">

    <!-- <a href="http://mdi.dothome.co.kr/page1/page1_list.php" style="color : white">프로세서 목록</a> -->
    <a href="/resources/views/page1/page1_list.php" style="color : white">프로세서 목록</a>

</div>
</div>

</div>
</div>
<!--메인_메뉴-프로세서_중심-->

<!--메인_메뉴-디바이스_중심-->
<div class="main_header_line2_3_000">
<div class="main_header_menu_content1">
    
<div class="drop2_title">




<div class="drop_yet0"><a>D1</a></div>
<div class="drop_yet1">

    <a href="/resources/views/page2/page2_list.php" style="color : white">디바이스 목록</a>

</div>
</div>



</div>
</div>
<!--메인_메뉴-디바이스_중심-->

<!--메인_메뉴-통계-->
<div class="main_header_line2_3_000">
<div class="main_header_menu_content1">
<div class="drop2_title">



<div class="drop_yet0"><a>B</a></div>
<div class="drop_yet1">

    <a href="/resources/views/page3/page3_list_base.php" style="color:white;">베이스</a>

</div>
</div>

</div>
</div>
<!--메인_메뉴-통계-->







</div><!--div class="main_header_line2_1_001"-->
<!--메인_메뉴-->











<!--검색창-->
<div class="main_header_line2_1_002">   
<div class="main_header_line2_1_002_in">  
    <div class="main_header_line2_1_002_in1"></div> 
    <div class="main_header_line2_1_002_in2"></div>  
</div>
</div>
<!--검색창-->


<!--로그인-->
<div class="main_header_line2_1_003">   
<div class="main_header_line2_3_003">  
    <div class="main_header_menu_content4">
        <div class="drop2_title" style="margin-top:2px;">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/resources/views/user.php';?>
            
        <div class="drop2_user"></div>
    </div>
</div>
</div>
</div>
<!--로그인-->


</div><!--div class="main_header"-->
</div><!--div class="main_header_part"-->