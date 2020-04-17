
<!DOCTYPE html>
<html>

 <head>
  <title>Bike raiting </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <link href="Front/css/bootstrap.css" rel='stylesheet' >
     <!-- jQuery (Bootstrap's JavaScript plugins) -->
     <!-- Custom Theme files -->
     <link href="Front/css/style.css" rel="stylesheet"   >
     <!-- Custom Theme files -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
     <!--webfont-->
     <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
     <!--webfont-->
     <!-- dropdown -->
     <link href='Front/css/nav.css' rel="stylesheet"  >
     <link rel="icon" type="image/x-icon" href='favicon.ico' />
     <script src="Front/js/jquery.min.js"></script>
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
     <script src="Front/js/scripts.html" type="text/javascript"></script>
     <!--js-->
     <!---- start-smoth-scrolling---->
     <script type="text/javascript" src="Front/js/move-top.js"></script>
     <script type="text/javascript" src="Front/js/easing.js"></script>
     <script type="text/javascript">
         jQuery(document).ready(function($) {
             $(".scroll").click(function(event){
                 event.preventDefault();
                 $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
             });
         });
     </script>

     <script src="Front/js/jquery.easydropdown.js"></script>

     <div class="banner-bg banner-sec">
         <div class="container">
             <div class="header">
                 <div class="logo">
                     <div class="logo">
                         <a href="{{ path('home') }}"><img src="{{  asset('Front/images/logo-bascla.png')}}" style="margin-left: 100px;" alt=""/></a>
                     </div>
                     <div class="top-nav">
                         <label class="mobile_menu" for="mobile_menu">
                             <span>Menu</span>
                         </label>
                         <input id="mobile_menu" type="checkbox">
                         <ul class="nav">
                             <li class="dropdown1" style="color: #1B242F;"><a href="{{ path('products') }}" >Products</a>
                                 <ul class="dropdown2">
                                     <li><a href="/Bascla-master/web/app_dev.php/bascla/velov">Buy a bike</a></li>
                                     <li><a href="/Bascla-master/web/app_dev.php/bascla/velolouer">Rent a bike</a></li>
                                     <li><a href="/Bascla-master/web/app_dev.php/bascla/equipement">Equipment</a></li>

                                 </ul>
                             </li>
                             <li class="dropdown1"><a href="404.html">Events</a>
                                 <ul class="dropdown2">
                                     <li><a href="404.html">Competitions</a></li>
                                     <li><a href="404.html">Touristic Tours</a></li>
                                     <li><a href="404.html">Weekly Challenge</a></li>
                                 </ul>
                             </li>
                             <li class="dropdown1"><a href="parts.html">After-Sales</a>
                                 <ul class="dropdown2">
                                     <li><a href="parts.html">Repare your bikes</a></li>
                                     <li><a href="parts.html"></a></li>
                                     <li><a href="parts.html">TIRES</a></li>
                                     <li><a href="parts.html">DISC BREAKS</a></li>
                                 </ul>
                             </li>
                             <li class="dropdown1"><a href="parts.html">Partenariat</a>

                             </li>
                             <li class="dropdown1"><a href="parts.html">Charity</a>

                             </li>
                             <li class="dropdown1"><a href="accessories.html">Formations</a>

                             </li>

                             <a class="shop" href="cart.html"><img style="width: 150%;" src="{{asset('Front/images/cart.png')  }}" alt=""/></a>
                         </ul>
                     </div>
                     <div class="clearfix"></div>
                 </div>
             </div>
         </div>
     </div>

     <br>
     <br>

 </head>
 <body>

  <div class="container" style="width:800px;">
   <h2 align="center">Bike Rating</h2>
   <br />
   <span id="business_list"></span>
   <br />
   <br />
  </div>
  <div class="footer">
      <div class="container wrap">
          <div class="logo2">
              <a href="index.html"><img src="images/logo2.png" alt=""/></a>
          </div>
          <div class="ftr-menu">

          </div>
          <div class="clearfix"></div>
      </div>
  </div>
  <!---->
  <div class="footer-bottom">
      <div class="container">
          <p> &copy; 2020 Bascla. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> IT Vision</a></p>

      </div>
  </div>

 </body>

</html>

<script>
$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#business_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  remove_background(business_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(business_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  var rating = $(this).data("rating");
  remove_background(business_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, business_id:business_id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_business_data();
     alert("votre rate "+index +" par 5");
    }
    else
    {
     alert("probleme systeme");
    }
   }
  });
  
 });

});

</script>
