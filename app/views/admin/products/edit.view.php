<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/products/" method="post" class="form">
    <input type="hidden" name="id" value="<?= $products->id ?>">

        <label for="">Edit:</label>

        <div class="form-group">

        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= $products->name ?>" ?>

        </div>

        <div class="form-group">

        <label for="price">Product Price:</label>
        <input type="text" name="price" id="price" class="form-control" value="<?= $products->price ?>"?>

        </div>

        <div class="form-group">
            <label for="category_id">Cateogry:</label>
            <select name="category_id" id="category_id" class="form-control">

                <?php foreach ($categories as $category): ?>

                    <option value="<?= $category->id ?>" <?= ($products->category_id == $category->id) ? "selected" : "" ?>><?= $category->name ?></option>

                <?php endforeach; ?>
            </select>

        </div>


    <div class="form-group">
        <label for="completed">Completed:</label>

        <input type="checkbox" name="completed" id="completed" value="1" <?= $products->completed ? "checked" : ""; ?>>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
