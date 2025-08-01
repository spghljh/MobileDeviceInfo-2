<head>
<meta charset="utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<div class="div1">
    <div class="hotcpu">
        <ul id="ticker1">


        <?php
        
        $result = mysqli_query($con, "select * from mcl order by choice_cpu desc ");
        $sql = "select * from mcl order by choice_cpu desc ";


        $total_record = mysqli_num_rows($result);
        for ($i=0; $i<$total_record; $i++) {
        mysqli_data_seek($result, $i);    	
        $row = mysqli_fetch_assoc($result);
        $id_cpu         = $row["id_cpu"];
        $name_cpu        = $row["name_cpu"];
        $manf_cpu        = $row["manf_cpu"];	
        $core_cpu        = $row["core_cpu"];	
        $thread_cpu        = $row["thread_cpu"];
        $maxghz_cpu        = $row["maxghz_cpu"];	
        $minghz_cpu        = $row["minghz_cpu"];	
        $choice_cpu        = $row["choice_cpu"];	
        ?>



<li><a href="./resources/views/page1/page1view_id.php?id_cpu=<?=$id_cpu?>" style="padding-left:37px; font-size:27px;">(+<?=$choice_cpu?>) <?=$name_cpu?></a></li>
    

        <?php
        }
   
        ?>


        </ul>


  



    </div>
</div>


</html>














<style>




.div1{
        display: flex;
        outline-width : 1px;
        width: 100%;
        height : auto;
        color: black;
        overflow:hidden;
  
        padding-left : 80px;
        margin-left : 50px;
}

.hotcpu{
   
    height:55px;

    font-weight: 700;
    padding-left : 24px;
}
.hotcpu li a {
    width:520px;
    height:55px; 
    line-height:55px; 
    color : #d50175;
    text-shadow: 0 0 8px white;
    text-decoration:none;
    display:block; 
    padding-left : 5px;
    justify-content: center;
    font-size:32px;
    font-weight:700;
}


.hotcpu ul, .hotcpu li {
    margin:0;
    padding:0; 
    list-style:none;
}

</style>

<script>
$(function()
{
    var ticker1 = function()
    {
        setTimeout(function(){
            $('#ticker1 li:first').animate( {marginTop: '-55px'}, 1200, function()
            {
                $(this).detach().appendTo('ul#ticker1').removeAttr('style');
            });
            ticker1();
        }, 3000);
    };
    ticker1();
});
</script>