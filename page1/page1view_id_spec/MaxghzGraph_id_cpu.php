<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
  
          $sql3 = "select * from mcl where name_cpu='$name_cpu' ";		// 일련번호 내림차순 전체 레코드 검색
          $result3 = mysqli_query($con, $sql3);			// SQL 명령 실행
          $total_record3 = mysqli_num_rows($result3); // 전체 글 수
          for ($i=0; $i<$total_record3; $i++) {
          mysqli_data_seek($result3, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result3); // 하나의 레코드 가져오기

          $maxghz         = $row["maxghz_cpu"];	
          $maxghz1         = $row["maxghz_cpu"];	
          ?>

          <?php
          }
?>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                     


<?php
if (($maxghz1>=0)){

  ?>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

          
    var num03 = <?php echo $maxghz1?>;



    function drawChart(){
      var data3 = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
 
        ['maxghz', num03, '#f80185'],



      ]);




      var view3 = new google.visualization.DataView(data3);
            view3.setColumns([0, 1, 2,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
        

                }]);



      

      var option3 = {
        backgroundColor:'transparent',
        chartArea: {width: '90%', height: '60%'},
        legend: { position: "none" },
        bar: { groupWidth: '100%' },

        hAxis: {
          viewWindowMode: 'maximized',
          showLabel: false,
          minValue: 0,
          maxValue: 5,

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
                     colors: ['#f07f09'],

                     opacity: 1.8
                   }
              }

      };




      var chart3 = new google.visualization.BarChart(document.getElementById('chart_div_maxghz'));
      chart3.draw(view3, option3);
    }
  </script>
          <?php
          }
          
?>




</head>





<body>  


<?php
if ($maxghz1>=0){
?>
<div class="line_spec">   
      <div class="chart_div">

              <div class="chart_div_image1" >
              <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;">
                    <a style="font-size:14px; color:white; width: 40px;">Max</a>                                   
                </div>
              </div>

              <div class="chart_div_image2" >
                  <div>
                  <a>최고 속도</a>
                  </div>

              
                  
              </div>

              <div class="chart_div_image3" >
                  <div onclick="location.href='../page3/page3.php' ">
                  <a class="chart_div_image3_parameter" href="../page1/page1_SearchModule_ResultPage.php?catgo=maxghz_cpu&search=<?=$maxghz_cpu?>"><?=$maxghz_cpu?></a>
                  </div>
              </div>

              <div class="chart_div_image4" >
                  <div>
                  <a>Ghz</a>
                  </div>
              </div>

              <div class="chart_div_graph_maxghz_cpu" >
                  <div id="chart_div_maxghz" style="width: 100%; height:100%;" onclick="location.href='./page1_SearchModule_ResultPage.php?catgo=maxghz_cpu&search=<?=$maxghz_cpu?>' ">
                  </div>
              </div>

      </div>   
</div>


<?php
}
?>
