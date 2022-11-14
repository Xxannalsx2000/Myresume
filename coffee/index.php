<?php 
session_start();
require_once('connection/connection.php'); 
?>
<!DOCTYPE html>
<html>
<head>
  <embed src="music/breeze_coffee_music.mp3" loop="infinite" autostart="true" hidden="true" volume="50"> </embed>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Breeze Coffee</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Neon template for restaurant and food">
  <meta name="keywords" content="Pingendo restaurant food neon free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/Pingendo.css" type="text/css">
  <link rel="stylesheet" href="css/coffee.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <link rel="shortcut icon" href="favicon.ico">
  <style>
  .coffee_black {
    background-color : #000 !important;
  } 
  .coffee_text1{
    font-size:36px;
  }
  @media only screen and (min-width:698px) {
  .sign_line-height {
    line-height: 24px　!important; 
  }
}
  </style>
 
  
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5ed880ad9e5f6944228fd7bc/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
</head>
<audio autoplay loop>
      <source src="music/breeze_coffee_music.mp3" loop="1" autostart="true" hidden="true" volume="20">
</audio>

<body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark coffee_black" >
          <div class="container"> <a class="navbar-brand" href="#">
              <a href="index.php" class="coffee_text1"><img src="images/logo2.png" alt="coffee logo">Breeze Coffee
              </a>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar10">
              <ul class="navbar-nav ml-auto">
              <?php if(isset($_SESSION['user']) && $_SESSION['user'] !=null) { ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/member_only.php">您好! <?php echo $_SESSION['user']['name']; ?> <h6>welcome</h6></a></li>
               <?php }else{ ?>
               <?php } ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/about.php">關於我們<h6>about</h6></a></li>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/menu.php?categoryID=1">微風菜單<h6>menu</h6></a></li>
                <?php if(isset($_SESSION['user']) && $_SESSION['user'] !=null) { ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/member_only.php">會員專區<h6>Members only</h6></a></li>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/logout.php">會員登出<h6>logout</h6></a></li>
               <?php }else{ ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/login.php">會員登入<h6>login</h6></a></li>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="web/register.php">會員申請<h6>register</h6></a></li>
               <?php } ?>
              
            </div>
          </div>
      </nav>
    <div class="py-5 text-center background_stick">
    <div class="container">
      <div class="row">
        <div class="bg-dark p-5 mx-auto col-md-8 col-10">
          <h4 class="display-4" >When breeze blow</h4>
          <p class="mb-3 lead">Your satisfied smile is our best harvest.</p>
          <p class="mb-4">In a moment of tranquility, we present you the best coffee, under the gentle breeze.</p> 
          <a class="btn btn-outline-primary" href="web/about.php">前往微風咖啡廣場</a>
        </div>
      </div>
    </div>
  </div>

  <div class="align-items-center d-flex py-5 cover section-fade-in-out" style="background-image: url(&quot;images/coffee_shop.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 p-3 bg-white border" style="">
          <form class="p-4" method="post" action="functions/check_user.php">
            <h4 class="mb-4 text-center "><mark class="secondary shadowed coffee_bold">Member Login</mark></h4>
            <div class="form-group coffee_bold"> 
            <label>會員帳號</label>
              <input type="text" class="form-control" id="name" name="name"> 
            </div>
            <div class="form-group coffee_bold"> 
            <label>會員密碼</label>
              <input type="text" class="form-control" id="password" name="password"> 
            </div>
            <button type="submit" class="btn mt-4 btn-block p-2 btn-info shadowed">Login</button>
            <?php if(isset($_GET['Msg']) && $_GET['Msg'] != null){ ?>
						<div class ="alert alert-warning m-2" role="alert">

							<?php if ($_GET['Msg'] == "Error") {?>
								帳號密碼錯誤!

							<?php } else if ($_GET['Msg'] == "Logout") {?>
								成功登出

							<?php }else{ ?>
								請先登入

							<?php } ?>
						</div>
          <?php } ?>
          </form>
        </div>

        <div class="col-lg-7 align-self-center text-lg-left text-center" style="">
          <h1 class="mb-0 mt-4 display-4"><mark class="primary shadowed">Breeze Coffee</mark></h1>
        </div>
      </div>
    </div>
  </div>
    <!-- Gallery -->
    <div class="">
    <div class="container-fluid">
      <div class="row">
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic0.jpg" class="img-fluid">
        </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic1.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
        <img src="images/coffee_pic0.jpg" class="img-fluid">  
        </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic2.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
         <img src="images/coffee_pic0.jpg" class="img-fluid">
        </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic3.jpg" class="img-fluid"> </div>
        <div class="p-0 col-4 d-md-none">
          <img src="images/coffee_pic0.jpg" class="img-fluid">
        </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic4.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic0.jpg" class="img-fluid">
        </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic5.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic0.jpg" class="img-fluid">  
        </div>
        <div class="p-0 col-md-2 col-4">
          <img src="images/coffee_pic6.jpg" class="img-fluid"> </div>

      </div>
    </div>
  </div>
  <!-- Intro -->
  </div>
  <div class="py-5 text-center section-fade-in" style="background-image: url(&quot;images/coffee_fadeout.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h3 class="display-4 mb-0 Baskerville sign_line-height">Dedicate the best coffee to the distinguished you!</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-dark">
    <div class="container">
      <div class="row bg-secondary shadowed">
        <div class="p-4 col-md-6 bg-primary animate-in-left">
          <h2 class="mb-3">Brazilian coffee beans</h2>
          <p class="my-4">Brazilian coffee specializes in the unique alcohol thickness and sweetness of soft beans, the overall is mild and smooth, so five grades are used to distinguish different soft beans! Among them are: extremely supple, supple, slightly supple, discomfort, iodine odor. These five grades can distinguish different Brazilian coffee producing areas: Strictly Soft: South Minas, Hilado, Mogiana, and Bahia Diamond Plateau.</p>
          <img class="img-fluid d-block" src="images/signature.png" width="300">
        </div>
        <div class="p-0 col-md-6 animate-in-right">
          <img class="img-fluid d-block" src="images/coffee_bean.jpg"> </div>
      </div>
    </div>
    <div class="col-lg-12"> <img class="img-fluid d-block" src="images/bar.png"> </div>

    <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><iframe width="100%" height="300" src="https://maps.google.com/maps?q=Taiwan%20coffee&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>
        <div class="px-md-5 p-3 col-md-6 d-flex flex-column justify-content-center  coffee_bold">
          <h1 >Where the golden breeze is blowing</h1>
          <p class="mb-3 lead ">On the right site is the landmark where Breeze Coffee is located</p>
          <p class="mb-2 ">Below is how to contact us</p>
          <div class="row">
            <div class="col-md-12 gold_bottom"> <a href="#">
                <i class="fa fa-facebook-squared-inline fa-4x"></i>
              </a> <a href="https://www.facebook.com/Breeze_coffee-106764691056028">
                <i class="fa fa-facebook-square fa-3x mx-3 text-muted d-inline"></i>
              </a> <a href="https://www.instagram.com/breeze_coffee123/channel/?hl=zh-tw">
                <i class="fa fa-instagram fa-3x mx-3 text-muted d-inline"></i>
              </a> <a href="mailto:a4894588@gmail.com">
                <i class="fa fa-envelope fa-3x ml-3 text-muted d-inline"></i>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel venue -->

  <!-- Footer -->
  <div class="text-center bg-dark">
    <div class="container">
      <div class="row"></div>
      <div class="row">
        <div class="col-12 mt-3">
          <p class="text-muted coffee">© Copyright 2020 Pingendo - Copyright ownership by Zack. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery/jquery.js"></script>
  <script src="js/jquery/jquery-ui.js"></script>

  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
  <script>
    $(function(){
      $('body').before('<embed src="music/breeze_coffee_music.mp3" loop="1" autostart="true" hidden="true" volume="50"> </embed>');
    });
  </script>
  
</body>

</html>