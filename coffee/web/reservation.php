<?php 
session_start();
require_once('../connection/connection.php'); 
?>
<!DOCTYPE html>
<html>
<?php require_once('../layouts/head.php'); ?>
<body>
<?php require_once('../layouts/navbar.php'); ?>
<?php require_once('../layouts/navbar_member_only.php'); ?>

  <!-- Cover -->
  <div class="py-5 text-center background_stick" style="background-image: url(&quot;../images/coffee.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 p-3 bg-white border" style="">
          <form class="p-4" method="post" action="reservation_success.php">
            <h4 class="mb-4 text-center"><mark class="secondary shadowed coffee_bold">Breeze coffee reservation</mark></h4>
            <div class="form-group coffee_bold">
             <label>Member name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['user']['name']?>"> 
            </div>

            <div class="form-group coffee_bold"> 
              <label>Period</label>
                <input type="time" class="form-control" id="time" name="time"> 
            </div>

            <div class="form-group coffee_bold">
             <label>People</label>
              <input type="number" class="form-control" id="people" name="people" min="1"> 
            </div>

            <div class="form-group coffee_bold">
             <label>Mobile</label> 
              <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $_SESSION['user']['mobile']?>"> 
            </div>

            <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
            <input type="hidden" name="memberID" value="<?php echo $_SESSION['user']['memberID'];?>">

            <button type="submit" class="btn mt-4 btn-block p-2 btn-info shadowed">reservation</button>
          </form>
        </div>
        <div class="col-lg-7 align-self-center text-lg-left text-center" style="">
          <h1 class="mb-0 mt-4 display-4"><mark class="primary shadowed">Breeze Coffee</mark></h1>
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