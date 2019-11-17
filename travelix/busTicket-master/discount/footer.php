

<div class="clearfix"></div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-1 hidden-xs">
        <a href="#"><img src="../images/logo1.png" width="55px"></a>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-6">
        <p>Menu</p>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../search.php">search bus</a></li>
          <li><a href="../showRoute.php">show route</a></li>
          <li><a href="../profile.php">profile</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-6">
       <ul class="middle_menu">
        <li><a href="../service.php">Service</a></li>
        <?php if($_SESSION['isLogged']==true): ?>
        <li><a href="../logout.php">Logout</a></li>
        <?php elseif($_SESSION['isLogged']== false ): ?>
        <li><a href="../login.php">Login</a></li>
        <?php endif; ?>

<li><a href="../contact.php">Contact</a></li>
        </ul>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
      </div>
      <div class="col-md-3 col-sm-5 address hidden-xs">
        <p>Contact</p>
        <h6>Address:</h6><span>Mohammadpur  Dhaka,Bangladesh</span>
        <h6>Phone:</h6><span>+8801743918787</span>
        <h6>Email:</h6><span>mabud@myself.com</span>
      </div>
      <div class="col-md-3 hidden-sm hidden-xs">
        
        
        
        
      </div>
      <div class="border hidden-sm hidden-xs"></div>
    </div>
  </div>
  <img src="../images/orange_back.png" class="orng img-responsive hidden-sm hidden-xs">
<img src="../images/blue_back.png" class="blu img-responsive hidden-sm hidden-xs">
</footer>

<!--footer part ends-->
<div class="container copyright">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
      <p>© info@diu-bus-ticket.com allright reserved</p>
    </div>
  </div>
</div>

<!--copyright part ends-->
    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   
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