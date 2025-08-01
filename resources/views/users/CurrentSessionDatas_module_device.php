<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php


            		// DB 연결
            $sql = "select * from members where id='$userid' ";		// 일련번호 내림차순 전체 레코드 검색
            $result = mysqli_query($con, $sql);			// SQL 명령 실행
            $total_record = mysqli_num_rows($result); // 전체 글 수
            for ($i=0; $i<$total_record; $i++) {
            mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
            $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

            $data1_device         = $row["data1_device"];	
            $data2_device         = $row["data2_device"];	
            $data3_device         = $row["data3_device"];
            $data4_device         = $row["data4_device"];	
            $data5_device         = $row["data5_device"];
         
            if(($data1_device=='')&&($data2_device=='')&&($data3_device=='')&&($data4_device=='')&&($data5_device=='')){
                ?>


                <div class = "units_line">
                <a class="units_line_noData1">아직 추가한 항목이 없습니다.</a>
                <a class="units_line_noData2">디바이스의 상세 정보에서 추가할 수 있습니다.</a>
                </div>

                <?php
            }
            else{
?>


<div class = "units_line">

        <?php include "./User_data/page2view_id_FromUserDevice_data1_device.php"; ?>


        <?php include "./User_data/page2view_id_FromUserDevice_data2_device.php"; ?>


        <?php include "./User_data/page2view_id_FromUserDevice_data3_device.php"; ?>


        <?php include "./User_data/page2view_id_FromUserDevice_data4_device.php"; ?>


        <?php include "./User_data/page2view_id_FromUserDevice_data5_device.php"; ?>

</div>

<?php
}
?>


<?php
}
?>

