<?php 
session_start();
require_once('../connection/connection.php'); 
?>
<?php
    $query = $db->query("SELECT * FROM product_category ORDER BY product_categoryID ASC");
    $all_product_category = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>
<?php
    $query2 = $db->query("SELECT * FROM products  WHERE product_categoryID = ". $_GET['categoryID']." ORDER BY 	product_categoryID  ASC");
    $all_products = $query2->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
  .coffee_text1 :hover {
    text-decoration: underline !important;
    list-style-type: disc !important;
  }

</style>


<!DOCTYPE html>
<html>
<?php require_once('../layouts/head.php'); ?>
<body>
<?php require_once('../layouts/navbar.php'); ?>
</div><div class="col-lg-12"> <img class="img-fluid d-block" src="../images/bar.png"> </div>
    <div class="py-2">
        <div class="container">
          <div class="row">
          <?php foreach($all_product_category as $category){ ?>
            <div class="col-md-4 coffee_text1"> <h3> • &nbsp; <a href="menu.php?categoryID=<?php echo $category['product_categoryID']; ?>" ><?php echo $category['category']; ?> </a></h3></div>
          <?php } ?> 
          </div>
          
        </div><div class="col-lg-12"> <img class="img-fluid d-block" src="../images/bar.png"> </div>
      </div>
      <div class="py-4" >
      
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
         
        </div>
      </div>
      
      <?php foreach($all_products as $products){ ?>
        <div class="col-lg-5 col-md-6 p-4 d-inline-block">
          <div class="row">
            <div class="col-4 p-0"> <img class="img-fluid" src="../uploads/products/<?php echo $products['picture'];?>"> </div>
            <div class="col-8 ">
              <p class="lead mb-1"> <b><?php echo $products['name']; ?> <br> $NT  <?php echo $products['price']; ?></br></b> </p>
              <p class="mb-0"><?php echo $products['description']; ?></p>
            </div>
          </div>
        </div>
        <?php } ?> 
    
      
    </div>
  </div>
<?php require_once('../layouts/footer.php'); ?>
<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in the same page -->
<script src="../js/smooth-scroll.js"></script>
</body>

</html>
