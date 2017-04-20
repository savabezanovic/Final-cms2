<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/categories/" method="post" class="form">
    <input type="hidden" name="id" value="<?= $categories->id ?>">

        <label for="">Edit:</label> <br>

        <div class="form-group">

            <label for="name">Category Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="<?=$categories->name ?>" ?>

        </div>

    <div class="form-group">

        <label for="completed">Completed:</label>
        <input type="checkbox" name="completed" id="completed" value="1" <?= $categories->completed ? "checked" : ""; ?>>

    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>

    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
