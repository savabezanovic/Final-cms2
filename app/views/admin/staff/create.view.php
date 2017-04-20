<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/staff/new" method="post" class="form">


        <label for="">Add new:</label>


    <div class="form-group">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" ?>

    </div>

    <div class="form-group">

        <label for="profesion">Profesion:</label>
        <input type="text" name="profesion" id="profesion" class="form-control" ?>

    </div>

    <div class="form-group">

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" class="form-control" ?>

    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>

    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
