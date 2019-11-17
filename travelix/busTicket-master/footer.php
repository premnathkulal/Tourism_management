

<!--footer part ends-->
<div class="container copyright">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
      <p>©all rights are reserved</p>
    </div>
  </div>
</div>

<!--copyright part ends-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script>
       $('.all_home_members').slick({
            dots: false,
            infinite: true,
            speed: 300,
            arrows: false,
            autoplay:true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 991,
                  dots: false,
                  arrows: true,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
            ]
          });
    </script>
    <script>
    $('.all_client').slick({
        infinite: true,
        autoplay:true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
              {
                breakpoint: 991,
                  dots: false,
                  arrows: true,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
            ]
        });
    </script>
</body>
</html>