<head>
<title>page1.php</title>
<meta charset="utf-8">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
<link href="../css/page1_body.css" rel="stylesheet">
<link href="../css/page3.css" rel="stylesheet">
<link href="../css/page0_body_total.css" rel="stylesheet">
</head>





<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" ><!--div class="index_button_line1"-->
<div class="button_content1" style="flex-direction:column;"><!--div class="button_content1"-->


<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">
            <div class="Module_Layout_1_1_1_1_0">
            <a style="font-size:18px;">?</a>                                           
            </div>
            <div class="Module_Layout_1_1_1_1_1">

                <a class = "Module_Layout_1_1_1_1_1_0" onclick="location.href='./page1/page1_list.php'">MobileDeviceInfo</a>

            </div>

            <div class="Module_Layout_1_1_1_1_2">
                <a class = "Module_Layout_1_1_1_1_1_0" onclick="location.href='./page1/page1_list.php'"></a>                            
            </div>
        </div>
    </div>

<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1"><!--div class="Module_Layout_1_1_2_1"-->

            <div class="Module_Layout_1_1_2_1_1"> 
            <a class="mdi_a">MobileDeviceInfo</a><a>에서 제공하는 통계입니다.</a>
            </div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1"><!--모듈1-Start-->


<!--내용-->






<div class="mdi1">   




<div class="mdi_core_total">   
<?php include $_SERVER['DOCUMENT_ROOT'].'/page3/page3_mdi_2core.php';?>

<div class="mdi_core">   

  <div class="core001"><a class=core_nums>2</a><a class=core_texts>코어</a></div>
  <div class="core001_num">
    <div id="chart_div_core1" style="width: 900px; height:100px;"></div>
  </div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/page3/page3_mdi_4core.php';?>

<div class="mdi_core">   

  <div class="core001"><a class=core_nums>4</a><a class=core_texts>코어</a></div>
  <div class="core001_num">
    <div id="chart_div_core2" style="width: 900px; height:100px;"></div>
  </div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/page3/page3_mdi_6core.php';?>

<div class="mdi_core">   

  <div class="core001"><a class=core_nums>6</a><a class=core_texts>코어</a></div>
  <div class="core001_num">
    <div id="chart_div_core3" style="width: 900px; height:100px;"></div>
  </div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/page3/page3_mdi_8core.php';?>

<div class="mdi_core">   

  <div class="core001"><a class=core_nums>8</a><a class=core_texts>코어</a></div>
  <div class="core001_num">
    <div id="chart_div_core4" style="width: 900px; height:100px;"></div>
  </div>

</div>

</div>





<div class="mdi_corepie">   
<div id="mdi_CorePie" style="width: 800px; height: 400px;"></div>
</div>


</div>











<?php
/*
$select_query = "SELECT core_cpu, COUNT(id_cpu) FROM mcl GROUP BY core_cpu;";

$result_set = mysqli_query($con, $select_query);
mysqli_data_seek($result_set, 0);
$row = mysqli_fetch_row($result_set);



echo '$row : ';
print_r($row);
echo '<br>';

*/
?>