<head>
<title>index.php</title>
<meta charset="utf-8">
<link href="./css/index_body_index.css" rel="stylesheet">
<link href="./css/main_header.css" rel="stylesheet">
<link href="./css/user.css" rel="stylesheet">
</head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/main_header.php';?>

<style>
.Module_Layout_1_1_2{
/*
background: linear-gradient(white, rgb(248,246,247), rgb(217,200,210) ) !important;
*/

background: linear-gradient(white, rgb(248,246,247), rgb(241,217,231) ) !important;
}


</style>

<div class="ground"><!--div class="ground"-->
<div class="index_content_line"><!--div class="index_content_line"-->
<div class="index_content" style="margin-top:-30px;"><!--div class="index_content"-->

<div class="part1"><!--div class="part1"-->

<div class="Main_Title">   
    <div class="tool1_title"><a>프로세서 중심으로 살펴보세요.</a></div>
    <div class="tool1_semi"><a>프로세서 목록을 통해, 프로세서의 상세 정보를 확인하세요.</a></div>
</div>

<div class="index_button_line1"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->

<!--모듈-START-->
<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1" style="width : 1314px;"><!--div class="Module_Layout_1_1"-->

<!--div class="Module_Layout_1_1_1"-->
    <div class="Module_Layout_1_1_1" style="width : 1309px;">
        <div class="Module_Layout_1_1_1_title">
            <div class="Module_Layout_1_1_1_title_0"><a style="font-size:18px;">P</a></div>
            <div class="Module_Layout_1_1_1_title_1"><a class = "Module_Layout_1_1_1_title_00" onclick="location.href='./page1/page1_list.php'">프로세서 탐색</a></div>
            <div class="Module_Layout_1_1_1_title_2"><a class = "Module_Layout_1_1_1_title_00_ToBase" onclick=" location.href= './page3/page3_list_base.php' ">자세히</a></div>
        </div>
    </div>
<!--div class="Module_Layout_1_1_1"-->

<!--div class="Module_Layout_1_1_2"-->
    <div class="Module_Layout_1_1_2" style="width : 1309px; padding-left:40px;">
        <div class="Module1_start" style="width:600px;">
            <div class="Total_Count" onclick="location.href='./page1/page1_list.php' ">
                <div class="Total_Count_Amount"><a><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_TotalCpu.php';?></a></div>
                <div class="Total_Count_Processor"><a>프로세서</a></div>
            </div>
            <div class="Hot_Items1">
                <div class="Hot_Items2_1"><div class="Hot_Items2_1_1"><a>실시간 인기 프로세서</a></div></div>
                <div class="Hot_Items2_2"><div class="Hot_Items2_2_1"><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_hotcpu.php';?></div></div>
            </div>
        </div>
        <div class="Module1_start_slider"><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_SliderCpu.php';?></div>
    </div>
<!--div class="Module_Layout_1_1_2"-->

</div><!--div class="Module_Layout_1_1"-->
</div><!--div class="Module_Layout_1"-->
<!--모듈-END-->

</div><!--div class="index_button_line1"-->
</div><!--div class="button_content1"-->
</div><!--div class="part1"-->

<div class="part2"><!--div class="part2"-->

<div class="Main_Title" style="margin-top : -30px;">   
    <div class="tool1_title"><a>디바이스를 탐색할 수 있습니다.</a></div>
    <div class="tool1_semi"><a>디바이스 목록을 통해, 디바이스의 상세 정보를 확인하세요.</a></div>
</div>

<div class="index_button_line1"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->
<!--모듈-START-->

<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"  style="width : 1314px;"><!--div class="Module_Layout_1_1"-->

<!--div class="Module_Layout_1_1_1"-->  
    <div class="Module_Layout_1_1_1" style="width : 1309px;">
        <div class="Module_Layout_1_1_1_title">
            <div class="Module_Layout_1_1_1_title_0"><a style="font-size:18px;">D</a></div>
            <div class="Module_Layout_1_1_1_title_1"><a class="Module_Layout_1_1_1_title_00" onclick="location.href='./page2/page2_list.php'">디바이스 탐색</a></div>
            <div class="Module_Layout_1_1_1_title_2"><a class="Module_Layout_1_1_1_title_00_ToBase" onclick=" location.href= './page3/page3_list_base.php#Module_Layout_1_device' ">자세히</a></div>
        </div>
    </div>
<!--div class="Module_Layout_1_1_1"-->  

<!--div class="Module_Layout_1_1_2"-->  
    <div class="Module_Layout_1_1_2" style="width : 1309px; padding-left:40px;">
        <div class="Module1_start" style="width:600px;">
            <div class="Total_Count" onclick="location.href='./page2/page2_list.php' " style="margin-right:40px; margin-left: -20px;">
                <div class="Total_Count_Amount"><a><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_TotalDevice.php';?></a></div>
                <div class="Total_Count_Device"><a>디바이스</a></div>
            </div>
            <div class="Hot_Items2">
                <div class="Hot_Items2_1"><div class="Hot_Items2_1_1"><a>실시간 인기 디바이스</a></div></div>
                <div class="Hot_Items2_2"><div class="Hot_Items2_2_1"><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_hotdevice.php';?></div></div>
            </div>
        </div>
        <div class="Module1_start_slider"><?php include $_SERVER['DOCUMENT_ROOT'].'/index_tool_SliderDevice.php';?></div>
    </div>
<!--div class="Module_Layout_1_1_2"-->

</div><!--div class="Module_Layout_1_1"-->  
</div><!--div class="Module_Layout_1"-->  
 
<!--모듈-END-->
</div><!--div class="index_button_line1"-->
</div><!--div class="button_content1"-->

</div><!--div class="part2"-->

</div><!--div class="index_content"-->
</div><!--div class="index_content_line"-->
</div><!--div class="ground"-->


<style>

.drop1_menu_title_true_1_title1_search{
    font-size: 22px;
    margin-top: 5px;
    margin-bottom: 15px;
    width: 220px;
    margin-left: 130px;
    margin-right: 10px;
    display: flex;
  }
  
  .drop1_menu_title_true_1_title2_search{
    font-size: 22px;
    margin-top: 28px;
    margin-bottom: 10px;
    width: 220px;
    margin-left: 130px;
    margin-right: 10px;
    display: flex;
  }

  

    </style>