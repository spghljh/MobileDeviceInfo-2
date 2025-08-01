<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php 
header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩


$con->set_charset("utf8");
function mq($sql)
{
    global $con;
    return $con->query($sql);
}
?>


<?php

	
$category = $_GET['catgo'];
$search_con = $_GET['search'];

$sql2 = mq("select * from total_start where $category like '%$search_con%'");

?>




<?php


            while( $row = $sql2->fetch_array() ) 
            {
                $start  = $row["start"];	
                echo "$search_con";
            

                             
              
                if($search_con=='intel'){
                    include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0_SearchModule_ResultPage_manf_cpu2.php';
                }
                else if($search_con=='amd'){
                    include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0_SearchModule_ResultPage_manf_cpu2.php';
                }
     
                else if($search_con=='hp'){
                    include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0_SearchModule_ResultPage_manf_device.php';
                }

                else if($search_con=='asus'){
                    include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0_SearchModule_ResultPage_manf_device.php';
                }
                else {
                include $_SERVER['DOCUMENT_ROOT'].'/resources/views/page0_total/page0_SearchModule_ResultPage_name2.php';
                }
           
  
                
            }




?>