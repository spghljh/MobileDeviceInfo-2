<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
        		// DB 연결
        $sql = "SELECT * FROM members";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
        $total_record = mysqli_num_rows($result); // 전체 글 수
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
            <a style="font-size:18px;">U</a>                                           
            </div>
            <div class="Module_Layout_1_1_1_1_1">

                <a class = "Module_Layout_1_1_1_1_1_0">사용자 목록</a>
                <a class = "Module_Layout_1_1_1_1_1_0" style="font-size:45px; margin-left:70px;"><?=$total_record?></a>
                <a class = "Module_Layout_1_1_1_1_1_0" style="font-size:16px; margin-bottom:-20px; margin-left:-5px;">사용자</a>

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
        $sql = "select * from members order by id asc";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
        $total_record = mysqli_num_rows($result); // 전체 글 수
        for ($i=0; $i<$total_record; $i++) {
        mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
        $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기
        $id        = $row["id"];		// 이름
        $pass        = $row["pass"];	
        $email        = $row["email"];	
        $regist_day        = $row["regist_day"];	
        ?>

  

<tr class="SearchResult_Table_Row_page1_user">   


    <td>
        <div class="total1_name_user_regist_day">
            <div class="total2_name_user_regist_day">
                <a class="user_var"><?=$regist_day?></a>
                <a style="font-size:14px; margin-bottom:-3px; margin-left: 4px;">가입</a>
            </div>
        </div>
    </td>


    <td>
        <div class="total1_name_user_id">
            <div class="total2_name_user_id">
                <a style="font-size:14px; margin-bottom:-2px; margin-left: -5px; margin-right: 3px;">ID :</a>
                <a class="user_var"><?=$id?></a>
            </div>
        </div>
    </td>

    <td>
        <div class="total1_name_user_email">
            <div class="total2_name_user_email">
                <a style="font-size:14px; margin-bottom:-2px; margin-left: 4px; margin-right: 3px;">e-mail :</a>
                <a class="user_var"><?=$email?></a>
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


