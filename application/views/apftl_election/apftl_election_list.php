<div class="container-fluid">
	<h2 style="margin-top:0px">Apftl_election List</h2>
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-4">
			<?php echo anchor(site_url('apftl_election/create'), 'Create', 'class="btn btn-primary"'); ?>
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
						<button class="btn btn-primary" type="submit">Search</button>
					</span>
				</div>
			</form>
		</div>
	</div>
	<table class="table table-bordered" style="margin-bottom: 10px">
		<tr>
			<th>No</th>
			<th>Distric</th>
			<th>Subdistric</th>
			<th>Election Period</th>
			<th>Female Register</th>
			<th>Male Register</th>
			<th>Total Register</th>
			<th>Female Candidate</th>
			<th>Male Candidate</th>
			<th>Total Candidate</th>
			<th>Action</th>
		</tr><?php
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
					echo anchor(site_url('apftl_election/read/' . $apftl_election->id), 'Read');
					echo ' | ';
					echo anchor(site_url('apftl_election/update/' . $apftl_election->id), 'Update');
					echo ' | ';
					echo anchor(site_url('apftl_election/delete/' . $apftl_election->id), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
</div>