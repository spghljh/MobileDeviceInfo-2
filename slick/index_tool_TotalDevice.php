<?php
        $con = mysqli_connect("localhost", "qnlpky", "Eri9eps901!", "qnlpky");		// DB 연결
        $sql = "SELECT * FROM MDL";		// 일련번호 내림차순 전체 레코드 검색
        $result = mysqli_query($con, $sql);			// SQL 명령 실행
        $total_record = mysqli_num_rows($result); // 전체 글 수
        echo $total_record;
        echo "</br>";
?>
