

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <style type="text/css">


    * {
      box-sizing: border-box;
      
    }

    .slider {
      width: 400px;
        margin: 10px auto;

    }

    .slick-slide { 
      margin: 0px 10px;

    }

    .slick-slide img {
      width: 90px;
      height : 90px;
      border-radius: 15px;
      background : transparent;

    }



    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>



<div style="margin-top:-20px; margin-bottom:-36px;">
  <section class="autoplay2 slider">
    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=hp">
      <img src="./slick/index_slider/hp.png">
      </a>
    </div>

    <div>
    <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=asus">
      <img src="./slick/index_slider/asus.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=msi">
      <img src="./slick/index_slider/msi.png">
      </a>
    </div>

    <div>
    <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=dell">
      <img src="./slick/index_slider/dell.png">
      </a>
    </div>

    <div>
    <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=samsung">
      <img src="./slick/index_slider/samsung.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=lg">
      <img src="./slick/index_slider/lg.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=acer">
      <img src="./slick/index_slider/acer.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=lenovo">
      <img src="./slick/index_slider/lenovo.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=gigabyte">
      <img src="./slick/index_slider/gigabyte.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=huawei">
      <img src="./slick/index_slider/huawei.png">
      </a>
    </div>

    <div>
      <a href="./page2/page2_SearchModule_ResultPage.php?catgo=manf_device&search=sony">
      <img src="./slick/index_slider/sony.png">
      </a>
    </div>



  











  </section>



  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $('.autoplay2').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      });

    });
</script>
</div>


