<?php require_once('../../connection/connection.php'); ?>
<?php
if(isset($_POST['EditForm']) && $_POST['EditForm'] == "EDIT"){
  $sql= "UPDATE reservation SET name =:name, mobile = :mobile, people = :people, time=:time where memberID = :memberID";
  $sth = $db ->prepare($sql);
  $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
  $sth ->bindParam(":time", $_POST['time'], PDO::PARAM_STR);
  $sth ->bindParam(":people", $_POST['people'], PDO::PARAM_STR);
  $sth ->bindParam(":mobile", $_POST['mobile'], PDO::PARAM_STR);
  $sth ->bindParam(":memberID", $_POST['memberID'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php');
}  else{
    $query = $db->query("SELECT * FROM reservation WHERE memberID=".$_GET['gmemberID']);
    $member = $query->fetch(PDO::FETCH_ASSOC);
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
              <h1>最新消息管理</h1>
            </div>
            <div class="card-body">
              <ul class="breadcrumb mb-2">
                <li class="breadcrumb-item"> <a href="../index.php">首頁</a> </li>
                <li class="breadcrumb-item"><a href="list.php">預約管理</a></li>
                <li class="breadcrumb-item active">新增一筆</li>
              </ul>
              
              <div class="row">
                
              </div>

              <form id="EditForm" class="text-right" method="post" action="edit.php">
                <div class="col-md-12 my-3 text-left"><a class="btn btn-primary" href="list.php">回上一頁</a></div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">姓名</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $member['name'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">時間</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="time" name="time" value="<?php echo $member['time'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">人數</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="people" name="people" value="<?php echo $member['time'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">電話</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $member['mobile'];?>"> </div>
                </div>
                    <input type="hidden" name="EditForm" value="EDIT">
                    <input type="hidden" name="memberID" value="<?php echo $_GET['gmemberID']?>">
                    <button type="submit" class="btn mr-3 btn-primary">取消並回上一頁</button><button type="submit" class="btn btn-secondary">確定送出</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('../layouts/footer.php');  ?>

</body>

</html>