<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Apftl_election <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Distric <?php echo form_error('id_distric') ?></label>
            <input type="text" class="form-control" name="id_distric" id="id_distric" placeholder="Id Distric" value="<?php echo $id_distric; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Subdistric <?php echo form_error('id_subdistric') ?></label>
            <input type="text" class="form-control" name="id_subdistric" id="id_subdistric" placeholder="Id Subdistric" value="<?php echo $id_subdistric; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Female Register <?php echo form_error('female_register') ?></label>
            <input type="text" class="form-control" name="female_register" id="female_register" placeholder="Female Register" value="<?php echo $female_register; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Male Register <?php echo form_error('male_register') ?></label>
            <input type="text" class="form-control" name="male_register" id="male_register" placeholder="Male Register" value="<?php echo $male_register; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Total Register <?php echo form_error('total_register') ?></label>
            <input type="text" class="form-control" name="total_register" id="total_register" placeholder="Total Register" value="<?php echo $total_register; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Female Elector <?php echo form_error('female_elector') ?></label>
            <input type="text" class="form-control" name="female_elector" id="female_elector" placeholder="Female Elector" value="<?php echo $female_elector; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Male Elector <?php echo form_error('male_elector') ?></label>
            <input type="text" class="form-control" name="male_elector" id="male_elector" placeholder="Male Elector" value="<?php echo $male_elector; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Total Elector <?php echo form_error('total_elector') ?></label>
            <input type="text" class="form-control" name="total_elector" id="total_elector" placeholder="Total Elector" value="<?php echo $total_elector; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Photo Male <?php echo form_error('photo_male') ?></label>
            <input type="text" class="form-control" name="photo_male" id="photo_male" placeholder="Photo Male" value="<?php echo $photo_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Name Male <?php echo form_error('name_male') ?></label>
            <input type="text" class="form-control" name="name_male" id="name_male" placeholder="Name Male" value="<?php echo $name_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Birth P Male <?php echo form_error('birth_p_male') ?></label>
            <input type="text" class="form-control" name="birth_p_male" id="birth_p_male" placeholder="Birth P Male" value="<?php echo $birth_p_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Birth D Male <?php echo form_error('birth_d_male') ?></label>
            <input type="text" class="form-control" name="birth_d_male" id="birth_d_male" placeholder="Birth D Male" value="<?php echo $birth_d_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Address Male <?php echo form_error('address_male') ?></label>
            <input type="text" class="form-control" name="address_male" id="address_male" placeholder="Address Male" value="<?php echo $address_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mobile Male <?php echo form_error('mobile_male') ?></label>
            <input type="text" class="form-control" name="mobile_male" id="mobile_male" placeholder="Mobile Male" value="<?php echo $mobile_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email Male <?php echo form_error('email_male') ?></label>
            <input type="text" class="form-control" name="email_male" id="email_male" placeholder="Email Male" value="<?php echo $email_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Valid Male <?php echo form_error('valid_male') ?></label>
            <input type="text" class="form-control" name="valid_male" id="valid_male" placeholder="Valid Male" value="<?php echo $valid_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Unvalid Male <?php echo form_error('unvalid_male') ?></label>
            <input type="text" class="form-control" name="unvalid_male" id="unvalid_male" placeholder="Unvalid Male" value="<?php echo $unvalid_male; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Photo Female <?php echo form_error('photo_female') ?></label>
            <input type="text" class="form-control" name="photo_female" id="photo_female" placeholder="Photo Female" value="<?php echo $photo_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Name Female <?php echo form_error('name_female') ?></label>
            <input type="text" class="form-control" name="name_female" id="name_female" placeholder="Name Female" value="<?php echo $name_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Birth P Female <?php echo form_error('birth_p_female') ?></label>
            <input type="text" class="form-control" name="birth_p_female" id="birth_p_female" placeholder="Birth P Female" value="<?php echo $birth_p_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Birth D Female <?php echo form_error('birth_d_female') ?></label>
            <input type="text" class="form-control" name="birth_d_female" id="birth_d_female" placeholder="Birth D Female" value="<?php echo $birth_d_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Address Female <?php echo form_error('address_female') ?></label>
            <input type="text" class="form-control" name="address_female" id="address_female" placeholder="Address Female" value="<?php echo $address_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mobile Female <?php echo form_error('mobile_female') ?></label>
            <input type="text" class="form-control" name="mobile_female" id="mobile_female" placeholder="Mobile Female" value="<?php echo $mobile_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email Female <?php echo form_error('email_female') ?></label>
            <input type="text" class="form-control" name="email_female" id="email_female" placeholder="Email Female" value="<?php echo $email_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Valid Female <?php echo form_error('valid_female') ?></label>
            <input type="text" class="form-control" name="valid_female" id="valid_female" placeholder="Valid Female" value="<?php echo $valid_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Unvalid Female <?php echo form_error('unvalid_female') ?></label>
            <input type="text" class="form-control" name="unvalid_female" id="unvalid_female" placeholder="Unvalid Female" value="<?php echo $unvalid_female; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Total Valid <?php echo form_error('total_valid') ?></label>
            <input type="text" class="form-control" name="total_valid" id="total_valid" placeholder="Total Valid" value="<?php echo $total_valid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Total Unvalid <?php echo form_error('total_unvalid') ?></label>
            <input type="text" class="form-control" name="total_unvalid" id="total_unvalid" placeholder="Total Unvalid" value="<?php echo $total_unvalid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Election Period <?php echo form_error('election_period') ?></label>
            <input type="text" class="form-control" name="election_period" id="election_period" placeholder="Election Period" value="<?php echo $election_period; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('apftl_election') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>