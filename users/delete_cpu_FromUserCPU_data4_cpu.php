<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
    session_start();
    if (isset($_SESSION["id"])) 
        $id = $_SESSION["id"];
    else 
        $id = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";


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
          		// DB 연결
          $sql = "select * from members where id='$userid' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기


          $id         = $row["id"];	
          $pass         = $row["pass"];	
          $name         = $row["name"];	
          $email         = $row["email"];	
          $regist_day         = $row["regist_day"];	
          $data1_cpu         = $row["data1_cpu"];	
          $data2_cpu         = $row["data2_cpu"];	
          $data3_cpu         = $row["data3_cpu"];
          $data4_cpu         = $row["data4_cpu"];	  
          $data5_cpu         = $row["data5_cpu"];
          $data1_device         = $row["data1_device"];	
          $data2_device         = $row["data2_device"];	
          $data3_device         = $row["data3_device"];
          $data4_device         = $row["data4_device"];	
          $data5_device         = $row["data5_device"];
          ?>


<?php

      // DB 접속
    $sql1 = "UPDATE members SET ";
    $sql1 .= "data4_cpu='' ";
    $sql1 .= "WHERE id='$userid';";

    $sql2 = "SELECT * FROM mcl WHERE name_cpu='$data4_cpu' ";

    $sql3 = "UPDATE mcl SET ";
    $sql3 .= "choice_cpu = choice_cpu - 1 ";
    $sql3 .= "WHERE name_cpu = '$data4_cpu';";

    mysqli_query($con, $sql2);     
    mysqli_query($con, $sql3);       // SQL 명령 실행
    mysqli_query($con, $sql1);       // SQL 명령 실행

    mysqli_close($con); 

           

    // 로그인 폼으로 이동
    echo "<script>
	          location.href = './page_user_room_Choice.php';
	      </script>";
?>
  

  
  <?php
          }

          ?>