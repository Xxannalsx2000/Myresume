<nav class="navbar navbar-expand-md navbar-dark bg-dark" >
          <div class="container"> <a class="navbar-brand" href="#">
          <style>
            .coffee_black {
            background-color : #000 !important;
          } 
          .coffee_text1{
            font-size:36px;
          }
          </style>
            <a href="../index.php" class="coffee_text1"><img src="../images/logo2.png" alt="coffee logo">Breeze Coffee
            </a>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar10">
              <ul class="navbar-nav ml-auto">
              <?php if(isset($_SESSION['user']) && $_SESSION['user'] !=null) { ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="login.php">您好! <?php echo $_SESSION['user']['name']; ?><h6>welcome</h6></a></li>
               <?php }else{ ?>
               <?php } ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="about.php">關於我們<h6>about</h6></a></li>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="menu.php?categoryID=1">微風菜單<h6>menu</h6></a></li>
               <?php if(isset($_SESSION['user']) && $_SESSION['user'] !=null) { ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="member_only.php">會員專區<h6>Members only</h6></a></li>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="logout.php">會員登出<h6>logout</h6></a></li>
               <?php }else{ ?>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="login.php">會員登入<h6>login</h6></a></li>
                <li class="nav-item" > <a class="nav-link mx-2 coffee" href="register.php">會員申請<h6>register</h6></a></li>
               <?php } ?>
                   </li>
               </ul>
            </div>
          </div>
</nav>