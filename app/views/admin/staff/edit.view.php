<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/staff/" method="post" class="form">
    <input type="hidden" name="id" value="<?= $staff->id ?>">

        <label for="">Edit:</label>
    <div class="form-group">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= $staff->name ?>" ?>

    </div>

    <div class="form-group">

        <label for="profesion">Profesion:</label>
        <input type="text" name="profesion" id="profesion" class="form-control" value="<?= $staff->profesion ?>"?>
    </div>

    <div class="form-group">

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" class="form-control" value="<?= $staff->phone ?>"?>

    </div>

    <div class="form-group">

        <label for="completed">Completed:</label>
        <input type="checkbox" name="completed" id="completed" value="1" <?= $staff->completed ? "checked" : ""; ?>>
    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>

    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
