<?php require 'app/views/partials/header.php'; ?>
<div class="row">
    <div class="col-md-12 text-right padding-30">
        <a href="/admin/staff/new"  class="btn btn-primary new-margin">Add new <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</div>
<table class="table table-responsive table-hover table-bordered">
    <h1>Staff</h1>
    <tr>

        <th>Name</th>
        <th>Profesion</th>
        <th>Phone</th>
        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
    </tr>
        <?php foreach ($staff as $staff): ?>
    </tr>

    <td><?= $staff->name ?></td>
    <td><?= $staff->profesion ?></td>
    <td><?= $staff->phone ?></td>
    <td class="text-center"><?= ($staff->completed) ? "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>" : "<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>" ?></td>
    <td class="text-center">
        <a href="/admin/staff/edit?id=<?= $staff->id ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"
                                                                                      aria-hidden="true"></span> Edit
        </a>
        -
        <a href="/admin/staff/delete?id=<?= $staff->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
    </td>

    </tr>

    <?php endforeach; ?>
</table>

<?php require 'app/views/partials/footer.php'; ?>
