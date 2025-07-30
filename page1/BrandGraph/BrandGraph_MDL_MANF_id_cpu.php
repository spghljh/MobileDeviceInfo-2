<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='hp' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name1         = $row["manf_device_name"];	
          $manf_device_num1         = $row["manf_device_num"];	

          ?>

          <?php
          }
?>
<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='asus' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name2         = $row["manf_device_name"];	
          $manf_device_num2         = $row["manf_device_num"];	

          ?>

          <?php
          }
          ?>

<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='msi' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name3         = $row["manf_device_name"];	
          $manf_device_num3         = $row["manf_device_num"];	

          ?>

          <?php
          }
          ?>

<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='samsung' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name4         = $row["manf_device_name"];	
          $manf_device_num4         = $row["manf_device_num"];	

          ?>

          <?php
          }
          ?>

<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='lg' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name5         = $row["manf_device_name"];	
          $manf_device_num5         = $row["manf_device_num"];	

          ?>

          <?php
          }
          ?>

<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='dell' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name6         = $row["manf_device_name"];	
          $manf_device_num6         = $row["manf_device_num"];	

          ?>

          <?php
          }
          ?>






















<!DOCTYPE html>
<html lang="ko">
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='hp' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name1         = $row["manf_device_name"];	
          $manf_device_num1         = $row["manf_device_num"];	

          ?>
          <?php
          }
?>



<?php
if (($manf_device_num1>0)){

  ?>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

          
    var num1 = <?php echo $manf_device_num1?>;



    function drawChart(){
      var data1 = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
 
        ['hp', num1, '#f80185'],



      ]);




      var view = new google.visualization.DataView(data1);
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
          maxValue: 10,
          gridlines: {
          color: 'transparent'
          }, 
          textPosition: 'none'
   
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




      var chart = new google.visualization.BarChart(document.getElementById('chart_div_BrandGraph_hp'));
      chart.draw(view, options);
    }
  </script>
          <?php
          }
          
?>













<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='asus' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name2         = $row["manf_device_name"];	
          $manf_device_num2         = $row["manf_device_num"];	

          ?>
          <?php
          }
?>
<?php
if (($manf_device_num2>0)){
  ?>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);


 
    var num2 = <?php echo $manf_device_num2?>;



    function drawChart(){
      var data = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
        
    
        ['asus', num2, '#f80185'],
 



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
          maxValue: 10,
          gridlines: {
          color: 'transparent'
          }, 
          textPosition: 'none'
   
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




      var chart = new google.visualization.BarChart(document.getElementById('chart_div_BrandGraph_asus'));
      chart.draw(view, options);
    }
  </script>
          <?php
          }
          else{
            ?>
            <script type="text/javascript">document.getElementById('divasus').style.display = 'none';</script>
            <?php
            }

?>







<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='msi' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name3         = $row["manf_device_name"];	
          $manf_device_num3         = $row["manf_device_num"];	

          ?>
          <?php
          }
?>
<?php
if (($manf_device_num3>0)){
  ?>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);


    var num3 = <?php echo $manf_device_num3?>;



    function drawChart(){
      var data = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
        
    
        ['msi', num3, '#f80185'],
 



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
          maxValue: 10,
          gridlines: {
          color: 'transparent'
          }, 
          textPosition: 'none'
   
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




      var chart = new google.visualization.BarChart(document.getElementById('chart_div_BrandGraph_msi'));
      chart.draw(view, options);
    }
  </script>
          <?php
          }
?>




<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='samsung' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name4         = $row["manf_device_name"];	
          $manf_device_num4         = $row["manf_device_num"];	

          ?>
          <?php
          }
?>
<?php
if (($manf_device_num4>0)){
  ?>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);


    var num4 = <?php echo $manf_device_num4?>;



    function drawChart(){
      var data = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
        
    
        ['samsung', num4, '#f80185'],
 



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
          maxValue: 10,
          gridlines: {
          color: 'transparent'
          }, 
          textPosition: 'none'
   
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




      var chart = new google.visualization.BarChart(document.getElementById('chart_div_BrandGraph_samsung'));
      chart.draw(view, options);
    }
  </script>
          <?php
          }

?>






<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='lg' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name5         = $row["manf_device_name"];	
          $manf_device_num5         = $row["manf_device_num"];	

          ?>
          <?php
          }
?>

<?php
if (($manf_device_num5>0)){
  ?>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);


    var num5 = <?php echo $manf_device_num5?>;


    function drawChart(){
      var data = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
        
    
        ['lg', num5, '#f80185'],
 



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
          maxValue: 10,
          gridlines: {
          color: 'transparent'
          }, 
          textPosition: 'none'
   
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




      var chart = new google.visualization.BarChart(document.getElementById('chart_div_BrandGraph_lg'));
      chart.draw(view, options);
    }
  </script>

