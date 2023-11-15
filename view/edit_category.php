<?php
$id = $_GET['id'];
$select_one_category = "SELECT * FROM categories WHERE id = $id";
$result_one = $conn->query($select_one_category);

$row_one = $result_one->fetch_assoc();

?>

<div class="container">
    <form action="functions/edit_category.php" method="POST" >
        <div class="form-group">
            <input type="hidden" class="form-control" value="<?= $id ?>" name="id" required>
        </div>
        <div class="form-group">
            <label >name:</label>
            <input type="text" class="form-control" value="<?= $row_one['c_name'] ?>" name="name" required>
        </div>
        <div class="form-group">
            <label for="role">role:</label>

            <select class="form-control" name="status">
                <option value="0"    <?= $row_one['c_status'] == 0 ? 'selected' : '' ?>>Available</option>
                <option value="1" <?= $row_one['c_status'] == 1 ? 'selected' : '' ?>>Non-Availble</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-group-justified btn-info" name="edit" value="edit category">
    </form>
</div>
</div>
</div>