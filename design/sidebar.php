<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="images/admins/<?=$_SESSION['image']?>" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                <?php
                echo $_SESSION['username'];
                ?>
            </div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em>Dashboard</a></li>
        <li><a href="users.php"><em class="fa fa-bar-chart">&nbsp;</em> Users</a></li>
        <li><a href="products.php"><em class="fa fa-toggle-off">&nbsp;</em>Products</a></li>
        <li><a href="categories.php"><em class="fa fa-toggle-off">&nbsp;</em>Categories</a></li>
        <li><a href="functions/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->
