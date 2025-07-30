
<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php



if ($con->connect_error) { 
die("Connection failed: " . $con->connect_error);
}

$query = "SELECT * FROM mdl";
$data = mysqli_query($con, $query);
$total_rows = mysqli_num_rows($data);


?>







<?php



                $k = $manf_device;
                $str3= "mdl_manf_";
                $result3 = $str3 . (string)$k;

                $auto4 = $result3;




                // Create connection
                
                // Check connection
                if ($con->connect_error) { 
                die("Connection failed: " . $con->connect_error);
                }


                // sql to create table
                $sql = "CREATE TABLE $auto4 (";
                $sql .= "ids INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
                $sql .= "name_device VARCHAR(100),";
                $sql .= "manf_device VARCHAR(100),";
                $sql .= "cpu_device VARCHAR(100),";
                $sql .= "lineup_device VARCHAR(100),";
                $sql .= "release_device VARCHAR(100)";
                $sql .= ")";
            
                $res4 = $con->query($sql);


                // DB 연결


                
                $sql1 = "SELECT * FROM mdl WHERE manf_device='$k' AND release_device='$release_device' ";		// 일련번호 내림차순 전체 레코드 검색
                $result1 = mysqli_query($con, $sql1);			// SQL 명령 실행

                
                while ($row = mysqli_fetch_assoc($result1)){
                    $name_device= $row['name_device'];
                    $manf_device=$row['manf_device'];
                    $cpu_device=$row['cpu_device'];
                    $lineup_device=$row['lineup_device'];
                    $release_device=$row['release_device'];

                    mysqli_query($con,"INSERT INTO $auto4 (name_device, manf_device, cpu_device, lineup_device, release_device) VALUES ('$name_device','$manf_device','$cpu_device','$lineup_device',' $release_device')");
          
                }

       






// $auto4 : MDL_MANF_hp
// $result50 : MDL_MANF_hp_

                $l2 = '_';
                $m = $release_device;

                $result50 = $auto4 . (string)$l2;
                $result5 = $result50 . (string)$m;  
        
                $auto6 = $result5;



                // Create connection
                
                // Check connection
                if ($con->connect_error) { 
                die("Connection failed: " . $con->connect_error);
                }


                // sql to create table
                $sql = "CREATE TABLE $auto6 (";
                $sql .= "ids INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
                $sql .= "id_cpu VARCHAR(100),";
                $sql .= "cpu_device_name VARCHAR(100),";
                $sql .= "cpu_device_num VARCHAR(100)";
                $sql .= ")";
            
                $res4 = $con->query($sql);


              







                
                

                $result = mysqli_query($con, "SELECT cpu_device, COUNT(name_device) AS count FROM mdl_manf_".$manf_device." GROUP BY cpu_device");	
                $sql = "SELECT cpu_device, COUNT(name_device) AS count FROM mdl_manf_".$manf_device." GROUP BY cpu_device";	

    

                while($row = mysqli_fetch_assoc($result)){
                            $cpu_device= $row['cpu_device'];
                            $count=$row['count'];
                            $sql2 = "INSERT INTO $auto6 (cpu_device_name, cpu_device_num) VALUES ('$cpu_device', '$count')";
                            $result3 = mysqli_query($con, $sql2);			// SQL 명령 실행
                




                }



                


?>


