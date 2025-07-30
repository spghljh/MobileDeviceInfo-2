<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php

          $sql = "select * from mdl_manf_".$manf_device."_".$release_device." ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);	
          $total_record = mysqli_num_rows($result);

          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i);     	
          $row = mysqli_fetch_assoc($result);

          $n = $i;
          $str10= "cpu_device_name_";
          $result10 = $str10 . (string)$n;
          $cpu_device_name = $result10;


          $o = $i;
          $str11= "cpu_device_num_";
          $result11 = $str11 . (string)$o;
          $cpu_device_num = $result11;


 
          $cpu_device_name          = $row["cpu_device_name"];	
          $cpu_device_num           = $row["cpu_device_num"];	



    





          $p = $i;
          $str12= "chart_";
          $result12 = $str12 . (string)$p;
          $chart = $result12;




?>




<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});  
    google.charts.setOnLoadCallback(drawChart);


    var name = '<?php echo $cpu_device_name?>';
    document.write(anyNum);

                                          function drawChart(){

                                            var num = <?php echo $cpu_device_num?>;
                                            var data = google.visualization.arrayToDataTable([

                                              
                                              ['프로세서','탑재 수', { role: 'style' }],
                                      
                                              ['출시', num, '#f80185'],



                                            ]);




                                            var view = new google.visualization.DataView(data);
                                                  view.setColumns([0, 1, 2,
                                                      {
                                                          calc: "stringify",
                                                          sourceColumn: 1,
                                                          type: "string",
                                                          role: "annotation"
                                              

                                                      }]);



                                            

                                            var options = {
                                              backgroundColor:'transparent',
                                              chartArea: {width: '90%', height: '50%'},
                                              legend: { position: "none" },
                                              bar: { groupWidth: '100%' },

                                              hAxis: {
                                                viewWindowMode: 'maximized',
                                                showLabel: false,
                                                minValue: 0,
                                                maxValue: 5,

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
                                                textPosition: 'none'
                                              },


                                              annotations: {
                                                        textStyle: {
                                                          fontSize: 35,
                                                          bold: true,

                                                          color: 'white',

                                                          opacity: 1.8
                                                        }
                                                    }

                                            };




                                            var chart = new google.visualization.BarChart(document.getElementById('<?=$chart?>'));
                                            chart.draw(view, options);


                                          }

</script>




<?php

	$sql88 = "select * from mcl where name_cpu='$cpu_device_name'";	// 레코드 검색
	$result88 = mysqli_query($con, $sql88);			// SQL 명령 실행

	$rows = mysqli_fetch_assoc($result88);			// 레코드 가져오기

  $manf_cpu= $rows["manf_cpu"];		
  $core_cpu= $rows["core_cpu"];		

?>


<div class="chart_div_CpuGraph_line">

  <div class="chart_div_image_content_CpuGraph_CpuManf">












  <?php


      if(($manf_cpu ==='intel'))
      {
        ?>
      <img class="perBrand" src="../page2/page2view_image/intel.png" style="margin-left : -2px;">

      <?php
      }

      if(($manf_cpu ==='amd'))
      {
        ?>
      <img class="perBrand" src="../page2/page2view_image/amd.png" style="margin-left : -2px;">

      <?php
      }

      if(($manf_cpu ==='mediateck'))
      {
        ?>
      <img class="perBrand" src="../page2/page2view_image/mediateck.png" style="margin-left : -2px;">

      <?php
      }

      if(($manf_cpu ==='qualcomm'))
      {
        ?>
      <img class="perBrand" src="../page2/page2view_image/qualcomm.png" style="margin-left : -2px;">

      <?php
      }

?>


















  </div>








  <div class="chart_div_image_content_CpuGraph">
    <a><?=$cpu_device_name?></a>  
  </div>



  <div class="chart_div_graph_CpuGraph">
    <div id="<?=$chart?>" style="width: 100%; height:100%;">
    </div>
  </div>
  
</div>











<?php


}
?>
  