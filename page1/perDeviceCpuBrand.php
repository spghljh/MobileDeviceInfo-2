<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
$sql = "select manf_cpu from mcl where name_cpu='$cpu_device'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$manf_cpu  = $row["manf_cpu"];


                              if(($manf_cpu ==='intel'))
                              {
                                ?>
                              <img class="percpuBrand" src="../page1/page1view_image/intel.png" width =100% height =100%>
                              
                              <?php
                              }

                              if(($manf_cpu ==='amd'))
                              {
                                ?>
                              <img class="percpuBrand" src="../page1/page1view_image/amd.png" width =100% height =100%>
                              <?php
                              }
?>