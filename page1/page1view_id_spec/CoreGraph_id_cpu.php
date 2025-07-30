<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php

          $result1 = mysqli_query($con, "select * from mcl where name_cpu='$name_cpu'");
          $sql1 = "select * from mcl where name_cpu='$name_cpu'";
          
          $total_record1 = mysqli_num_rows($result1);
          for ($i=0; $i<$total_record1; $i++) {
          mysqli_data_seek($result1, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result1); // 하나의 레코드 가져오기

          $core         = $row["core_cpu"];	
          $core1         = $row["core_cpu"];
          ?>

          <?php
          }
?>


<!DOCTYPE html>
<html lang="ko">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




<?php
if (($core1>=0)){

  ?>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

          
    var num01 = <?php echo $core1?>;



    function drawChart(){
      var data1 = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
 
        ['core', num01, '#f80185'],
                      


      ]);




      var view1 = new google.visualization.DataView(data1);
            view1.setColumns([0, 1, 2,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
        

                }]);



      

      var options1 = {
        backgroundColor:'transparent',
        chartArea: {width: '90%', height: '60%'},
        legend: { position: "none" },
        bar: { groupWidth: '100%' },

        hAxis: {
          viewWindowMode: 'maximized',
          showLabel: false,
          minValue: 0,
          maxValue: 12,

          textPosition: 'none',
          gridlines: {
          color: 'none'
          },
     
        
        },

        vAxis: {
          viewWindowMode: 'maximized',
          showLabel: false,
          textStyle: {
            fontSize: 26,
            bold: true
          },
          textPosition: 'none',


        },


        annotations: {
                   textStyle: {
                     fontSize: 22,
                     bold: true,

                     color: 'white',

                     opacity: 1.8
                   }
              }

      };




      var chart1 = new google.visualization.BarChart(document.getElementById('chart_div_core'));
      chart1.draw(view1, options1);
    }
  </script>
          <?php
          }
          
?>




</head>





<div class="line_spec">   
      <div class="chart_div">

              <div class="chart_div_image1" >
              <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:14px; color:white; width: 40px;">Core</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>코어 수</a>
                  </div>
              </div>

              
              <div class="chart_div_image3" >
                  <div onclick="location.href='../page3/page3.php' ">
                  <a class="chart_div_image3_parameter" href="../page1/page1_SearchModule_ResultPage.php?catgo=core_cpu&search=<?=$core_cpu?>"><?=$core_cpu?></a>
                  </div>
              </div>

              <div class="chart_div_image4" >
                  <div>
                  <a>코어</a>
                  </div>
              </div>


         
              <div class="chart_div_graph_core_cpu" >
                  <div id="chart_div_core" style="width: 100%; height:100%;" onclick="location.href='./page1_SearchModule_ResultPage.php?catgo=core_cpu&search=<?=$core_cpu?>' ">
                  </div>
              </div>

      </div>   
</div>



 