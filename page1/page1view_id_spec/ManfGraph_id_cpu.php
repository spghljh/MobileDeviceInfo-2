<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
    
          $sql1 = "select * from mcl where name_cpu='$name_cpu' ";
          $result1 = mysqli_query($con, $sql1);
          $total_record1 = mysqli_num_rows($result1);
          for ($i=0; $i<$total_record1; $i++) {
          mysqli_data_seek($result1, $i);    	
          $row = mysqli_fetch_assoc($result1);

          $manf_cpu         = $row["manf_cpu"];	
          ?>

          <?php
          }
?>





<div class="line_spec">   
      <div class="chart_div">

      <div class="chart_div_image1">
                <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:15px; color:white; width: 40px;">Mnf</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>제조사</a>
                  </div>

               
                  
              </div>

              
        

              <div class="chart_div_image4" style="width:45px;">
              <div class="chart_div_image4_brand " style="margin-right:5px;">
                  <a href="../page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=<?=$manf_cpu?>" ><?php include $_SERVER['DOCUMENT_ROOT'].'/page1/percpuBrand.php'; ?></a>
                  </div>
              </div>

              <div class="chart_div_image3" style="width:100px; justify-content:left; font-size:20px;">
                  <div >
                  <a class="chart_div_image3_parameter" href="../page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=<?=$manf_cpu?>"><?=$manf_cpu?></a>
                  </div>
              </div>


            <div class="chart_div_graph_cpu_nochart">
            <div class="chart_div_graph_cpu_nochart_button" >
                    
                <a href="../page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=<?=$manf_cpu?>">

                    <a style=
                    "
                    color:#e0c2fe !important;
                    text-shadow:0 0 2px black !important;
                    font-weight:700 !important;
                    margin-right:-5px !important;
                    margin-left:-8px !important;
                    " href="../page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=<?=$manf_cpu?>"><?=$manf_cpu?>
                    </a>

                    <a href="../page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=<?=$manf_cpu?>">의 다른 제품</a>
                </a>

            </div>
            </div>












      </div>   
</div>