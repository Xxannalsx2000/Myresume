<?php require_once('../../connection/connection.php'); ?>

<?php
if(isset($_POST['AddForm']) && $_POST['AddForm'] == "INSERT"){
  $sql= "INSERT INTO member  (name, mobile, email, address) VALUES ( :name, :mobile, :email, :address)";
  $sth = $db ->prepare($sql);
  $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
  $sth ->bindParam(":mobile", $_POST['mobile'], PDO::PARAM_STR);
  $sth ->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
  $sth ->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php');
}

?>
<!DOCTYPE html>
<html>

<?php require_once('../layouts/head.php'); ?>

<body style="">
<?php require_once('../layouts/navbar.php'); ?>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h1>會員管理</h1>
            </div>
            <div class="card-body">
              <ul class="breadcrumb mb-2">
                <li class="breadcrumb-item"> <a href="../index/list.php">首頁</a> </li>
                <li class="breadcrumb-item"><a href="list.php">會員管理</a></li>
                <li class="breadcrumb-item active">新增會員</li>
              </ul>
              <div class="row">
                <div class="col-md-10 my-3"><a class="btn btn-primary" href="list.php">回上一頁</a></div>
              </div>
              <form id="AddForm" class="text-right" method="post" action="create.php">
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">名稱</label>
                  <div class="col-10">
                    <input type="text" class="form-control coffee" id="name" name="name"> </div>
                </div>
                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" contenteditable="true">電話</label>
                  <div class="col-10">
                    <input type="text" class="form-control coffee" id="mobile" name="mobile"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">信箱</label>
                  <div class="col-10">
                    <input type="text" class="form-control coffee" id="email" name="email"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">地址</label>
                  <div class="col-10">
                    <input type="text" class="form-control coffee" id="address" name="address"> </div>
                </div>
                  <div class="col-10">
                    <input type="hidden" name="AddForm" value="INSERT">
                </div>
                <button type="submit" class="btn mr-3 btn-primary">取消並回上一頁</button><button type="submit" class="btn btn-secondary">確定送出</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('../layouts/footer.php');  ?>


</body>

</html>