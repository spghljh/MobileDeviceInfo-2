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
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	



<?php


    if(!$_SESSION["userid"]) { 
?>                


                      <?php

{
                echo "<script>
                location.href = 'http://mdi.dothome.co.kr/users/user_LoginForm.php';
              </script>";


}
                         ?>  
                         

<?php
    } else {
                
?>



















<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}



   
    if (isset($_SESSION["id"])) 
        $id = $_SESSION["id"];
    else 
        $id = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";

?>


<?php


if (isset($_GET["id_device"]))				// $_GET["num"] : 레코드 번호
$id_device = $_GET["id_device"];
else 
$id_device = "";

	// DB 접속
$sql = "select * from mdl where id_device=$id_device";	// 레코드 검색
$result = mysqli_query($con, $sql);			// SQL 명령 실행
$row = mysqli_fetch_assoc($result);			// 레코드 가져오기

$id_device        = $row["id_device"];		
$name_device      = $row["name_device"];	
$manf_device      = $row["manf_device"];	



if (isset($_SESSION["userid"])) 
      $userid = $_SESSION["userid"];
      else 
      $userid = "";

      if (isset($_SESSION["username"])) 
      $username = $_SESSION["username"];
      else 
      $username = "";

      		// DB 연결
      $sql = "SELECT * FROM members WHERE id='$userid' ";		// 일련번호 내림차순 전체 레코드 검색
      $result = mysqli_query($con, $sql);			// SQL 명령 실행	
      $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기
      
      
      $id         = $row["id"];	
      $pass         = $row["pass"];	
      $name         = $row["name"];	
      $email         = $row["email"];	
      $tmp_data1_device         = $row["data1_device"];	
      $tmp_data2_device         = $row["data2_device"];	
      $tmp_data3_device         = $row["data3_device"];
      $tmp_data4_device         = $row["data4_device"];	
      $tmp_data5_device         = $row["data5_device"];

      $data1_device         = $row["data1_device"];	
      $data2_device         = $row["data2_device"];	
      $data3_device         = $row["data3_device"];
      $data4_device         = $row["data4_device"];	
      $data5_device         = $row["data5_device"];


      if ( empty( $tmp_data1_device ) ) {

        		// DB 연결
        $sql = "UPDATE members SET data1_device='$name_device' WHERE id='$userid';";
        mysqli_query($con, $sql); // SQL 명령 실행	
        
        $id         = $row["id"];	
        $pass         = $row["pass"];	
        $name         = $row["name"];	
        $email         = $row["email"];	
        $data1_device         = $row["data1_device"];	
        $data2_device         = $row["data2_device"];	
        $data3_device         = $row["data3_device"];
        $data4_device         = $row["data4_device"];	
        $data5_device         = $row["data5_device"];
        
        echo "<script>
        location.href = 'page2view_id.php?id_device='+$id_device;
          </script>";

      } else {

        if ( empty( $tmp_data2_device ) ) {

            		// DB 연결
            $sql = "UPDATE members SET data2_device='$name_device' WHERE id='$userid';";
            mysqli_query($con, $sql); // SQL 명령 실행	
            
            $id         = $row["id"];	
            $data1_device         = $row["data1_device"];	
            $data2_device         = $row["data2_device"];	
            $data3_device         = $row["data3_device"];
            $data4_device         = $row["data4_device"];	
            $data5_device         = $row["data5_device"];
            
            echo "<script>
            location.href = 'page2view_id.php?id_device='+$id_device;
              </script>";

          } else {

            if ( empty( $tmp_data3_device ) ) {
    
                		// DB 연결
                $sql = "UPDATE members SET data3_device='$name_device' WHERE id='$userid';";
                mysqli_query($con, $sql); // SQL 명령 실행	
                
                $id         = $row["id"];	
                $data1_device         = $row["data1_device"];
                $data2_device         = $row["data2_device"];	
                $data3_device         = $row["data3_device"];
                $data4_device         = $row["data4_device"];	
                $data5_device         = $row["data5_device"];
                
                echo "<script>
                location.href = 'page2view_id.php?id_device='+$id_device;
                  </script>";

              } else {
    
                if ( empty( $tmp_data4_device ) ) {
        
                    		// DB 연결
                    $sql = "UPDATE members SET data4_device='$name_device' WHERE id='$userid';";
                    mysqli_query($con, $sql); // SQL 명령 실행	
                    
                    $id         = $row["id"];	
                    $data1_device         = $row["data1_device"];	
                    $data2_device         = $row["data2_device"];	
                    $data3_device         = $row["data3_device"];
                    $data4_device         = $row["data4_device"];	
                    $data5_device         = $row["data5_device"];
                    
                    echo "<script>
                    location.href = 'page2view_id.php?id_device='+$id_device;
                      </script>";

                  } else {
        
                    if ( empty( $tmp_data5_device ) ) {

                        		// DB 연결
                        $sql = "UPDATE members SET data5_device='$name_device' WHERE id='$userid';";
                        mysqli_query($con, $sql); // SQL 명령 실행	
                        
                        $id         = $row["id"];	
                        $data1_device         = $row["data1_device"];	
                        $data2_device         = $row["data2_device"];	
                        $data3_device         = $row["data3_device"];
                        $data4_device         = $row["data4_device"];	
                        $data5_device         = $row["data5_device"];
  
                        echo "<script>
                        location.href = 'page2view_id.php?id_device='+$id_device;
                          </script>";
                        



                      } else {

  


                        // page_user_room_Choice.php 이동 시에도 증가한 choice_device 값을 다시 1 감소 시킨다. 
                        $sql0 = "UPDATE mdl SET ";
                        $sql0 .= "choice_device = choice_device - 1 ";
                        $sql0 .= "WHERE id_device = $id_device;";
                    
                        mysqli_query($con, $sql0); 
                        //


                        ?>
                        <script>
                        alert("관심 디바이스 추가는 최대 5개 까지 가능합니다!");  
                        </script>
                        <?php


                        echo "<script>
                        location.href = '../users/page_user_room_Choice.php';
                            </script>";
                        }
                     

               
                        
                      
                      
             







                        
                        
                      };
                  };
              };
          };
      };

      





      ?>
