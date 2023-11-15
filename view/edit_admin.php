<?php
$id = $_GET['id'];
$select_one_admin = "SELECT * FROM admins WHERE id = $id";
$result_one = $conn->query($select_one_admin);

$row_one = $result_one->fetch_assoc();

?>

<div class="container">
    <h2>User Registration</h2>
    <form action="functions/edit_admin.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" value="<?= $id ?>" name="id" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" value="<?= $row_one['username'] ?>" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" value="<?= $row_one['password'] ?>" name="password" required>
        </div>
        <div class="form-group">
            <label for="image"> Image:</label>
            <img style="width: 50px; height: 50px;" src="images/admins/<?= $row_one['image'] ?>">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" value="<?= $row_one['email'] ?>" name="email" required>
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="role">role:</label>

            <select class="form-control" name="role">
                <option value="0"    <?= $row_one['role'] == 0 ? 'selected' : '' ?>>Super Admin</option>
                <option value="1" <?= $row_one['role'] == 1 ? 'selected' : '' ?>>Admin</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-group-justified btn-info" name="edit" value="edit Admin">
    </form>
</div>
</div>
</div>