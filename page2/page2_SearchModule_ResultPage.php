<head>
<title>page2</title>
<meta charset="utf-8">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/main_header_menu_search.css" rel="stylesheet">
<link href="../css/page2_body.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
<link href="../css/page0_body_total.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link rel="stylesheet" href="../common/css/layout.css">
</head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>


<?php 
header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩


$con->set_charset("utf8");
function mq($sql)
{
    global $con;
    return $con->query($sql);
}


$catagory = $_GET['catgo'];
$search_con = $_GET['search'];

$sql2 = mq("select * from mdl where $catagory like '%$search_con%' order by id_device asc");


?>



<?php require $_SERVER['DOCUMENT_ROOT'].'/main_header.php';?>


<div class="ground"><!--div class="ground"-->
<div class="index_content"><!--div class="index_content"-->
<div class="index_button_line1" style="margin-top:30px;"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->





<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">

            <div class="Module_Layout_1_1_1_1_1">

            <div class="Module_Layout_1_1_1_1_0">
                <a style="font-size:18px;">D1</a>
            </div>

                    <a class = "Module_Layout_1_1_1_1_1_0_focus1">"</a>
                    <a class = "Module_Layout_1_1_1_1_1_0_focus2"><?=$search_con?></a>
                    <a class = "Module_Layout_1_1_1_1_1_0_focus1">"</a>
                    <a class = "Module_Layout_1_1_1_1_1_0_focus1">관련성</a>


            </div>

            <div class="Module_Layout_1_1_1_1_2_back" onclick="history.back()">
                <a class = "Module_Layout_1_1_1_1_1_0">뒤로가기</a>
            </div>
        </div>
    </div>

<div class="Module_Layout_1_1_2"><!--div class="Module_Layout_1_1_2"-->
<div class="Module_Layout_1_1_2_1"><!--div class="Module_Layout_1_1_2_1"-->

            <div class="Module_Layout_1_1_2_1_1"> 
                <a></a>
            </div>

<div class="Module_Layout_1_1_2_1_2"><!--div class="Module_Layout_1_1_2_1_2"-->
<div class="Module_Layout_1_1_2_1_2_1"><!--div class="Module_Layout_1_1_2_1_2_1"-->

<div class="Module1"><!--모듈1-Start-->










<table class="SearchResult_Table">


<?php


 while($row = $sql2->fetch_array())
{
    $id_device         = $row["id_device"];			// 일련번호
    $name_device        = $row["name_device"];		// 이름
    $manf_device        = $row["manf_device"];	
    $cpu_device        = $row["cpu_device"];
    $type_device        = $row["type_device"];	
    $release_device        = $row["release_device"];
    $weight_device        = $row["weight_device"];
?>


<tr class="SearchResult_Table_Row_page2">    

    <td>
        <div class="total1_image">
            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;"><a style="font-size:14px; color:white; width: 40px; margin-left:2px;">Dvic</a></div>
        </div>
    </td>

    <td>
        <div class="total1_type">
            <div class="total2_type"><a>디바이스</a></div>
        </div>
    </td>

    <td>
        <div class="total1_manf_image">
            <div class="total2_manf_image"><?php include "./perBrand.php"; ?></div>
        </div>
    </td>

    <td>
        <div class="total1_name_device">
            <div class="total2_name_device"><a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$name_device?></a></div>
        </div>
    </td>
   
    <td style="margin-left:-30px">
        <div class="total1_cpuindevice">
            <div class="total2_cpuindevice"><a href="../page2/page2view_id.php?id_device=<?=$id_device?>"><?=$cpu_device?></a></div>
        </div>
    </td>

</tr>





<?php
}


?>
            
</table>







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