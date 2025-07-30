

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <style type="text/css">


    * {
      box-sizing: border-box;
      justify-content: center;

    }

    .slider {
      width: 400px; 
      height: auto;
      margin: 0 auto;


    }

    .slick-slide {
      margin: 0px 10px;

    }

    .slick-slide img {
      width: 100px;
      height : 100px;
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
  <section class="autoplay1 slider" style="padding-left:12px;">
    <div>
      <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=intel">
      <img src="./slick/index_slider/intel.png" >
      </a>
    </div>

    <div>
    <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=amd">
      
      <img src="./slick/index_slider/amd.png">
      </a>
    </div>

    <div>
    <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=qualcomm">
      
      <img src="./slick/index_slider/qualcomm.png">
      </a>
    </div>

    <div>
    <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=mediatek">
      
      <img src="./slick/index_slider/mediatek.png">
      </a>
    </div>

    <div>
      <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=intel">
      <img src="./slick/index_slider/intel.png">
      </a>
    </div>

    <div>
    <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=amd">
      
      <img src="./slick/index_slider/amd.png">
      </a>
    </div>

    <div>
    <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=qualcomm">
      
      <img src="./slick/index_slider/qualcomm.png">
      </a>
    </div>

    <div>
    <a href="./page1/page1_SearchModule_ResultPage.php?catgo=manf_cpu&search=mediatek">
      
      <img src="./slick/index_slider/mediatek.png">
      </a>
    </div>

    









  </section>



  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $('.autoplay1').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1400,
      });

    });
</script>
</div>


