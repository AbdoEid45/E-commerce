<?php
$id = $_GET['id'];
$select_one_product = "SELECT * FROM products WHERE id = $id";
$result_one = $conn->query($select_one_product);
$row_one = $result_one->fetch_assoc();
$id_category = $row_one['id_category'];
?>

<div class="container">
    <form action="functions/edit_product.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id">Product ID:</label>
            <!-- Add readonly attribute for ID as it shouldn't be editable -->
            <input type="text" class="form-control" value="<?= $id ?>" name="id" readonly required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" value="<?= $row_one['p_name'] ?>" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" value="<?= $row_one['p_price'] ?>" name="price" required>
        </div>
        <div class="form-group">
            <label for="discount">Discount:</label>
            <input type="text" class="form-control" value="<?= $row_one['p_discount'] ?>" name="discount" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" value="<?= $row_one['p_stock'] ?>" name="stock" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <img style="width: 50px; height: 50px;" src="images/products/<?= $row_one['p_image'] ?>" alt="Product Image">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="details">Description:</label>
            <textarea class="form-control" name="details"><?= $row_one['p_details'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" name="category">
                <?php
                $select_categories = "SELECT * FROM categories";
                $result_categories = $conn->query($select_categories);
                foreach ($result_categories as $key_category) {
                    $category_id = $key_category['id'];
                    ?>
                    <option <?php if ($category_id === $id_category) {echo "selected";} ?> value="<?= $category_id ?>">
                        <?= $key_category['c_name'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-group-justified btn-info" name="edit" value="Edit Product">
    </form>
</div>
