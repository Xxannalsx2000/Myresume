<?php require_once('../../connection/connection.php'); ?>
<?php

if(isset($_POST['AddForm']) && $_POST['AddForm'] == "INSERT"){
    //判斷是否有資料夾
    if (!file_exists('../../uploads/products')) {
      mkdir('../../uploads/products', 0755, true);
    }
      //圖片上傳程式碼
  if(isset($_FILES['picture']['name'])){
    $filename = $_FILES['picture']['name'];
    $file_path = "../../uploads/products/".$_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], $file_path);

  }else{
    $filename = null;
  }
  

  $sql= "INSERT INTO products  (name, picture , product_categoryID , description, price) VALUES ( :name, :picture , :product_categoryID, :description, :price)";
  $sth = $db ->prepare($sql);
  $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
  $sth ->bindParam(":picture", $filename , PDO::PARAM_STR);
  $sth ->bindParam(":product_categoryID", $_POST['product_categoryID'], PDO::PARAM_STR);
  $sth ->bindParam(":description", $_POST['description'], PDO::PARAM_STR);
  $sth ->bindParam(":price", $_POST['price'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php');}

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
                <li class="breadcrumb-item"> <a href="../index/list.php">首頁</a> </li>
                <li class="breadcrumb-item"><a href="list.php">最新消息管理</a></li>
                <li class="breadcrumb-item active">新增一筆</li>
              </ul>
              <div class="row">
                <div class="col-md-12 my-3"><a class="btn btn-primary" href="list.php">回上一頁</a></div>
              </div>
              <form id="AddForm" class="text-right" method="post" action="create.php" enctype ="multipart/form-data">
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label" >產品名稱</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="name" name="name"> </div>
                </div>

                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label" >產品種類</label>
                    <div>&nbsp;&nbsp;
                    <input type="radio" id="product_categoryID" name="product_categoryID" value="1">&nbsp;咖啡類&nbsp;</div>
                    <div>
                    <input type="radio" id="product_categoryID" name="product_categoryID" value="2">&nbsp;蘇打類 &nbsp;</div>
                    <div>
                    <input type="radio" id="product_categoryID" name="product_categoryID" value="3">&nbsp;義大利麵類&nbsp;</div>
                    <div>
                    <input type="radio" id="product_categoryID" name="product_categoryID" value="4">&nbsp;焗烤類&nbsp;</div>
                    <div>
                    <input type="radio" id="product_categoryID" name="product_categoryID" value="5">&nbsp;披薩類&nbsp;</div>
                    <div>
                    <input type="radio" id="product_categoryID" name="product_categoryID" value="6">&nbsp;排餐類&nbsp;</div>

                </div>
                
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">圖片</label>
                  <div class="col-10 text-left">
                    <img id="pic" src="" alt="" width="200" style="margin-bottom: 20px;">
                    <input type="file" class="form-control-file" id="picture" name="picture"></div>
                </div>

                  <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" contenteditable="true">價格</label>
                    <div class="col-10">
                      <input type="text" class="form-control" id="price" name="price"> </div>
                </div>
                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label">內容</label>
                  <div class="col-10">
                    <textarea rows="5" class="form-control" name="description"></textarea> </div>
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