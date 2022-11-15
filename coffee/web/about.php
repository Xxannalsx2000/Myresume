<?php 
session_start();
require_once('../connection/connection.php'); 
?>
<!DOCTYPE html>
<html>
<?php require_once('../layouts/head.php'); ?>
<style>
  
.container.about_coffee {
  background-color : #ebbb64;
} 
.offee_text {
  color : #000;
} 
</style>
<body>
<?php require_once('../layouts/navbar.php'); ?>

  <div class="py-5 background_stick" style=" background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="p-5 bg-white ml-auto col-md-5 border">
          <h1>關於微風咖啡聽</h1>
          <p class="mb-3">微風咖啡廳提供您最舒適的位置、方便的停車位、以及免費WIFI!單次用餐時間上限為兩小時，若超過則每小時酌收二十元清潔費用。</p>
          <p class="mb-3">Breeze Cafe offers you the most comfortable location, convenient parking, and free WIFI! The maximum time for a single meal is two hours.</p>
          <a class="btn btn-primary" href="menu.php?categoryID=1">前往菜單</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6"> <img class="img-fluid d-block" src="../images/about.png"> </div>
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6"><br>
          <h1>採用現磨咖啡豆</h1>
          <p class="mb-3 lead">Grinding coffee powder of appropriate thickness is very important for making a cup of coffee. Because the extraction of water-soluble substances in coffee powder has its ideal time, if the powder is very fine and cooked for a long time, resulting in over-extraction.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container about_coffee">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6 ">
          <h1 class="offee_text">專業烘焙方法</h1>
          <p class="mb-3 lead offee_text"><h3>When grinding beans, the thickness of the powder depends on the cooking method. Generally speaking, the shorter the cooking time, the finer the ground powder; the longer the cooking time, the coarser the ground powder.</h3> </p>
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
              <h3>下午歇息時光的好去處</h3>
              <p class="mb-3">Luxury afternoon should be immersed in the breeze cafe to enjoy music and reading.</p> <a class="btn btn-primary" href="#">Let's GO</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12"> <img class="img-fluid d-block" src="../images/bar.png"> </div>
  <?php require_once('../layouts/footer.php'); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="../js/smooth-scroll.js"></script>
</body>

</html>