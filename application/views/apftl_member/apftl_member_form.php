<div class="container-fluid">
    <h2 style="margin-top:0px">Apftl_member <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Photo <?php echo form_error('photo') ?></label>
            <input type="text" class="form-control" name="photo" id="photo" placeholder="Photo" value="<?php echo $photo; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">F Name <?php echo form_error('f_name') ?></label>
            <input type="text" class="form-control" name="f_name" id="f_name" placeholder="F Name" value="<?php echo $f_name; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">L Name <?php echo form_error('l_name') ?></label>
            <input type="text" class="form-control" name="l_name" id="l_name" placeholder="L Name" value="<?php echo $l_name; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Gender <?php echo form_error('gender') ?></label>
            <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" value="<?php echo $gender; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Birth P <?php echo form_error('birth_p') ?></label>
            <input type="text" class="form-control" name="birth_p" id="birth_p" placeholder="Birth P" value="<?php echo $birth_p; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Birth D <?php echo form_error('birth_d') ?></label>
            <input type="text" class="form-control" name="birth_d" id="birth_d" placeholder="Birth D" value="<?php echo $birth_d; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Address <?php echo form_error('address') ?></label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Phone N <?php echo form_error('phone_n') ?></label>
            <input type="text" class="form-control" name="phone_n" id="phone_n" placeholder="Phone N" value="<?php echo $phone_n; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Periodu <?php echo form_error('periodu') ?></label>
            <input type="text" class="form-control" name="periodu" id="periodu" placeholder="Periodu" value="<?php echo $periodu; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_member') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>