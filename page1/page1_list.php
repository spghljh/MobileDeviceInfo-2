<head>
<title>page1.php</title>
<meta charset="utf-8">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
<link href="../css/page1_body.css" rel="stylesheet">
<link href="../css/page0_body_total.css" rel="stylesheet">

<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/main_header.php';?>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    google.load("visualization", {'packages':['corechart']});
    google.setOnLoadCallback(drawChart);
    function drawChart() 
    {
        var data = google.visualization.arrayToDataTable(
            [
            ["코어 수", "빈도"],
            ["2 코어", <?=$cnt1?>],
            ["4 코어", <?=$cnt2?>],
            ["6 코어", <?=$cnt3?>],
            ["8 코어", <?=$cnt4?>]
          ]
        );

        
        var options = {
            chartArea: {width: '85%', height: '85%'},
            backgroundColor:'transparent',
            legend: { position: "none" },
            colors: ['#fdd7e9', '#fe9fd1', '#fe5cb2', '#bc0064']
    
          
        };
        var chart = new google.visualization.PieChart(document.getElementById("mdi_CorePie"));
        chart.draw(data, options);
    }
</script>











</head>



<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" style="margin-top:30px;"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->



<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">
            <div class="Module_Layout_1_1_1_1_0"><a style="font-size:18px;">P1</a></div>
            <div class="Module_Layout_1_1_1_1_1"><a class = "Module_Layout_1_1_1_1_1_0_page">프로세서 목록</a></div>
            <div class="Module_Layout_1_1_1_1_2_back" onclick="history.back()"><a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a></div>
        </div>
    </div>

<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1"><!--div class="Module_Layout_1_1_2_1"-->

        <div class="Module_Layout_1_1_2_1_1" style="margin-left : 10px; margin-bottom:1px; margin-top:25px;"> 
        <a class="mdi_a" style="font-size : 30px !important;">MobileDeviceInfo</a><a style="font-size : 24px !important;">에서 제공하는</a><a class="mdi_a">프로세서 탐색</a><a style="font-size : 24px !important;">을 시작하세요.</a>
        </div>

        <div class="Module_Layout_1_1_2_1_1" style="margin-left : 40px; margin-top: 10px;">
        <a>프로세서의 코어 분포를 확인하거나, 목록에서 직접 탐색할 수 있습니다.</a>
        </div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1"><!--모듈1-Start-->

<!--내용-->




<div style="margin-left:40px;">
<?php include $_SERVER['DOCUMENT_ROOT'].'/page3/page3_mdi_module.php';?>
</div>




<table class="cpulist_table_page1" >

        <?php
 
        $result = mysqli_query($con, "select * from mcl order by id_cpu asc");
        $sql="select * from MCL order by id_cpu asc";

        if($result == false) {
            die("<pre>".mysqli_error($con)."\n$sql</pre>");
          }


        $total_record = mysqli_num_rows($result); // 전체 글 수
        for ($i=0; $i<$total_record; $i++) {
        mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
        $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기
        $id_cpu         = $row["id_cpu"];			// 일련번호
        $name_cpu        = $row["name_cpu"];		// 이름
        $manf_cpu        = $row["manf_cpu"];	
        $core_cpu        = $row["core_cpu"];	
        $thread_cpu        = $row["thread_cpu"];
        $maxghz_cpu        = $row["maxghz_cpu"];	
        $minghz_cpu        = $row["minghz_cpu"];	
        ?>

<tr class="SearchResult_Table_Row_page1">   

    <td>
        <div class="total1_image">
            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;"><a style="font-size:14px; color:white; width: 40px;">Proc</a></div>
        </div>
    </td>


    <td>
        <div class="total1_type">
            <div class="total2_type"><a>프로세서</a></div>
        </div>
    </td>


    <td>
        <div class="total1_manf_image">
            <div class="total2_manf_image"><?php include "./percpuBrand.php"; ?></div>
        </div>
    </td>

    <td>
        <div class="total1_name">
            <div class="total2_name"><a href="../page1/page1view_id.php?id_cpu=<?=$id_cpu?>"><?=$name_cpu?></a></div>
        </div>
    </td>

    <td style="margin-left:-15px">
        <div class="total1_c">
            <div class="total2_c"><a><?=$core_cpu?></a><a style="font-size:16px; margin-left:3px; margin-top:3px;">코어</a></div>
        </div>
    </td>

    <td>
        <div class="total1_t">
            <div class="total2_t"><a style="font-size:16px; margin-right:5px; margin-left:-12px;">최고</a><a><?=$maxghz_cpu?></a><a style="font-size:16px; margin-left:5px;">Ghz</a></div>
        </div>
    </td>

</tr>

<?php
        }
   
        $select_query = "SELECT id_cpu, name_cpu FROM mcl";
        $result_set = mysqli_query($con, $select_query);
        mysqli_data_seek($result_set, 2);
        $row = mysqli_fetch_row($result_set);
        mysqli_close($con);

?>
</table>
<!--내용-->

</div><!--모듈1-End-->

</div><!--div class="Module_Layout_1_1_2_1_2_1"-->
</div><!--div class="Module_Layout_1_1_2_1_2"-->
</div><!--div class="Module_Layout_1_1_2_1"-->
</div><!--div class="Module_Layout_1_1_2"-->
</div><!--div class="Module_Layout_1_1"-->
</div><!--div class="Module_Layout_1"-->

</div><!--div class="button_content1"-->
</div><!--div class="index_button_line1"-->
</div><!--div class="index_content"-->
</div><!--div class="ground"-->

