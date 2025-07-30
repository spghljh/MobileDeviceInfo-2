<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
        
        $sql = "SELECT * FROM mcl";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
        $total_record_cpu = mysqli_num_rows($result); // 전체 글 수
?>


<head>
<title>page1.php</title>
<meta charset="utf-8">
<link href="../css/user.css" rel="stylesheet">
<link href="../css/index_body_admin.css" rel="stylesheet">
<link href="../css/page1_body_admin.css" rel="stylesheet">
<link href="../css/page0_body_total_admin.css" rel="stylesheet">
<link href="../css/main_header_admin.css" rel="stylesheet">
</head>




<?php include $_SERVER['DOCUMENT_ROOT'].'/admin/main_header_admin.php'; ?>


<div class="ground"><!--div class="ground"-->
<div class="index_content" style="margin-top:70px;"><!--div class="index_content"-->



<div class="index_button_line1"><!--div class="index_button_line1"-->
<div class="button_content1"><!--div class="button_content1"-->



<div class="Module_Layout_1"><!--div class="Module_Layout_1"-->
<div class="Module_Layout_1_1"><!--div class="Module_Layout_1_1"-->

    <div class="Module_Layout_1_1_1">
        <div class="Module_Layout_1_1_1_1">
            <div class="Module_Layout_1_1_1_1_0">
            <a style="font-size:18px;">P1</a>                                           
            </div>
            <div class="Module_Layout_1_1_1_1_1">

                <a class = "Module_Layout_1_1_1_1_1_0" style="color: white !important;">프로세서 목록</a>
                <a class = "Module_Layout_1_1_1_1_1_0" style="font-size:45px; margin-left:70px; color: white !important;"><?=$total_record_cpu?></a>
                <a class = "Module_Layout_1_1_1_1_1_0" style="font-size:16px; margin-bottom:-20px; margin-left:-5px; color: white !important;">프로세서</a>

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

























<!--내용-->
<table class="cpulist_table_page1_admin" >

        <?php
        		// DB 연결
        $sql = "select * from mcl order by id_cpu asc";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
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
            <div class="total2_name"><a href="./page1view_id_admin.php?id_cpu=<?=$id_cpu?>"><?=$name_cpu?></a></div>
        </div>
    </td>

    <td style="margin-left:-15px">
        <div class="total1_c">
            <div class="total2_c"><a><?=$core_cpu?></a><a style="font-size:16px; margin-left:3px; margin-top:3px;">코어</a></div>
        </div>
    </td>

    <td>
        <div class="total1_ct_delete">
            <div class="total2_ct_delete">
                <a href="./page1view_id_admin_toDelete.php?id_cpu=<?=$id_cpu?>">삭제</a>
            </div>
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


