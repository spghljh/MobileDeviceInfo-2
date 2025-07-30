<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
     
          $sql1 = "select * from mdl where name_device='$name_device' ";		// 일련번호 내림차순 전체 레코드 검색
          $result1 = mysqli_query($con, $sql1);			// SQL 명령 실행
          $total_record1 = mysqli_num_rows($result1); // 전체 글 수
          for ($i=0; $i<$total_record1; $i++) {
          mysqli_data_seek($result1, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result1); // 하나의 레코드 가져오기

          $weight         = $row["weight_device"];	
          ?>

          <?php
          }
?>



<div class="line_spec">   
      <div class="chart_div">

      <div class="chart_div_image1" >
      <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:14px; color:white; width: 40px;">Wgt</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>무게</a>
                  </div>

               
                  
              </div>

              
              <div class="chart_div_image3" style="width:80px;">
                  <div>
                  <a class="chart_div_image3_parameter" href="../page2/page2_SearchModule_ResultPage.php?catgo=weight_device&search=<?=$weight_device?>"><?=$weight_device?></a>
                  </div>
              </div>

              <div class="chart_div_image4" style="width:45px;">
                  <div>
                  <a>kg</a>
                  </div>
              </div>


         
              <div class="chart_div_graph_device_nochart" >
              <div class="chart_div_graph_device_nochart_button" >
                  <a href="../page2/page2_SearchModule_ResultPage.php?catgo=weight_device&search=<?=$weight_device?>">유사한 무게의 다른 제품</a>
                  </div>
              </div>

      </div>   
</div>