<?php
          }
?>





<?php
          		// DB 연결
          $sql = "select * from MDL_MANF_".$id_cpu." where manf_device_name='dell' ";		// 일련번호 내림차순 전체 레코드 검색
          $result = mysqli_query($con, $sql);			// SQL 명령 실행
          $total_record = mysqli_num_rows($result); // 전체 글 수
          for ($i=0; $i<$total_record; $i++) {
          mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
          $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

          $manf_device_name6         = $row["manf_device_name"];	
          $manf_device_num6         = $row["manf_device_num"];	

          ?>
          <?php
          }
?>
<?php
if (($manf_device_num6>0)){
  ?>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);


    var num6 = <?php echo $manf_device_num6?>;


    function drawChart(){
      var data = google.visualization.arrayToDataTable([

        
        ['제조사','모델 수', { role: 'style' }],
        
    
        ['dell', num6, '#f80185'],
 



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
          maxValue: 10,
          gridlines: {
          color: 'transparent'
          }, 
          textPosition: 'none'
   
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




      var chart = new google.visualization.BarChart(document.getElementById('chart_div_BrandGraph_dell'));
      chart.draw(view, options);
    }
  </script>
          <?php
          }
?>


</head>

<div class = "chart_div_BrandGraph_line">



<?php
if ($manf_device_num1>0){
?>






<div id="hp">

    <div class="chart_div_BrandGraph">

        <div class="chart_div_BrandGraph_image1" >
            <div class="chart_div_BrandGraph_image_content">
            <?php include "./perBrand.php"; ?>
            </div>
        </div>

        <div class="chart_div_BrandGraph_image2" >
          <div class="chart_div_BrandGraph_graph" >
              <div id="chart_div_BrandGraph_hp" style="width: 100%; height:100%;">
              </div>
          </div>
        </div>
    </div>


</div>

    <?php
}
?>







<?php
if ($manf_device_num2>0){
?>
<div id="asus">

<div class="chart_div_BrandGraph">

    <div class="chart_div_BrandGraph_image1" >
        <div class="chart_div_BrandGraph_image_content">
        <a><?php include "./perBrand.php"; ?></a>
        </div>
    </div>

    <div class="chart_div_BrandGraph_image2" >
      <div class="chart_div_BrandGraph_graph" >
          <div id="chart_div_BrandGraph_asus" style="width: 100%; height:100%;">
          </div>
      </div>
    </div>
</div>


</div>

<?php
}
?>

<?php
if ($manf_device_num3>0){
?>
<div id="msi">

<div class="chart_div_BrandGraph">

    <div class="chart_div_BrandGraph_image1" >
        <div class="chart_div_BrandGraph_image_content">
        <a>msi</a>
        </div>
    </div>

    <div class="chart_div_BrandGraph_image2" >
      <div class="chart_div_BrandGraph_graph" >
          <div id="chart_div_BrandGraph_msi" style="width: 100%; height:100%;">
          </div>
      </div>
    </div>
</div>


  <?php
}
?>

<?php
if ($manf_device_num4>0){
?>
<div id="samsung">

<div class="chart_div_BrandGraph">

    <div class="chart_div_BrandGraph_image1" >
        <div class="chart_div_BrandGraph_image_content">
        <a>samsung</a>
        </div>
    </div>

    <div class="chart_div_BrandGraph_image2" >
      <div class="chart_div_BrandGraph_graph" >
          <div id="chart_div_BrandGraph_samsung" style="width: 100%; height:100%;">
          </div>
      </div>
    </div>
</div>

  <?php
}
?>

<?php
if ($manf_device_num5>0){
?>
<div id="lg">

<div class="chart_div_BrandGraph">

    <div class="chart_div_BrandGraph_image1" >
        <div class="chart_div_BrandGraph_image_content">
        <a>lg</a>
        </div>
    </div>

    <div class="chart_div_BrandGraph_image2" >
      <div class="chart_div_BrandGraph_graph" >
          <div id="chart_div_BrandGraph_lg" style="width: 100%; height:100%;">
          </div>
      </div>
    </div>
</div>
  <?php
}
?>

<?php
if ($manf_device_num6>0){
?>
<div id="dell">

<div class="chart_div_BrandGraph">

    <div class="chart_div_BrandGraph_image1" >
        <div class="chart_div_BrandGraph_image_content">
        <a>dell</a>
        </div>
    </div>

    <div class="chart_div_BrandGraph_image2" >
      <div class="chart_div_BrandGraph_graph" >
          <div id="chart_div_BrandGraph_dell" style="width: 100%; height:100%;">
          </div>
      </div>
    </div>
</div>


</div>


  <?php
}
?>













</div>