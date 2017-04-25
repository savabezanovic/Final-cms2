<?php require 'app/views/partials/header.php'; ?>
<div class="row">
    <div class="col-md-12 text-right padding-30">
        <a href="/admin/categories/new"  class="btn btn-primary new-margin">Add new <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</div>
<table class="table table-responsive table-hover table-bordered">

    <h1>Products Category</h1>
    <tr>

        <th>Category Name</th>



        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
    </tr>
    <?php foreach ($categories as $categories): ?>
        </tr>

        <td><?= $categories->name ?></td>


        <td class="text-center"><?= ($categories->completed) ? "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>" : "<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>" ?></td>
        <td class="text-center">
            <a href="/admin/categories/edit?id=<?= $categories->id ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"
                                                                                         aria-hidden="true"></span> Edit
            </a>
            -
            <a href="/admin/categories/delete?id=<?= $categories->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
        </td>

        </tr>

    <?php endforeach; ?>
</table>

<?php require 'app/views/partials/footer.php'; ?>
