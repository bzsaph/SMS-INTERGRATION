
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h4><?php
           echo $_SESSION['fname']." ";
           echo  $_SESSION['usename'];
          ?></h4>
          <?php if(isset($_SESSION['usename'])){
         echo  ' <a href="#"><i class="fa fa-circle text-success"></i> Online</a>';
          }
          else {
           header('Location:../../.../index.php?signup=seccessful');;
          }
          ?>
         
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index2.php"><i class="fa fa-circle-o"></i>Draft messages</a></li>
            <li><a href="index.php"><i class="fa fa-circle-o"></i>home</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="top-nav.php"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="boxed.php"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="fixed.php"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="collapsed-sidebar.php"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
       
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>send sms here !</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="general.php"><i class="fa fa-circle-o"></i> sendsms</a></li>
            <li><a href="paymentform.php"><i class="fa fa-circle-o"></i> payment</a></li>
             </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                       <li><a href="data.php"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>

        <li>
          <a href="mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="profile.php"><i class="fa fa-circle-o"></i> Profile</a></li>
            </ul>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>