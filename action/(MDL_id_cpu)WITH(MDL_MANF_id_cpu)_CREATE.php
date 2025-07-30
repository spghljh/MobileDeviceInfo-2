<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php




if ($con->connect_error) { 
die("Connection failed: " . $con->connect_error);
}

$query = "SELECT * FROM mcl";
$data = mysqli_query($con, $query);
$total_rows = mysqli_num_rows($data);


?>



<?php


{
$i = $id_cpu;
$MCL_MAX = $total_rows;


                $str1= "MDL_";
                $result1 = $str1 . (string)$i;

                $auto = $result1;


  


                // Check connection
                if ($con->connect_error) { 
                die("Connection failed: " . $con->connect_error);
                }

                // sql to create table
                $sql = "CREATE TABLE $auto (";
                $sql .= "ids INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
                $sql .= "name_device VARCHAR(100),";
                $sql .= "manf_device VARCHAR(100),";
                $sql .= "cpu_device VARCHAR(100)";
                $sql .= ")";

                $res = $con->query($sql);

      
                // DB 연결









                $sql1 = "SELECT * FROM mcl WHERE id_cpu=$i";		// 일련번호 내림차순 전체 레코드 검색
                $result1 = mysqli_query($con, $sql1);			// SQL 명령 실행

                
                while ($row = mysqli_fetch_assoc($result1)){
             
                    $j= $row['name_cpu'];
                    $id_cpu=$row['id_cpu'];
                }






















                $sql1 = "SELECT * FROM mdl WHERE cpu_device='$j'";		// 일련번호 내림차순 전체 레코드 검색
                $result1 = mysqli_query($con, $sql1);			// SQL 명령 실행

                
                while ($row = mysqli_fetch_assoc($result1)){
 

                    $name_device= $row['name_device'];
                    $manf_device=$row['manf_device'];
                    $cpu_device=$row['cpu_device'];

                    mysqli_query($con,"INSERT INTO $auto (name_device, manf_device, cpu_device) VALUES ('$name_device','$manf_device','$cpu_device')");
              
                }



























                $str2= "MDL_MANF_";
                $result2 = $str2 . (string)$i;


                     
                     $auto2 = $result2;
            
            

            
                            // Create connection
        
                            // Check connection
                            if ($con->connect_error) { 
                            die("Connection failed: " . $con->connect_error);
                            }
            
                            // sql to create table
                            $sql = "CREATE TABLE $auto2 (";
                            $sql .= "ids INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
                            $sql .= "manf_device_name VARCHAR(100),";
                            $sql .= "manf_device_num VARCHAR(100)";
                            $sql .= ")";
            
                            $res = $con->query($sql);
            
                         
                    
            













































            
            
                      
                            $sql = "SELECT COUNT(*) AS manf_device FROM $auto WHERE manf_device = 'hp'";		// 일련번호 내림차순 전체 레코드 검색
                            $result2 = mysqli_query($con, $sql);			// SQL 명령 실행
                            $total_record2 = mysqli_num_rows($result2); // 전체 글 수
                            $row2 = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기
                            $count2= $row2["manf_device"];	
                            ?>
                            
                            <?php
                            
           
                            
       
                            $sql = "INSERT INTO $auto2 (manf_device_name, manf_device_num) VALUES ('hp', '$count2')";
                         

                            $res = $con->query($sql);




                          
                            $sql = "SELECT COUNT(*) AS manf_device FROM $auto WHERE manf_device = 'asus'";		// 일련번호 내림차순 전체 레코드 검색
                            $result2 = mysqli_query($con, $sql);			// SQL 명령 실행
                            $total_record2 = mysqli_num_rows($result2); // 전체 글 수
                            $row2 = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기
                            $count2= $row2["manf_device"];	
                            ?>
                            
                            <?php
                            
                            // Create connection
                            
                            // Check connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }
                            $sql = "INSERT INTO $auto2 (manf_device_name, manf_device_num) VALUES ('asus', '$count2')";
                      


                            $res = $con->query($sql);

                        
                            
                
                            $sql = "SELECT COUNT(*) AS manf_device FROM $auto WHERE manf_device = 'msi'";		// 일련번호 내림차순 전체 레코드 검색
                            $result2 = mysqli_query($con, $sql);			// SQL 명령 실행
                            $total_record2 = mysqli_num_rows($result2); // 전체 글 수
                            $row2 = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기
                            $count2= $row2["manf_device"];	
                            ?>
                            
                            <?php
                
          
                            // Check connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }
                            $sql = "INSERT INTO $auto2 (manf_device_name, manf_device_num) VALUES ('msi', '$count2')";
                        
                            $res = $con->query($sql);




                            		// DB 연결
                            $sql = "SELECT COUNT(*) AS manf_device FROM $auto WHERE manf_device = 'samsung'";		// 일련번호 내림차순 전체 레코드 검색
                            $result2 = mysqli_query($con, $sql);			// SQL 명령 실행
                            $total_record2 = mysqli_num_rows($result2); // 전체 글 수
                            $row2 = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기
                            $count2= $row2["manf_device"];	
                            ?>
                            
                            <?php
                            
                            // Create connection
                            
                            // Check connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }
                            $sql = "INSERT INTO $auto2 (manf_device_name, manf_device_num) VALUES ('samsung', '$count2')";
                        

                            $res = $con->query($sql);




                            		// DB 연결
                            $sql = "SELECT COUNT(*) AS manf_device FROM $auto WHERE manf_device = 'lg'";		// 일련번호 내림차순 전체 레코드 검색
                            $result2 = mysqli_query($con, $sql);			// SQL 명령 실행
                            $total_record2 = mysqli_num_rows($result2); // 전체 글 수
                            $row2 = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기
                            $count2= $row2["manf_device"];	
                            ?>
                            
                            <?php
                            
                            // Create connection
                            
                            // Check connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }
                            $sql = "INSERT INTO $auto2 (manf_device_name, manf_device_num) VALUES ('lg', '$count2')";
                        



                            $res = $con->query($sql);

                            		// DB 연결
                            $sql = "SELECT COUNT(*) AS manf_device FROM $auto WHERE manf_device = 'dell'";		// 일련번호 내림차순 전체 레코드 검색
                            $result2 = mysqli_query($con, $sql);			// SQL 명령 실행
                            $total_record2 = mysqli_num_rows($result2); // 전체 글 수
                            $row2 = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기
                            $count2= $row2["manf_device"];	
                            ?>
                            
                            <?php
                            
                            // Create connection
                            
                            // Check connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }
                            $sql = "INSERT INTO $auto2 (manf_device_name, manf_device_num) VALUES ('dell', '$count2')";
                    

                            $res = $con->query($sql);


            














}

?>



