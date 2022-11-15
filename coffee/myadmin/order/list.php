<?php require_once('../../connection/connection.php'); ?>
<?php
    $limit = 10;
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
      $page = 1;
    }
    $start_from = ($page-1) * $limit;
    $query = $db->query("SELECT * FROM reservation ORDER BY reservation_orderID  DESC LIMIT ".$start_from.",".$limit);
    $all_member = $query->fetchAll(PDO::FETCH_ASSOC);

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
              <h1>預約管理</h1>
            </div>
            <div class="card-body">
              <ul class="breadcrumb mb-2">
                <li class="breadcrumb-item"> <a href="../index/list.php">首頁</a> </li>
                <li class="breadcrumb-item active">會員管理</li>
              </ul>
              <div class="table-responsive">
                <table class="table table-striped table-borderless">
                  <thead>
                    <tr class="coffee">
                      <th scope="col">名稱</th>
                      <th scope="col">時間</th>
                      <th scope="col">人數</th>
                      <th scope="col">電話</th>
                      <th scope="col" width="20%">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($all_member as $member){ ?>
                    <tr class="coffee">
                      <th scope="row" >
                          <?php echo $member['name']; ?></th>
                      <td><?php echo $member['time']; ?></td>
                      <td><?php echo $member['people']; ?></td>
                      <td><?php echo $member['mobile']; ?></td>
                      <td><a class="btn btn-secondary" href="edit.php?gmemberID=<?php echo $member['memberID']; ?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;編輯</a>
                          <a onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};" class="btn btn-secondary ml-2" href="delete.php?gmemberID=<?php echo $member['memberID']; ?>"><i class="fa fa-fw fa-trash-o"></i>&nbsp;刪除</a></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php
                $query2 = $db->query("SELECT * FROM member");
                $data = $query2 ->fetchAll(PDO::FETCH_ASSOC);
                $total_pages = ceil(count($data)/$limit);
              ?>
              <ul class="pagination my-3 justify-content-center">
                    <li class="page-item"> <a class="page-link" href="list.php?page=<?php if ($page==1){echo $page;}else {echo $page-1;} ?>"> <span>«</span></a> </li> 
                    <?php for ($i=1; $i<=$total_pages ; $i++){ ?>

                    <?php if($page == $i){ ?>
                      <li class="page-item active">
                    <?php }else{ ?>
                      <li class="page-item">
                    <?php } ?>

                     <a class="page-link" href="list.php?page=<?php echo $i; ?>"><?php echo $i;?></a> </li>
                    <?php }?>

                    <li class="page-item"><a class="page-link" href="list.php?page=<?php echo $page+1; ?>"> <span>»</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('../layouts/footer.php'); ?>
</body>

</html>