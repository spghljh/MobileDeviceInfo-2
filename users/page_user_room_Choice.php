<head>
<title>user</title>
<meta charset="utf-8">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link href="./index.css" type="text/css" rel=stylesheet>
</head>

<?php require $_SERVER['DOCUMENT_ROOT'].'/main_header.php';?>



<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" style="margin-top:30px;"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->





<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

<div class="Module_Layout_1_1_1">
<div class="Module_Layout_1_1_1_1">
<div class="Module_Layout_1_1_1_1_0"><a style="font-size:18px;">U3</a></div>
<div class="Module_Layout_1_1_1_1_1"><a class = "Module_Layout_1_1_1_1_1_0_page ">나의 탐색</a></div>
<div class="Module_Layout_1_1_1_1_2"><!--<a class = "Module_Layout_1_1_1_1_1_0_modify" onclick="location.href='./page_user_modify.php'">정보수정</a>--></div>





<div class="Module_Layout_1_1_1_1_2"><!--div class="Module_Layout_1_1_1_1_2"-->





<input type="checkbox" id="layerPopup">
<label for="layerPopup" class="logout_button">
    <a class = "Module_Layout_1_1_1_1_1_0" style="width:80px; margin-left:-200px; font-size:13px;">로그아웃</a>
</label> 

<div id="layer_bg"> 
<div id="popup"> 
<div class="popup_design"> 
<div class="popup_logout">

<div class="popup_logout_top">
    <div class="popup_logout_line1"><a>로그아웃 하시겠습니까?</a></div>
    <div class="popup_logout_line2"><a href="./logout.php">로그아웃</a></div>
</div>

<div class="popup_logout_bottom">
    <div class="popup_logout_line3"><a>계속해서 탐색을 이어가세요.</a></div>
    <div class="popup_logout_line4"><label for="layerPopup"><a>뒤로가기</a></label></div>
</div>

</div>
</div>  
</div>
</div>

</div>
</div>




<div class="Module_Layout_1_1_1_1_2_back_sub1" style="margin-right:10px;">
    <a class = "Module_Layout_1_1_1_1_1_0" href="./page_user_modify.php" style="color : white">정보 수정</a>
</div>

<div class="Module_Layout_1_1_1_1_2_back_sub2" style="margin-right:10px;" onclick="history.back()">
    <a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a>
</div>





</div>














<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1" style="background : linear-gradient(white, rgba(80, 11, 60, 0.2), rgba(80, 11, 60, 0.4), rgba(80, 11, 60, 0.6));"> <!--<div class="Module_Layout_1_1_2_1">-->


        <div class="Module_Layout_1_1_2_1_1" style="margin-left : 10px; margin-bottom:1px; margin-top:25px;"> 
        <a class="mdi_a" style="font-size : 30px !important;">MobileDeviceInfo</a><a style="font-size : 24px !important;">에서의</a><a class="mdi_a"><?=$userid?>님의 탐색</a><a style="font-size : 24px !important;">을 확인하세요.</a>
        </div>

        <div class="Module_Layout_1_1_2_1_1" style="margin-left : 40px; margin-top: 10px; margin-bottom: -15px;">
        <a>관심 프로세서 또는 관심 디바이스를 직접 관리하세요.</a>
        </div>



<div class="Module_Layout_1_1_2_1_1"><a></a></div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->









<div class="Module1"><!--div class="Module1"-->






















<div class = "tool1_user"><!--div class="tool1_user"-->

<div class="user2">
<div class="user_info1">
<div class="button_content2_user" style="display:flex; flex-direction:column;">


<div class="button_content3_user">



<div class="default_user">
    <div class="default_content_user" >
        <div class="Module_Layout_1_1_1_1_0" style="margin-bottom: 3px; background-color:grey; margin-left: -4px;"><a style="font-size:12px;">U3-1</a></div>
        <div class="default_content_text1_user"><a class = "default_content_text_user">나의 관심 프로세서</a></div>
        <div class="default_content_text2_user"><a class = "default_content_text_user"></a></div>
        <div class="default_content_text3_user"><a class = "default_content_text_user"></a></div>
    </div>
</div>

<div class="action_user">
    <div class="slider_content1_pro_user">
        <div class="slider_content_text_div1_pro_user"><a style="margin-left: -280px;">관심 프로세서 관리를 통한 빠른 탐색과 사용자 통계를 제공합니다.</a></div>
        <div class="slider_content_text_div1_pro_con_user"><?php require $_SERVER['DOCUMENT_ROOT'].'/users/CurrentSessionDatas_module_cpu.php';?></div>
    </div>
</div>

</div>
</div>  
</div>
</div>



<div class="user2">
<div class="user_info1">
<div class="button_content2_user">
<div class="button_content3_user">

<div class="default_user">
    <div class="default_content_user" >
        <div class="Module_Layout_1_1_1_1_0" style="margin-bottom: 3px; background-color:grey; margin-left: -4px;"><a style="font-size:12px;">U3-2</a></div>
        <div class="default_content_text1_user"><a class = "default_content_text_user">나의 관심 디바이스</a></div>
        <div class="default_content_text2_user"><a class = "default_content_text_user"></a></div>
        <div class="default_content_text3_user"><a class = "default_content_text_user"></a></div>
    </div>
</div>

<div class="action_user">
    <div class="slider_content1_pro_user">
        <div class="slider_content_text_div1_pro_user"><a style="margin-left: -280px;">관심 디바이스 관리를 통한 빠른 탐색과 사용자 통계를 제공합니다.</a></div>
        <div class="slider_content_text_div1_pro_con_user"><?php require $_SERVER['DOCUMENT_ROOT'].'/users/CurrentSessionDatas_module_device.php';?></div>
    </div>
</div>

</div>
</div>  
</div>
</div>


</div><!--div class="tool1_user"-->

























</div><!--div class="Module1"-->










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