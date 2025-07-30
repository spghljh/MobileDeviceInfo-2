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
            <a style="font-size:18px;">U2</a>                                               
            </div>
            <div class="Module_Layout_1_1_1_1_1" >

                <a class = "Module_Layout_1_1_1_1_1_0_page">회원 가입</a>

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

























<!--내용-->

<div class = "tool1_user">







<script>
    
   function check_input() {

    if (!document.member.id.value) {
          alert("빈칸 없이 입력해 주세요!");
          return;    
      }
      if(!document.member.pass.value) {
        alert("빈칸 없이 입력해 주세요!");
          return;     
      }
      if (!document.member.pass_confirm.value) {
        alert("빈칸 없이 입력해 주세요!"); 
          return;     
      }
      if (!document.member.name.value) {
        alert("빈칸 없이 입력해 주세요!");  
          return;    
      }
      if (!document.member.email.value) {
        alert("빈칸 없이 입력해 주세요!");  
          return;    
      }
      if (document.member.pass.value != document.member.pass_confirm.value) {
        alert("입력하신 비밀번호가 일치하지 않습니다!");
          return;    
      }

      if ((document.member.id.value)&&(document.member.pass.value)&&(document.member.name.value)&&(document.member.email.value))
      {
        alert("회원 가입 완료!");  

      }
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

   function check_id() {
     window.open("check_id.php?id=" + document.member.id.value,
         "IDcheck",
          "left=700,top=300,width=380,height=160,scrollbars=no,resizable=yes");
   }

</script>








<div class="user_layout">
<div class="user_layout_form">
<div class="user_layout_form_line">





								<div class="user_layout_form_line_box1">

                <?php include $_SERVER['DOCUMENT_ROOT'].'/users/user_semi.php';?>

								<a class="user_layout_form_line_box1_semi" style="margin-bottom:-15px;">회원 가입</a>

									</div>

                                    <div class="user_layout_form_line_box2">
                                    
                                            <form name="member" action="./insert.php" method="post">
                                         
                                           

                                                
                                                <div class="user_layout_form_line_content_register" style="margin-bottom:30px; margin-top:30px;">
                                                <input class = "id_input" type="text" name="id" placeholder="아이디">
                                                </div>                
                                                
                                             
                                                
                                                <div class="user_layout_form_line_content_register">
                                                <input class = "pw_input" type="password" name="pass" placeholder="비밀번호">
                                                </div>             
                                              

                                               
                                                <div class="user_layout_form_line_content_register" style="margin-bottom:30px;">
                                                <input class = "pw_input" type="password" name="pass_confirm" placeholder="비밀번호 확인">
                                                </div>             
                                        
                                                

                                                
                                                <div class="user_layout_form_line_content_register">
                                                <input class = "pw_input" type="text" name="name" placeholder="이름">
                                                </div>             
                                                

                                                
                                                <div class="user_layout_form_line_content_register" style="margin-bottom:30px;">
                                                <input class = "pw_input" type="text" name="email" placeholder="이메일">
                                                </div>             
                                             

                                    
                                                <div class="user_layout_form_line_content_register">
                                                <button type="save_button" class="register_button" onclick="check_input()"><a>가입하기</a></button>
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