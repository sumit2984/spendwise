


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../assets/images/user.png" class="img-responsive" alt="user logo">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsadminid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$uid'");
$row=mysqli_fetch_array($ret);
$adminname=$row['AdminName'];

?>
                <div class="profile-usertitle-name"><?php echo $adminname; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-clone">&nbsp;</em>Category <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="add-category.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add 
                    </a></li>
                    <li><a class="" href="manage-category.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Manage 
                    </a></li>
                    
                </ul>

            </li>
           <li><a href="reg-users.php"><em class="fa fa-users">&nbsp;</em> Reg Users</a></li>
  <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em>Reports <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="categorywise-report.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Users Expenses
                    </a></li>
                    <li><a class="" href="registered-users-report.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Registered Users
                    </a></li>
                
                    
                </ul>
            </li>




            
            <li><a href="profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>