<?php



    
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	



<?php
    if(!$userid) {
?>                
            <div class="user_login_button">
                <div class ="user_login">
  
                    <!-- <a class ="user_login_inside" href="http://mdi.dothome.co.kr/users/user_LoginForm.php">로그인</a> -->
                    <a class ="user_login_inside" href="/resources/views/users/user_LoginForm.php">로그인</a>
                    
                </div>
            </div>


<?php
    }
?>


<?php
    if($userid == 'eris') {

?>   


        <div class="user_login_button">
                <div class ="user_login">
              
                    <!-- <a class ="user_login_inside" href="http://mdi.dothome.co.kr/users/page_user_room_Choice.php" style="color : red;">관리자</a> -->
                    <a class ="user_login_inside" href="/resources/views/users/page_user_room_Choice.php" style="color : red;">관리자</a>
                </div>
            </div>
  
<?php
    } else {
                $logged = $userid;  
?>
            <div class="user_login_button_logged">
                <div class ="user_login_logged">
              
                    <!-- <a class ="user_login_inside_logged" href="http://mdi.dothome.co.kr/users/page_user_room_Choice.php"><?=$logged?></a> -->
                    <a class ="user_login_inside_logged" href="/resources/views/users/page_user_room_Choice.php"><?=$logged?></a>
                    
                </div>
            </div>
            

            
<?php
    }
?>
