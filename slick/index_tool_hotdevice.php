<!DOCTYPE html>
<html lang="ko">
<head>
<title>index.php</title>
<meta charset="utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>


<div class="div2">
    <div class="hotdevice">
        <ul id="ticker2">



        <?php
            $con = mysqli_connect("localhost", "qnlpky", "Eri9eps901!", "qnlpky");		// DB 연결
            $sql = "select * from MDL order by choice_device desc";		// 일련번호 내림차순 전체 레코드 검색
            $result = mysqli_query($con, $sql);			// SQL 명령 실행
            $total_record = mysqli_num_rows($result); // 전체 글 수
            for ($i=0; $i<$total_record; $i++) {
            mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
            $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기
            $id_device         = $row["id_device"];			// 일련번호
            $name_device        = $row["name_device"];		// 이름 
            $manf_device        = $row["manf_device"];	
            $cpu_device        = $row["cpu_device"];
            $type_device        = $row["type_device"];	
            $release_device        = $row["release_device"];
            $choice_device        = $row["choice_device"];	
            ?>




<li><a href="./page2/page2view_id.php?id_device=<?=$id_device?>" style="padding-left:37px; font-size:27px;">(+<?=$choice_device?>) <?=$name_device?></a></li>
        <?php
            }
            ?>
        </ul>
    </div>
</div>


</html>













<style>
.div2{
        display: flex;
        outline-width : 1px;
        width: 100%;
        height : auto;
        color: black;
        overflow:hidden;

        padding-left : 50px;
        margin-left : 50px;
}

.hotdevice{
    width:580px;
    height:55px;

    font-weight: 700;
    padding-left : 60px;
}
.hotdevice li a {
    width:520px;
    height:55px; 
    line-height:55px; 
    color : #d50175;
    text-shadow: 0 0 8px white;
    text-decoration:none;
    display:block; 
    padding-left : 5px;
    justify-content: center;
    font-size:24px;
    font-weight:700;
}




.hotdevice ul, .hotdevice li {
    margin:0;
    padding:0; 
    list-style:none;
}

</style>

<script>
$(function()
{
    var ticker2 = function()
    {
        setTimeout(function(){
            $('#ticker2 li:first').animate( {marginTop: '-55px'}, 900, function()
            {
                $(this).detach().appendTo('ul#ticker2').removeAttr('style');
            });
            ticker2();
        }, 3000);
    };
    ticker2();
});
</script>