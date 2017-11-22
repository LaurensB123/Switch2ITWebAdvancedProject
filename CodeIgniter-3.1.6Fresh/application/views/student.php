<div class="container">
    <?php echo form_open('Welcome/editData','class="form-inline"') ?>
    <div style="margin-left:30%;margin-top:10%;">


        <div class="form-group">
            <label>Enter ID : </label>
            <input type="text" class="form-control" name="ID">
        </div>

        <button type="submit" class="btn btn-primary">Edit details</button>

    </div>
    <?php echo form_close() ?>
</div>

