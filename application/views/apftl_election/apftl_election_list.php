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
        <h2 style="margin-top:0px">Apftl_election List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('apftl_election/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('apftl_election/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('apftl_election'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Distric</th>
		<th>Id Subdistric</th>
		<th>Female Register</th>
		<th>Male Register</th>
		<th>Total Register</th>
		<th>Female Elector</th>
		<th>Male Elector</th>
		<th>Total Elector</th>
		<th>Photo Male</th>
		<th>Name Male</th>
		<th>Birth P Male</th>
		<th>Birth D Male</th>
		<th>Address Male</th>
		<th>Mobile Male</th>
		<th>Email Male</th>
		<th>Valid Male</th>
		<th>Unvalid Male</th>
		<th>Photo Female</th>
		<th>Name Female</th>
		<th>Birth P Female</th>
		<th>Birth D Female</th>
		<th>Address Female</th>
		<th>Mobile Female</th>
		<th>Email Female</th>
		<th>Valid Female</th>
		<th>Unvalid Female</th>
		<th>Total Valid</th>
		<th>Total Unvalid</th>
		<th>Election Period</th>
		<th>Action</th>
            </tr><?php
            foreach ($apftl_election_data as $apftl_election)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $apftl_election->id_distric ?></td>
			<td><?php echo $apftl_election->id_subdistric ?></td>
			<td><?php echo $apftl_election->female_register ?></td>
			<td><?php echo $apftl_election->male_register ?></td>
			<td><?php echo $apftl_election->total_register ?></td>
			<td><?php echo $apftl_election->female_elector ?></td>
			<td><?php echo $apftl_election->male_elector ?></td>
			<td><?php echo $apftl_election->total_elector ?></td>
			<td><?php echo $apftl_election->photo_male ?></td>
			<td><?php echo $apftl_election->name_male ?></td>
			<td><?php echo $apftl_election->birth_p_male ?></td>
			<td><?php echo $apftl_election->birth_d_male ?></td>
			<td><?php echo $apftl_election->address_male ?></td>
			<td><?php echo $apftl_election->mobile_male ?></td>
			<td><?php echo $apftl_election->email_male ?></td>
			<td><?php echo $apftl_election->valid_male ?></td>
			<td><?php echo $apftl_election->unvalid_male ?></td>
			<td><?php echo $apftl_election->photo_female ?></td>
			<td><?php echo $apftl_election->name_female ?></td>
			<td><?php echo $apftl_election->birth_p_female ?></td>
			<td><?php echo $apftl_election->birth_d_female ?></td>
			<td><?php echo $apftl_election->address_female ?></td>
			<td><?php echo $apftl_election->mobile_female ?></td>
			<td><?php echo $apftl_election->email_female ?></td>
			<td><?php echo $apftl_election->valid_female ?></td>
			<td><?php echo $apftl_election->unvalid_female ?></td>
			<td><?php echo $apftl_election->total_valid ?></td>
			<td><?php echo $apftl_election->total_unvalid ?></td>
			<td><?php echo $apftl_election->election_period ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('apftl_election/read/'.$apftl_election->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('apftl_election/update/'.$apftl_election->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('apftl_election/delete/'.$apftl_election->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>