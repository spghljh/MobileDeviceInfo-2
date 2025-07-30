<head>
<title>page1</title>
<meta charset="utf-8">
<link href="../css/all.css" rel="stylesheet">
<link href="../css/main_header.css" rel="stylesheet">
<link href="../css/user.css" rel="stylesheet">
<link href="../css/index_body.css" rel="stylesheet">
<link href="../css/page1_body.css" rel="stylesheet">
<link href="../css/page0_body_total.css" rel="stylesheet">
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

$sql2 = mq("select * from mcl where $catagory like '%$search_con%' order by id_cpu asc;");
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
                <a style="font-size:18px;">P1</a>
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




            while( $row = $sql2->fetch_array() ) 
            {
                $id_cpu= $row["id_cpu"];		
                $name_cpu  = $row["name_cpu"];	
                $manf_cpu  = $row["manf_cpu"];
                $core_cpu  = $row["core_cpu"];	
                $maxghz_cpu  = $row["maxghz_cpu"];	
                $minghz_cpu  = $row["minghz_cpu"];	
                $thread_cpu  = $row["thread_cpu"];	
                $release_cpu  = $row["release_cpu"];	

            ?>





<tr class="SearchResult_Table_Row_page1">   

    <td>
        <div class="total1_image">
            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;"><a style="font-size:14px; color:white; width: 40px; margin-left:2px;">Proc</a></div>
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