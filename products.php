<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("location: login.php");
    exit;
} else {
    include 'design/header.php';
    include 'design/nav.php';
    include 'design/sidebar.php';
    ?>
    <body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><em class="fa fa-home"></em></a></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">product</h1>
        </div>
        <?php
        if( !isset($_GET['do']))
        {
            include "view/view_product.php";
        }
        elseif ($_GET['do']=='add'){
            include "view/add_new_products.php";

        }elseif ($_GET['do'] =='edit'){
            include "view/edit_product.php";


        }elseif ($_GET['do']=='delete'){
            include "view/delete_product.php";


        }


        ?>
    </div>
</div>

    <?php
    include 'design/footer.php';
}
?>