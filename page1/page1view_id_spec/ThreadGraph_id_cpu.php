<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
      
          $sql2 = "select * from mcl where name_cpu='$name_cpu' ";		// 일련번호 내림차순 전체 레코드 검색
          $result2 = mysqli_query($con, $sql2);			// SQL 명령 실행
          $total_record2 = mysqli_num_rows($result2); // 전체 글 수
          for ($i=0; $i<$total_record2; $i++) {
          mysqli_data_seek($result2, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result2); // 하나의 레코드 가져오기

          $thread         = $row["thread_cpu"];	
          $thread1         = $row["thread_cpu"];	
          ?>

          <?php
          }
?>


<!DOCTYPE html>
<html lang="ko">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<?php
if (($thread1>=0)){

  ?>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

          
    var num02 = <?php echo $thread1?>;



    function drawChart(){
      var data2 = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
 
        ['thread', num02, '#f80185'],



      ]);




      var view2 = new google.visualization.DataView(data2);
            view2.setColumns([0, 1, 2,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
        

                }]);



      

      var options2 = {
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
          color: 'transparent'
          }
   
        },

        vAxis: {
          viewWindowMode: 'maximized',
          showLabel: false,
          textStyle: {
            fontSize: 26,
            bold: true
          },
          textPosition: 'none'
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




      var chart2 = new google.visualization.BarChart(document.getElementById('chart_div_thread'));
      chart2.draw(view2, options2);
    }
  </script>
          <?php
          }
          
?>




</head>





<body>  


<?php
if ($thread1>=0){
?>

<div class="line_spec">   
      <div class="chart_div">

              <div class="chart_div_image1" >
              <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:14px; color:white; width: 40px;">Thrd</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>스레드 수</a>
                  </div>
                
              </div>

              <div class="chart_div_image3" >
                  <div onclick="location.href='../page3/page3.php' ">
                  <a class="chart_div_image3_parameter" href="../page1/page1_SearchModule_ResultPage.php?catgo=thread_cpu&search=<?=$thread_cpu?>"><?=$thread_cpu?></a>
                  </div>
              </div>

              
              <div class="chart_div_image4" >
                  <div>
                  <a>스레드</a>
                  </div>
              </div>

      
              
              <div class="chart_div_graph_thread_cpu" >
                  <div id="chart_div_thread" style="width: 100%; height:100%;" onclick="location.href='./page1_SearchModule_ResultPage.php?catgo=thread_cpu&search=<?=$thread_cpu?>' ">
                  </div>
              </div>

      </div>   
</div>



    <?php
}
?>

                          