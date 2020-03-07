<div class="container-fluid">
	<h2 style="margin-top:0px">Dadus Elisaun PFN</h2>
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-4">
			<?php echo anchor(site_url('apftl_election/export'), 'Relatoriu', 'class="btn btn-primary"'); ?>
		</div>
		<div class="col-md-4 text-center">
			<div style="margin-top: 8px" id="message">
				<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
			</div>
		</div>
		<div class="col-md-1 text-right">
		</div>
		<div class="col-md-3 text-right">
			<form action="<?php echo site_url('apftl_electionread/index'); ?>" class="form-inline" method="get">
				<div class="input-group">
					<input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
					<span class="input-group-btn">
						<?php
						if ($q <> '') {
							?>
						<a href="<?php echo site_url('apftl_electionread'); ?>" class="btn btn-default">Reset</a>
						<?php
						}
						?>
						<button class="btn btn-primary" type="submit">Buka</button>
					</span>
				</div>
			</form>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-bordered" style="margin-bottom: 10px" >
			<thead class="thead-dark">
				<tr>
					<th rowspan="2" class="text-nowrap align-middle">No</th>
					<th rowspan="2" class="text-nowrap align-middle">Municipu</th>
					<th rowspan="2" class="text-nowrap align-middle">Postu</th>
					<th rowspan="2" class="text-nowrap align-middle ">Periodu Elisaun</th>
					<th colspan="3" class="text-nowrap align-middle text-center">Aplikante</th>
					<th colspan="3" class="text-nowrap align-middle text-center">Selesiona</th>
					<th colspan="3" class="text-nowrap align-middle text-center">Candidata/u</th>
					<th colspan="7" class="text-nowrap align-middle text-center">Candidatu Eleitu</th>
					<th colspan="7" class="text-nowrap align-middle text-center">Candidata Eleitu</th>
					<th rowspan="2" class="text-nowrap align-middle text-center">Action</th>
				</tr>
				<tr>
					<th class="text-nowrap align-middle text-center">Feto</th>
					<th class="text-nowrap align-middle text-center">Mane</th>
					<th class="text-nowrap align-middle text-center">Total</th>
					<th class="text-nowrap align-middle text-center">Feto</th>
					<th class="text-nowrap align-middle text-center">Mane</th>
					<th class="text-nowrap align-middle text-center">Total</th>
					<th class="text-nowrap align-middle text-center">Feto</th>
					<th class="text-nowrap align-middle text-center">Mane</th>
					<th class="text-nowrap align-middle text-center">Total</th>
					<th class="text-nowrap align-middle text-center">Naran</th>
					<th class="text-nowrap align-middle text-center">Edukasaun</th>
					<th class="text-nowrap align-middle text-center">Fatin Moris</th>
					<th class="text-nowrap align-middle text-center">Data Moris</th>
					<th class="text-nowrap align-middle text-center">Adresu</th>
					<th class="text-nowrap align-middle text-center">Mobile</th>
					<th class="text-nowrap align-middle text-center">Email</th>
					<th class="text-nowrap align-middle text-center">Naran</th>
					<th class="text-nowrap align-middle text-center">Edukasaun</th>
					<th class="text-nowrap align-middle text-center">Fatin Moris</th>
					<th class="text-nowrap align-middle text-center">Data Moris</th>
					<th class="text-nowrap align-middle text-center">Adresu</th>
					<th class="text-nowrap align-middle text-center">Mobile</th>
					<th class="text-nowrap align-middle text-center">Email</th>

				</tr>
			</thead>
			<?php
			foreach ($apftl_election_data as $apftl_election) {
				?>
			<tr>
				<td width="80px"><?php echo ++$start ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->distric ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->subdistric ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->election_period ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->female_register ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->male_register ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->total_register ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->female_selected ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->male_selected ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->total_selected ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->female_candidate ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->male_candidate ?></td>
				<td class="text-nowrap text-center"><?php echo $apftl_election->total_candidate ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->name_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->edu_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->birth_p_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->birth_d_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->address_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->mobile_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->email_male ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->name_female ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->edu_female ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->birth_p_female ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->birth_d_female ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->address_female ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->mobile_female ?></td>
				<td class="text-nowrap"><?php echo $apftl_election->email_female ?></td>
				<td class="text-nowrap " style="text-align:center">
					<?php
						echo anchor(site_url('apftl_electionread/read/' . $apftl_election->id), 'Lee', 'class="badge badge-success"');
						?>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="#" class="btn btn-primary">Total Dadus : <?php echo $total_rows ?></a>
		</div>
		<div class="col-md-6 text-right">
		<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>