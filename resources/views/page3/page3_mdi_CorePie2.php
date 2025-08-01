<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() 
    {
        var data0002 = google.visualization.arrayToDataTable(
            [
            ["제조사", "빈도"], 
            ["hp", <?=$cnt_hp?>],
            ["msi", <?=$cnt_msi?>],
            ["asus", <?=$cnt_asus?>],
            ["dell", <?=$cnt_dell?>],
            ["samsung", <?=$cnt_samsung?>],
            ["lg", <?=$cnt_lg?>]
          ]
        );

        
        var options0002 = {
            chartArea: {width: '85%', height: '85%'},
            backgroundColor:'transparent',
            legend: { position: "none" },
            colors: ['#f30182', '#fe5cb2', '#fea4d4', '#f8d7e8', '#f8d7e8', '#f8d7e8', '#fdd7eb']
    
          
        };
        var chart222 = new google.visualization.PieChart(document.getElementById("mdi_CorePie2"));
        chart222.draw(data0002, options0002);
    }
</script>
</head>