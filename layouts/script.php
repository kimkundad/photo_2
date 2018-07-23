<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/common_scripts_min.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- Specific scripts -->
<script src="assets/js/icheck.js"></script>
<script>
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-grey',
    radioClass: 'iradio_square-grey'
  });
</script>

<script src="assets/js/jquery.ddslick.js"></script>
<script>
  $("select.ddslick").each(function() {
    $(this).ddslick({
      showSelectedHTML: true
    });
  });
</script>

<script src="assets/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#my-slider').sliderPro({
      width: '100%',
      height: '500',
      arrows: true,
      visibleSize: '100%',


      autoHeight: true,
    });
  });
</script>

<script type="text/javascript" src="assets/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 6,
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToScroll: 6,
      responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
    });
  });
</script>
<script src="assets/js/bootstrap-notify.js"></script>
<script src="assets/js/notify_func.js"></script>
