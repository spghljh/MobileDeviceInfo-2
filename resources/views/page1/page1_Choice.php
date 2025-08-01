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


if (isset($_GET["id_cpu"]))				// $_GET["num"] : 레코드 번호
$id_cpu = $_GET["id_cpu"];
else 
$id_cpu = "";

	// DB 접속
$sql = "select * from mcl where id_cpu=$id_cpu";	// 레코드 검색
$result = mysqli_query($con, $sql);			// SQL 명령 실행
$row = mysqli_fetch_assoc($result);			// 레코드 가져오기

$id_cpu        = $row["id_cpu"];		
$name_cpu      = $row["name_cpu"];	
$manf_cpu      = $row["manf_cpu"];	



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
      $tmp_data1_cpu         = $row["data1_cpu"];	
      $tmp_data2_cpu         = $row["data2_cpu"];	
      $tmp_data3_cpu         = $row["data3_cpu"];
      $tmp_data4_cpu         = $row["data4_cpu"];	
      $tmp_data5_cpu         = $row["data5_cpu"];

      $data1_cpu         = $row["data1_cpu"];	
      $data2_cpu         = $row["data2_cpu"];	
      $data3_cpu         = $row["data3_cpu"];
      $data4_cpu         = $row["data4_cpu"];	
      $data5_cpu         = $row["data5_cpu"];


      if ( empty( $tmp_data1_cpu ) ) {

        		// DB 연결
        $sql = "UPDATE members SET data1_cpu='$name_cpu' WHERE id='$userid';";
        mysqli_query($con, $sql); // SQL 명령 실행	
        
        $id         = $row["id"];	
        $pass         = $row["pass"];	
        $name         = $row["name"];	
        $email         = $row["email"];	
        $data1_cpu         = $row["data1_cpu"];	
        $data2_cpu         = $row["data2_cpu"];	
        $data3_cpu         = $row["data3_cpu"];
        $data4_cpu         = $row["data4_cpu"];	
        $data5_cpu         = $row["data5_cpu"];
        
        echo "<script>
        location.href = 'page1view_id.php?id_cpu='+$id_cpu;
          </script>";

      } else {

        if ( empty( $tmp_data2_cpu ) ) {

            		// DB 연결
            $sql = "UPDATE members SET data2_cpu='$name_cpu' WHERE id='$userid';";
            mysqli_query($con, $sql); // SQL 명령 실행	
            
            $id         = $row["id"];	
            $data1_cpu         = $row["data1_cpu"];	
            $data2_cpu         = $row["data2_cpu"];	
            $data3_cpu         = $row["data3_cpu"];
            $data4_cpu         = $row["data4_cpu"];	
            $data5_cpu         = $row["data5_cpu"];
            
            echo "<script>
            location.href = 'page1view_id.php?id_cpu='+$id_cpu;
              </script>";

          } else {

            if ( empty( $tmp_data3_cpu ) ) {
    
                		// DB 연결
                $sql = "UPDATE members SET data3_cpu='$name_cpu' WHERE id='$userid';";
                mysqli_query($con, $sql); // SQL 명령 실행	
                
                $id         = $row["id"];	
                $data1_cpu         = $row["data1_cpu"];
                $data2_cpu         = $row["data2_cpu"];	
                $data3_cpu         = $row["data3_cpu"];
                $data4_cpu         = $row["data4_cpu"];	
                $data5_cpu         = $row["data5_cpu"];
                
                echo "<script>
                location.href = 'page1view_id.php?id_cpu='+$id_cpu;
                  </script>";

              } else {
    
                if ( empty( $tmp_data4_cpu ) ) {
        
                    		// DB 연결
                    $sql = "UPDATE members SET data4_cpu='$name_cpu' WHERE id='$userid';";
                    mysqli_query($con, $sql); // SQL 명령 실행	
                    
                    $id         = $row["id"];	
                    $data1_cpu         = $row["data1_cpu"];	
                    $data2_cpu         = $row["data2_cpu"];	
                    $data3_cpu         = $row["data3_cpu"];
                    $data4_cpu         = $row["data4_cpu"];	
                    $data5_cpu         = $row["data5_cpu"];
                    
                    echo "<script>
                    location.href = 'page1view_id.php?id_cpu='+$id_cpu;
                      </script>";

                  } else {
        
                    if ( empty( $tmp_data5_cpu ) ) {

                        		// DB 연결
                        $sql = "UPDATE members SET data5_cpu='$name_cpu' WHERE id='$userid';";
                        mysqli_query($con, $sql); // SQL 명령 실행	
                        
                        $id         = $row["id"];	
                        $data1_cpu         = $row["data1_cpu"];	
                        $data2_cpu         = $row["data2_cpu"];	
                        $data3_cpu         = $row["data3_cpu"];
                        $data4_cpu         = $row["data4_cpu"];	
                        $data5_cpu         = $row["data5_cpu"];
  
                        echo "<script>
                        location.href = 'page1view_id.php?id_cpu='+$id_cpu;
                          </script>";
                        



                      } else {

  


                        // page_user_room_Choice.php 이동 시에도 증가한 choice_cpu 값을 다시 1 감소 시킨다. 
                        $sql0 = "UPDATE mcl SET ";
                        $sql0 .= "choice_cpu = choice_cpu - 1 ";
                        $sql0 .= "WHERE id_cpu = $id_cpu;";
                    
                        mysqli_query($con, $sql0); 
                        //

                        ?>
                        <script>
                        alert("관심 프로세서 추가는\n최대 5개 까지 가능합니다!");  
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
