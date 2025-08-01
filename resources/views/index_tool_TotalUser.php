<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<?php
        $sql = "SELECT * FROM members";
        $result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($result);
        echo $total_record;
        echo "</br>";
?>
