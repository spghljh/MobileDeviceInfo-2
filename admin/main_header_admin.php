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




<!--메인_메뉴-->
<div class="main_header_line2_1_001"><!--div class="main_header_line2_1_001"-->

                <div class="main_header_line2_2_update_admin">


                <div class="admin_mdi">

                    <a class="admin_mdi_a" href="http://mdi.dothome.co.kr/admin/index_admin.php">MobileDeviceInfo</a>
                </div>
                        
                <div class="admin_ver">
                    <a class="admin_ver_a">ver.</a>
                    <a class="admin_ver_b">24.12.04.</a>
                    <a class="admin_ver_c" onclick="location.href='../admin/page0_list_admin.php'">가입자 수 :</a>
                    <a class="admin_ver_d" onclick="location.href='../admin/page0_list_admin.php'"><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_TotalUser.php';?></a>
                </div>
                

                </div>


</div><!--div class="main_header_line2_1_001"-->
<!--메인_메뉴-->









<!--로그인-->
<div class="main_header_line2_1_003">   
    <div class="main_header_line2_3_003">  
        <div class="main_header_menu_content4">
            <div class="drop2_title_admin">
                <a class="drop2_title_admin_a">관리자</a>
            </div>
        </div>
    </div>
</div>


<div class="main_header_menu_content4">
        <div class="drop2_title_admin">

            <a class="drop2_title_admin_b" href="http://mdi.dothome.co.kr/index.php">종료</a>
        </div>
</div>

<!--로그인-->














</div><!--div class="main_header"-->
</div><!--div class="main_header_part"-->