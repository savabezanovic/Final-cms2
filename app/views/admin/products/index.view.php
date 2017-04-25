<?php require 'app/views/partials/header.php'; ?>
<div class="row">
    <div class="col-md-12 text-right padding-30">
        <a href="/admin/products/new"  class="btn btn-primary new-margin">Add new <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</div>
<table class="table table-responsive table-hover table-bordered products">
    <h1>Products</h1>
    <tr>

        <th>Product Name</th>
        <th>Price</th>
        <th>Category</th>
        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
        </tr>

        <td><?= $product->name ?></td>
        <td><?= $product->price ?>.00 din</td>
        <td><?= $product->categories ?></td>

        <td class="text-center"><?= ($product->completed) ? "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>" : "<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>" ?></td>
        <td class="text-center">
            <a href="/admin/products/edit?id=<?= $product->id ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"
                                                                                         aria-hidden="true"></span> Edit
            </a>
            -
            <a href="/admin/products/delete?id=<?= $product->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
        </td>

        </tr>

    <?php endforeach; ?>
</table>

<?php require 'app/views/partials/footer.php'; ?>
