<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php

          $sql1 = "select * from mcl where name_cpu='$name_cpu' ";		// 일련번호 내림차순 전체 레코드 검색
          $result1 = mysqli_query($con, $sql1);
          $total_record1 = mysqli_num_rows($result1); // 전체 글 수
          for ($i=0; $i<$total_record1; $i++) {
          mysqli_data_seek($result1, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result1); // 하나의 레코드 가져오기

          $release_cpu         = $row["release_cpu"];	
          ?>

          <?php
          }
?>






<div class="line_spec">   
      <div class="chart_div">

      <div class="chart_div_image1" >
      <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:15px; color:white; width: 40px;">Rel</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>제품 출시</a>
                  </div>

               
                  
              </div>

              
              <div class="chart_div_image3" style="width:80px; justify-content:left;">
                  <div onclick="location.href='../page3/page3.php' ">
                  <a class="chart_div_image3_parameter" style="padding-left: 30px;" href="../page1/page1_SearchModule_ResultPage.php?catgo=release_cpu&search=<?=$release_cpu?>"><?=$release_cpu?></a>
                  </div>
              </div>

              <div class="chart_div_image4" style="width:30px;">
                  <div>
                  <a>년</a>
                  </div>
              </div>

            


         
            <div class="chart_div_graph_cpu_nochart" style="width:400px;">
            <div class="chart_div_graph_cpu_nochart_button" >
                <a href="../page1/page1_SearchModule_ResultPage.php?catgo=release_cpu&search=<?=$release_cpu?>">
                    
                    <a style=
                    "
                    color:#e0c2fe !important;
                    text-shadow:0 0 2px black !important;
                    font-weight:700 !important;
                    margin-right:-5px !important;
                    margin-left:-8px !important;
                    " href="../page1/page1_SearchModule_ResultPage.php?catgo=release_cpu&search=<?=$release_cpu?>"><?=$release_cpu?></a>

                    <a href="../page1/page1_SearchModule_ResultPage.php?catgo=release_cpu&search=<?=$release_cpu?>">년 출시한 다른 제품</a>
                </a>
            </div>
            </div>






            
      </div>   
</div>