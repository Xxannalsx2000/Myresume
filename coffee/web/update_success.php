<?php
    session_start();
    require_once('../connection/connection.php'); 

    if(isset($_POST['EditForm']) && $_POST['EditForm'] == "EDIT"){
      $sql= "UPDATE member SET name =:name, mobile = :mobile, email = :email, address=:address,birthday=:birthday where memberID = :memberID";
      $sth = $db ->prepare($sql);
      $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
      $sth ->bindParam(":mobile", $_POST['mobile'], PDO::PARAM_STR);
      $sth ->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
      $sth ->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
      $sth ->bindParam(":birthday", $_POST['birthday'], PDO::PARAM_STR);
      $sth ->bindParam(":memberID", $_SESSION['user']['memberID'], PDO::PARAM_STR);
      $sth ->execute();
      header("refresh:1; url=member_only.php");
    }  else{
        $query = $db->query("SELECT * FROM member WHERE memberID = ".$_SESSION['user']['memberID']);
        $member = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['member'] = $member;
      }

?>
<!DOCTYPE html>
<html>
<?php require_once('../layouts/head.php'); ?>
<body>
<?php require_once('../layouts/navbar.php'); ?>

    <div class="col-md-4 p-3 mx-auto" >
          <div class="bg-primary card " > <img class="img-fluid rounded-circle w-75 mx-auto mt-3" src="../images/coffee_cir.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="font-weight:bold;">update success!</h4>
              <p class="card-text" style="font-weight:bold;">頁面將在三秒後跳轉...</p>
            </div>
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