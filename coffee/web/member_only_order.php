<?php 
require_once('../connection/connection.php'); ?>

<?php require_once('../functions/login_check.php'); ?>
<!DOCTYPE html>
<html>
<?php require_once('../layouts/head.php'); ?>
<body>
<?php require_once('../layouts/navbar.php'); ?>
<?php require_once('../layouts/navbar_member_only.php'); ?>
<?php
    $limit = 3;
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
      $page = 1;
    }
    $start_from = ($page-1) * $limit;
    $query = $db->query("SELECT * FROM reservation WHERE memberID=".$_SESSION['user']['memberID']." ORDER BY reservation_orderID  DESC LIMIT ".$start_from.",".$limit);
    $all_member = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container ">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <style>
      .coffee_text{
      color:#ebbb64 !important;;
      }
      </style>
     
    </div>
  </nav>
  <div class="table-responsive">
  <div class="col-lg-12"> <img class="img-fluid d-block" src="../images/bar.png"> 
    <table class="table table-striped table-borderless">
      <thead>
        <tr class="coffee_text">
          <th scope="col" width="20%">預約大名</th>
          <th scope="col" width="20%">時間</th>
          <th scope="col" width="20%">人數</th>
          <th scope="col" width="20%">電話</th>
          <th scope="col" width="20%">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($all_member as $member){ ?>
        <tr class="coffee_text">
          <th scope="row" >
              <?php echo $member['name']; ?></th>
          <td><?php echo $member['time']; ?></td>
          <td><?php echo $member['people']; ?></td>
          <td><?php echo $member['mobile']; ?></td>
          <td>
              <a onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};" class="btn btn-secondary ml-2" href="delete.php?gmemberID=<?php echo  $member['reservation_orderID']; ?>"><i class="fa fa-fw fa-trash-o"></i>&nbsp;刪除</a></td>
        </tr>
      <?php } ?>
      </tbody>
      </div>
    </div>     
         
    </div>
  
      
    </table>
      <div class="col-lg-12"> <img class="img-fluid d-block" src="../images/bar.png"> 


        </ul>
      </div>
    </div>
  </nav>
    








<?php require_once('../layouts/footer.php'); ?>
<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in the same page -->
<script src="../js/smooth-scroll.js"></script>


</body>

</html>