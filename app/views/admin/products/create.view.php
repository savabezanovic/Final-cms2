<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/products/new" method="post" class="form">

    <label for="">Add new:</label>

    <div class="form-group">

        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" class="form-control" ?>

    </div>

    <div class="form-group">

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" ?>

    </div>

    <div class="form-group">

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">

            <?php foreach ($categories as $category): ?>
            <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>

    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>

    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
