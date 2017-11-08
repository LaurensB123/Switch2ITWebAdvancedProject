<div>
    <div >
        <?php echo form_open('Welcome/editnewData','class="form-horizontal"') ?>

        <?php foreach($info as $detail) ?>

        <div >
            <label for="ID" >ID :</label>
            <div>
                <input type="text" id="ID" name="ID" placeholder="ID" value="<?php echo $detail->ID ?>">
            </div>
        </div>

        <div >
            <label for="name" >Name :</label>
            <div >
                <input type="text"  id="name" placeholder="name" name="name" value="<?php echo $detail->name ?>">
            </div>
        </div>

        <div >
            <label for="email" >Email :</label>
            <div>
                <input type="text"  id="email" name="email" placeholder="Email" value="<?php echo $detail->email ?>">
            </div>
        </div>
        </br>
        <div >
            <div >
                <input type="submit" value="Update"  />
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>