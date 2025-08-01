<head>
<title>user_LoginForm</title>
<meta charset="utf-8">
<link href="../../../css/main_header.css" rel="stylesheet">
<link href="../../../css/main_header_menu_search.css" rel="stylesheet">
<link href="../../../css/user.css" rel="stylesheet">
<link href="../../../css/index_body.css" rel="stylesheet">
</head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/main_header.php';?>




<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" style="margin-top:30px;"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->



<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">
			<div class="Module_Layout_1_1_1_1_0">
			<a style="font-size:18px;">U1</a>                                  
            </div>
            <div class="Module_Layout_1_1_1_1_1">

                <a class = "Module_Layout_1_1_1_1_1_0_page">로그인</a>

            </div>

			<div class="Module_Layout_1_1_1_1_2_back" onclick="history.back()">
                <a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a>
            </div>
			
        </div>
    </div>

<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1_user"><!--div class="Module_Layout_1_1_2_1"-->

            <div class="Module_Layout_1_1_2_1_1"> 
                <a></a>
            </div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1"><!--모듈1-Start-->

























<!--내용-->

<div class = "tool1_user">




<script>
	function check_input()
	{
    	if (!document.login.id.value) {
        	alert("아이디를 입력하세요");    
        	document.login_form.id.focus();
        	return;
    	}

    	if (!document.login.pass.value) {
        	alert("비밀번호를 입력하세요");    
        	document.login.pass.focus();
        	return;
    	}
    
		document.login.submit();





		if (((document.login.id.value)==('eris'))){
		window.location.href = "../admin/index_admin.php";
		}






	}
</script>	



<div class="user_layout">
<div class="user_layout_form">
<div class="user_layout_form_line">



						

									<div class="user_layout_form_line_box1" style="margin-top: -10px;">

									<?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/users/user_semi.php';?>

									<a class="user_layout_form_line_box1_semi">로그인</a>

									</div>


                                    <div class="user_layout_form_line_box2">






										<form name="login" method="post" action="login_test.php">		



											<div class="user_layout_form_line_content">
													<input class = "id_input" type="text" name="id" placeholder="아이디">
											</div>
													
											<div class="user_layout_form_line_content">
													<input class = "pw_input" type="password" name="pass" placeholder="비밀번호">
											</div>

											<div class="user_layout_form_line_content">
													<button class = "login_button" type="button" onclick="check_input()"><a>로그인</a></button>
											</div>

											<div class="user_layout_form_line_content">
													<button class = "register_button" type="button" onclick="location.href='./user_RegisterForm.php'"><a>회원가입</a></button>
											</div>



										</form>








										

									</div>

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