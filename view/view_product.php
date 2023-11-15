<a href="?do=add" class="btn btn-group-justified btn-info">Add New product</a>
<?php
require "functions/connection.php";
$select_all_product = "SELECT * FROM products ";
$result_all_product = $conn->query($select_all_product);
?>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $select_all_product = "SELECT * FROM products ";
    $result_all_product = $conn->query($select_all_product);
    foreach ($result_all_product as $key) {
        $product_id = $key['id'];
        $product_name = $key['p_name'];
        $product_image = $key['p_image'];
        $id_product=$key['id'];
        ?>
        <tr>
            <th scope="row"><?= $product_id ?></th>
            <td><?= $product_name ?></td>
            <td>
                <img style="width: 100px;height: 100px" src="images/products/<?= $product_image ?>">
            </td>
            <td>
                <a href="?do=edit&id=<?=$key['id']?>" class="btn btn-info">Edit</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$id_product?>">
                    Delete                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?=$id_product?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete (<span style="color: red;font-size: 20px;"><?=$product_name?></span>)
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="functions/delete_product.php?id=<?=$id_product?>" class="btn btn-danger">Confirm</a>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="?do=view" class="btn btn-warning">View Details</a>

            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php
