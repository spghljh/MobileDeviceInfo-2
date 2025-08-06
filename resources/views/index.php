<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>default</title>
    <!-- <link rel="stylesheet" href="/default_css/default_main.css">
    <link rel="stylesheet" href="/default_css/default_module_title.css">
    <link rel="stylesheet" href="/default_css/default_module_design.css">  -->
    <link rel="stylesheet" href="/default_css/default_main_inhanced.css"> 
    <link rel="stylesheet" href="/default_css/cpu_tool.css"> 
    </head>
<body>
    <header>
    </header>
    <main>
    <div class="modules_container">

        <div class="module_area"><!--default_module_title.css-->
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/text/label_index_cpu.php';?>
        </div><!--module_component-->

        <div class="module_area"><!--default_module_design.css-->
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/box/index/module_box-index-to-cpu.php';?>
        </div><!--module_component-->

        <div class="module_area"><!--default_module_title.css-->
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/content/text/label_index_device.php';?>
        </div><!--module_component-->

        <div class="module_area"><!--default_module_design.css-->
            <?php include $_SERVER['DOCUMENT_ROOT'].'/resources/views/modules/box/index/module_box-index-to-device.php';?>
        </div><!--module_component-->



    </main>
    <footer>

    </footer>
</body>
</html>
