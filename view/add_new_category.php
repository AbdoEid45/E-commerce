

<div class="container">
    <h2>User Registration</h2>
    <form  method="POST" action="functions/add_category.php">
        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" class="form-control"  name="name" required>
        </div>
        <div class="form-group">
            <label for="status">Category status:</label>

            <select class="form-control " name="status">
                <option value="0">Available</option>
                <option value="1">Non-Available</option>

            </select>
        </div>



        <br>

        <input type="submit" class="btn btn-group-justified btn-info" name="add" value="Add category">
    </form>
</div>
</div>
</div>
