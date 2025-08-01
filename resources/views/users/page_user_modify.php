<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


    
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";

    
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_assoc($result);

    $pass = $row["pass"];
    $name = $row["name"];
    $email = $row["email"];

    mysqli_close($con);
?>  

<head>
<title>user_LoginForm</title>
<meta charset="utf-8">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/main_header_menu_search.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
</head>




<?php include $_SERVER['DOCUMENT_ROOT'].'/main_header.php';?>




<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" style="margin-top:30px;"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->



<div class="Module_Layout_1" ><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1" ><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">
            <div class="Module_Layout_1_1_1_1_0">
            <a style="font-size:18px;">U0</a>                                               
            </div>
            <div class="Module_Layout_1_1_1_1_1" >

                <a class = "Module_Layout_1_1_1_1_1_0_page">정보 수정</a>

            </div>

            <div class="Module_Layout_1_1_1_1_2_back" onclick="history.back()">
                <a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a>
            </div>
            
        </div>
    </div>

<div class="Module_Layout_1_1_2" ><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1_user"><!--div class="Module_Layout_1_1_2_1"-->

            <div class="Module_Layout_1_1_2_1_1"> 
                <a></a>
            </div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1" ><!--모듈1-Start-->













<div class = "tool1_user">
    



<div class="user_layout">
<div class="user_layout_form">
<div class="user_layout_form_line">



                                        <div class="user_layout_form_line_box1">

                                        <?php include $_SERVER['DOCUMENT_ROOT'].'/users/user_semi.php';?>
                                        
                                        <a class="user_layout_form_line_box1_semi" style="margin-bottom:-15px;">정보 수정</a>
                                        <a class="user_layout_form_line_box1_semi" style="margin-bottom: 40px;"></a>
                                        </div>




                                    
                                    <div class="user_layout_form_line_box2">
                                        <form name="member" action="./modify.php?id=<?=$userid?>" method="post">


                                                 <div class="user_layout_form_line_content_edit_coment">
                                                <a class="user_layout_form_line_content_edit_coment">가입 <a class="focus_1">ID</a>는 수정이 불가능합니다.</a>            
                                                </div>  
                                                
                                                <div class="user_layout_form_line_content_edit_coment_id">
                                                <a class="user_layout_form_line_content_edit_coment_id2"><?=$userid?></a>             
                                                </div>
                                         
                         
                                                <div class="user_layout_form_line_content_edit_coment">
                                                <a class="user_layout_form_line_content_edit_coment">변경할 </a><a class="focus_1">비밀번호</a><a class="user_layout_form_line_content_edit_coment"> 를 입력해주세요.</a>             
                                                </div>  
                                                <div class="user_layout_form_line_content_edit">
                                                <input type="password" class="user_layout_form_line_content_edit_input" name="pass" value="<?=$pass?>" >              
                                                </div>  

                                                
                                                <div class="user_layout_form_line_content_edit_coment">
                                                <a class="user_layout_form_line_content_edit_coment">변경할 </a><a class="focus_1">비밀번호</a><a class="user_layout_form_line_content_edit_coment"> 를 한번 더 입력해주세요.</a>             
                                                </div>  

                                                <div class="user_layout_form_line_content_edit" style="margin-bottom:40px;">
                                                </a><input type="password" class="user_layout_form_line_content_edit_input" name="pass_confirm">              
                                                </div>  

                                                <div class="user_layout_form_line_content_edit_coment">
                                                <a class="user_layout_form_line_content_edit_coment">변경할 </a><a class="focus_1">이름</a><a class="user_layout_form_line_content_edit_coment"> 을 입력해주세요.</a>             
                                                </div>  
                                                <div class="user_layout_form_line_content">
                                                <input type="text" class="user_layout_form_line_content_edit_input" name="name" value="<?=$name?>">              
                                                </div>  

                                                <div class="user_layout_form_line_content_edit_coment">
                                                <a class="user_layout_form_line_content_edit_coment">변경할 </a><a class="focus_1">이메일</a><a class="user_layout_form_line_content_edit_coment"> 을 입력해주세요.</a>             
                                                </div>  
                                                <div class="user_layout_form_line_content_edit" style="margin-bottom:40px;">
                                                <input type="text" class="user_layout_form_line_content_edit_input" name="email" value="<?=$email?>">              
                                                </div>                         
                                            

                                                <div class="user_layout_form_line_content_edit">
                                                <button type="button" class="user_layout_form_line_content_edit_button" onclick="check_input()"><a>저장하기</a></button>
                                                </div>    

                                      

                                        </form>



                                    <script>
                                    function check_input() {
                                        if (!document.member.pass.value) {
                                            alert("비밀번호를 입력하세요!");    
                                            document.member.pass.focus();
                                            return;
                                        }
                                        if (!document.member.pass_confirm.value) {
                                            alert("비밀번호 확인을 입력하세요!");    
                                            document.member.pass_confirm.focus();
                                            return;
                                        }
                                        if (!document.member.name.value) {
                                            alert("이름을 입력하세요!");    
                                            document.member.name.focus();
                                            return;
                                        }
                                        if (!document.member.email.value) {
                                            alert("이메일 주소를 입력하세요!");    
                                            document.member.email.focus();
                                            return;
                                        }
                                        if (document.member.pass.value != 
                                                document.member.pass_confirm.value) {
                                            alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                                            document.member.pass.focus();
                                            document.member.pass.select();
                                            return;
                                        }
                                        document.member.submit();
                                    }

                                    function reset_form() {
                                        document.member.id.value = "";  
                                        document.member.pass.value = "";
                                        document.member.pass_confirm.value = "";
                                        document.member.name.value = "";
                                        document.member.email.value = "";
                                        document.member.id.focus();
                                        return;
                                    }
                                    </script>

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