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
        <h2 style="margin-top:0px">Apftl_election Read</h2>
        <table class="table">
	    <tr><td>Id Distric</td><td><?php echo $id_distric; ?></td></tr>
	    <tr><td>Id Subdistric</td><td><?php echo $id_subdistric; ?></td></tr>
	    <tr><td>Female Register</td><td><?php echo $female_register; ?></td></tr>
	    <tr><td>Male Register</td><td><?php echo $male_register; ?></td></tr>
	    <tr><td>Total Register</td><td><?php echo $total_register; ?></td></tr>
	    <tr><td>Female Elector</td><td><?php echo $female_elector; ?></td></tr>
	    <tr><td>Male Elector</td><td><?php echo $male_elector; ?></td></tr>
	    <tr><td>Total Elector</td><td><?php echo $total_elector; ?></td></tr>
	    <tr><td>Photo Male</td><td><?php echo $photo_male; ?></td></tr>
	    <tr><td>Name Male</td><td><?php echo $name_male; ?></td></tr>
	    <tr><td>Birth P Male</td><td><?php echo $birth_p_male; ?></td></tr>
	    <tr><td>Birth D Male</td><td><?php echo $birth_d_male; ?></td></tr>
	    <tr><td>Address Male</td><td><?php echo $address_male; ?></td></tr>
	    <tr><td>Mobile Male</td><td><?php echo $mobile_male; ?></td></tr>
	    <tr><td>Email Male</td><td><?php echo $email_male; ?></td></tr>
	    <tr><td>Valid Male</td><td><?php echo $valid_male; ?></td></tr>
	    <tr><td>Unvalid Male</td><td><?php echo $unvalid_male; ?></td></tr>
	    <tr><td>Photo Female</td><td><?php echo $photo_female; ?></td></tr>
	    <tr><td>Name Female</td><td><?php echo $name_female; ?></td></tr>
	    <tr><td>Birth P Female</td><td><?php echo $birth_p_female; ?></td></tr>
	    <tr><td>Birth D Female</td><td><?php echo $birth_d_female; ?></td></tr>
	    <tr><td>Address Female</td><td><?php echo $address_female; ?></td></tr>
	    <tr><td>Mobile Female</td><td><?php echo $mobile_female; ?></td></tr>
	    <tr><td>Email Female</td><td><?php echo $email_female; ?></td></tr>
	    <tr><td>Valid Female</td><td><?php echo $valid_female; ?></td></tr>
	    <tr><td>Unvalid Female</td><td><?php echo $unvalid_female; ?></td></tr>
	    <tr><td>Total Valid</td><td><?php echo $total_valid; ?></td></tr>
	    <tr><td>Total Unvalid</td><td><?php echo $total_unvalid; ?></td></tr>
	    <tr><td>Election Period</td><td><?php echo $election_period; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('apftl_election') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>