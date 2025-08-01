<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>
<div class="CpuSpecToDevice">
<table class="cpulist_table_page1">

<?php









           
                              
                                function mq($sql)
                                {
                                    global $con;
                                    return $con->query($sql);
                                }

                              $sql2 = mq("select * from mdl where cpu_device='$name_cpu' order by id_device desc");
                              while($board = $sql2->fetch_array())
                              {
                              $id_device=$board["id_device"]; 
                              $name_device=$board["name_device"]; 
                              $manf_device=$board["manf_device"]; 
                              $cpu_device=$board["cpu_device"];
                              $release_device=$board["release_device"]; 

                              ?>


<tr class="SearchResult_Table_Row_page2" style= "box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">    

    <td>
        <div class="total1_image">
            <div class="Module_Layout_1_1_1_1_0" style="margin-left:20px;"><a style="font-size:14px; color:white; width: 40px; text-shadow:0 0 2px black;">Dvic</a></div>
        </div>
    </td>

    <td>
        <div class="total1_type" style="margin-left:-160px;">
            <div class="total2_type"><a>디바이스</a></div>
        </div>
    </td>

    <td>
        <div class="total1_manf_image" style="margin-left:-50px;">
            <div class="total2_manf_image"><?php include "./perBrand.php"; ?></div>
        </div>
    </td>

    <td>
        <div class="total1_name_device" style="margin-left:-100px;">
            <div class="total2_name_device"><a href="../resources/views/page2/page2view_id.php?id_device=<?=$id_device?>"><?=$name_device?></a></div>
        </div>
    </td>
   
    <td style="margin-left: 50px;">
        <div class="total1_cpuindevice">
            <div class="total2_cpuindevice"><a href="../resources/views/page2/page2view_id.php?id_device=<?=$id_device?>"><?=$cpu_device?></a></div>
        </div>
    </td>

</tr>
                              
                              

                              
<?php
}
?>
</table>
</div>

