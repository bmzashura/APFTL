<div class="container-fluid">
	<h2 style="margin-top:0px">Dadus Elisaun PFN</h2>
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-4">
			<?php echo anchor(site_url('apftl_election/create'), 'Aumenta', 'class="btn btn-primary"'); ?>
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
						if ($q <> '') {
							?>
						<a href="<?php echo site_url('apftl_election'); ?>" class="btn btn-default">Reset</a>
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
	<table class="table table-hover table-bordered" style="margin-bottom: 10px">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Municipu</th>
				<th>Postu</th>
				<th>Periodu Elisaun</th>
				<th>Aplikante Feto</th>
				<th>Aplikante Mane</th>
				<th>Total Aplikante</th>
				<th>Candidata</th>
				<th>Candidatu</th>
				<th>Total Candidata/u</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
		foreach ($apftl_election_data as $apftl_election) {
			?>
		<tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $apftl_election->distric ?></td>
			<td><?php echo $apftl_election->subdistric ?></td>
			<td><?php echo $apftl_election->election_period ?></td>
			<td><?php echo $apftl_election->female_register ?></td>
			<td><?php echo $apftl_election->male_register ?></td>
			<td><?php echo $apftl_election->total_register ?></td>
			<td><?php echo $apftl_election->female_candidate ?></td>
			<td><?php echo $apftl_election->male_candidate ?></td>
			<td><?php echo $apftl_election->total_candidate ?></td>
			<td style="text-align:center" width="200px">
				<?php
					echo anchor(site_url('apftl_election/read/' . $apftl_election->id), 'Lee');
					echo ' | ';
					echo anchor(site_url('apftl_election/update/' . $apftl_election->id), 'Edit');
					echo ' | ';
					echo anchor(site_url('apftl_election/delete/' . $apftl_election->id), 'Hamoos', 'onclick="javasciprt: return confirm(\'Konfirma paa hamoos ?\')"');
					?>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	</div>
	<div class="row">
		<div class="col-md-6">
			<a href="#" class="btn btn-primary">Total Dadus : <?php echo $total_rows ?></a>
		</div>
		<div class="col-md-6 text-right">
			<?php echo $pagination ?>
		</div>
	</div>
</div>