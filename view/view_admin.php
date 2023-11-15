<a href="?do=add" class="btn btn-group-justified btn-info">Add New Admin</a>
<?php
require "functions/connection.php";
$select_all_admin = "SELECT * FROM admins ";
$result_all_admin = $conn->query($select_all_admin);
?>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">UserName</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $select_all_admin = "SELECT * FROM admins ";
    $result_all_admin = $conn->query($select_all_admin);
    foreach ($result_all_admin as $key) {
        $admin_id = $key['id'];
        $admin_user = $key['username'];
        $admin_image = $key['image'];
        $id_admin=$key['id'];
        ?>
        <tr>
            <th scope="row"><?= $admin_id ?></th>
            <td><?= $admin_user ?></td>
            <td>
                <img style="width: 100px;height: 100px" src="images/admins/<?= $admin_image ?>">
            </td>
            <td>
                <a href="?do=edit&id=<?=$key['id']?>" class="btn btn-info">Edit</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$id_admin?>">
Delete                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?=$id_admin?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete (<span style="color: red;font-size: 20px;"><?=$admin_user?></span>)
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="functions/delete_admin.php?id=<?=$id_admin?>" class="btn btn-danger">Confirm</a>

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
