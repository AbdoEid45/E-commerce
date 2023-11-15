

<div class="container">
    <h2>User Registration</h2>
    <form enctype="multipart/form-data" method="POST" action="functions/add_admin.php">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control"  name="username" required>
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control"  name="password" required>
        </div>
        <div class="form-group">
            <label for="image"> Image:</label>
            <input type="file" name="image" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control"  name="email" required>
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="role">role:</label>

            <select class="form-control " name="role">
                <option value="0">Super Admin</option>
                <option value="1">Admin</option>

            </select>
        </div>
        <br>

        <input type="submit" class="btn btn-group-justified btn-info" name="add" value="Add Admin">
    </form>
</div>
</div>
</div>
