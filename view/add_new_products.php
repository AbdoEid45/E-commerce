<div class="container">
    <h2>User Registration</h2>
    <form enctype="multipart/form-data" method="POST" action="functions/add_product.php">
        <div class="form-group">
            <label for="username">name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label>price:</label>
            <input type="text" class="form-control" name="price" required>
        </div>
        <div class="form-group">
            <label>discount:</label>
            <input type="text" class="form-control" name="discount" required>
        </div>
        <div class="form-group">
            <label>stock:</label>
            <input type="text" class="form-control" name="stock" required>
        </div>

        <label>Description</label>
        <textarea class="form-control" name="details"></textarea>
        <div>
            <label for="image"> Image:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="category">category:</label>
            <select class="form-control" name="category"> <!-- Change 'role' to 'category' -->
                <?php
                $select_categories = "SELECT * FROM categories";
                $result_categories = $conn->query($select_categories);
                foreach ($result_categories as $key_category) {
                    ?>
                    <option value="<?= $key_category['id'] ?>"><?= $key_category['c_name'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <br>

        <input type="submit" class="btn btn-group-justified btn-info" name="add" value="Add product">
    </form>
</div>
