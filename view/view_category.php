<a href="?do=add" class="btn btn-group-justified btn-info">Add New category</a>
<?php
require "functions/connection.php";
$select_all_category = "SELECT * FROM categories ";
$result_all_category = $conn->query($select_all_category);
?>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $index = 1;
    foreach ($result_all_category as $key) {
        $category_name = $key['c_name'];
        $category_status = $key['c_status'];
        $id_category=$key['id'];
        ?>
        <tr>
            <th scope="row"><?= $id_category ?></th>
            <td><?= $category_name ?></td>
            <td><?php if($category_status === '0') {echo "Available";} else {echo  "Non-Available";} ?></td>
            <td>
                <a href="?do=edit&id=<?= $key['id'] ?>" class="btn btn-info">Edit</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$id_category?>">
                    Delete                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?=$id_category?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete (<span style="color: red;font-size: 20px;"><?=$category_name?></span>)
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="functions/delete_category.php?id=<?=$id_category?>" class="btn btn-danger">Confirm</a>

                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
