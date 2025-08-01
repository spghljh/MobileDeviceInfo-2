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


?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>

  </head>



<?php


if (isset($_SESSION["userid"])) 
      $userid = $_SESSION["userid"];
      else 
      $userid = "";

      if (isset($_SESSION["username"])) 
      $username = $_SESSION["username"];
      else 
      $username = "";




      echo '<br>';
      echo '<br>';
      echo session_id();


      echo '<br>';
      var_dump( $_SESSION );
      echo '<br>';
      echo '<br>';
      echo 'CurrentSession userid';
      echo ($_SESSION['userid']);
      echo '<br>';
      echo '<br>';

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


          <td><a><?=$id?></a></td></br>
          <td><a><?=$pass?></a></td></br>
          <td><a><?=$name?></a></td></br>
          <td><a><?=$email?></a></td></br></br>
          <td><a><?=$data1_cpu?></a></td></br>
          <td><a><?=$data2_cpu?></a></td></br>
          <td><a><?=$data3_cpu?></a></td></br>
          <td><a><?=$data4_cpu?></a></td></br>
          <td><a><?=$data5_cpu?></a></td></br></br>
          <td><a><?=$data1_device?></a></td></br>
          <td><a><?=$data2_device?></a></td></br>
          <td><a><?=$data3_device?></a></td></br>
          <td><a><?=$data4_device?></a></td></br>
          <td><a><?=$data5_device?></a></td></br></br>


          <?php
          }

          ?>

</html>