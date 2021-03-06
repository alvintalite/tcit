<style type="text/css">
  nav.side-navbar.shrink{
    width: 100px;
    text-align: center;
  }
</style>
<?php 
  $user_name = $_SESSION['login_username'];
  $pdo = Database::connect();
  $name = $pdo->prepare("SELECT * FROM account WHERE user_name like '$user_name'");
  $name->execute();
  $name = $name->fetch(PDO::FETCH_ASSOC); 
?>
<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <div class="sidenav-header-inner text-center"><img src="<?php echo "img/" . $name['fname'] . ".jpg" ?>"" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5 text-uppercase">
          <?php
            echo $name['fname'] . ' ' . substr($name['mname'],0,1) . '. ' .$name['lname'];
          ?>  
        </h2><span class="text-uppercase">
          <?php
            echo $name['work_type'];
          ?>
        </span>
      </div>
      <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong class="text-primary">TCI</strong></a></div>
    </div>
    <div class="main-menu">
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="index.php"> <i class="icon-home"></i><span>Home</span></a></li>  
      </ul>
    </div>
    <div class="admin-menu">
      <ul id="side-admin-menu" class="side-menu list-unstyled"> 
        <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-screen"></i><span>Product</span>
            <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
          <ul id="pages-nav-list" class="collapse list-unstyled">
            <li> <a href="productlist.php">Product List</a></li>
            <li><a href="productcreate.php">Add New Product</a></li>
            <li> <a href="#">Featured Product</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-interface-windows"> </i><span>Purchase Order</span></a></li>
      </ul>
    </div>
  </div>
</nav>