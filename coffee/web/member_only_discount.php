<?php require_once('../functions/login_check.php'); ?>
<!DOCTYPE html>
<html>
<?php require_once('../layouts/head.php'); ?>
<body>
<?php require_once('../layouts/navbar.php'); ?>
<style>
.container.about_coffee {
  background-color : #ebbb64;
} 
.offee_text {
  color : #000;
} 
.coffee_text{
      color:#ebbb64 !important;
      }
    }
</style>

<?php require_once('../layouts/navbar_member_only.php'); ?>
  <div class="py-5 background_stick" style=" background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="p-5 bg-white ml-auto col-md-5 border">
          <h1>成為會員各種好處!</h1>
          <p class="mb-3">微風咖啡廳提供您最舒適的位置、方便的停車位、以及免費WIFI!</p>
          <p class="mb-3">一、若出示會員和用餐發票則停車費用全免!</p>
          <p class="mb-3">二、生日免費領取八折優惠!(必須先完善會員資料)</p>
          <p class="mb-3">三、可以搶先預約和查詢預約時間，再也不怕錯過!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6"> <img class="img-fluid d-block" src="../images/about.png"> </div>
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
          <h1>月初將定期舉辦打折活動!若為會員則用餐享九折優惠!</h1>
          <p class="mb-3 lead">活動期間為每個月1至5號</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container about_coffee">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6 ">
          <h1 class="offee_text">消費集點活動!</h1>
          <p class="mb-3 lead offee_text">若來店光臨五次且單筆消費滿三百以上，則可以得到一張八折卷，不限使用期限且可以和九折同時享用!</p>
        </div>
        <div class="col-lg-6"> 
          <div class="carousel slide my-3" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active"> <img class="d-block img-fluid" src="../images/coffee_pic1.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid" src="../images/coffee_pic2.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                </div>
              </div>
            </div> <a class="carousel-control-prev" role="#carousel-1" data-slide="prev" href="#carousel-1"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" role="button"
              data-slide="next" href="#carousel-1"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
      </div>
    </div>
  </div>



  <div class="py-5" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4 col-lg-3 order-2 order-md-1 p-0"> <img class="img-fluid d-block" src="../images/coffee_cir.jpg"> </div>
            <div class="d-flex flex-column justify-content-center p-3 col-md-8 offset-lg-1 align-items-start order-1 order-md-2">
              <h3>更多詳情請關注粉絲專業或是追蹤IG帳號 ~</h3>
              <p class="mb-3"></p> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12"> <img class="img-fluid d-block" src="../images/bar.png"> </div>
<?php require_once('../layouts/footer.php'); ?>
<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in the same page -->
<script src="../js/smooth-scroll.js"></script>


</body>

</html>