<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
       
          $sql1 = "select * from mdl where name_device='$name_device' ";		// 일련번호 내림차순 전체 레코드 검색
          $result1 = mysqli_query($con, $sql1);			// SQL 명령 실행
          $total_record1 = mysqli_num_rows($result1); // 전체 글 수
          for ($i=0; $i<$total_record1; $i++) {
          mysqli_data_seek($result1, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result1); // 하나의 레코드 가져오기

          $type         = $row["type_device"];	
          ?>

          <?php
          }
?>



<div class="line_spec">   
      <div class="chart_div">

      <div class="chart_div_image1" >
      <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:13px; color:white; width: 40px;">Type</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>기기 유형</a>
                  </div>
              </div>

            

              <div class="chart_div_image4" style="width:45px;">
              <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:15px; color:white; width: 40px;">Lap</a>                                   
                </div>
              </div>

              <div class="chart_div_image3" style="width:80px; justify-content:left;">
                  <div onclick="location.href='../page3/page3.php' ">
                  <a class="chart_div_image3_parameter" href="../page2/page2_SearchModule_ResultPage.php?catgo=type_device&search=<?=$type_device?>"><?=$type_device?></a>
                  </div>
              </div>


         
              <div class="chart_div_graph_device_nochart_type" >
                <div class="chart_div_graph_device_nochart_type1" >
                  <a href="../page2/page2_SearchModule_ResultPage.php?catgo=type_device&search=laptop">laptop</a>
                  </div>
                  <div class="chart_div_graph_device_nochart_type2" >
                  <a href="../page2/page2_SearchModule_ResultPage.php?catgo=type_device&search=smartphone">smartphone</a>
                  </div>
              </div>

      </div>   
</div>