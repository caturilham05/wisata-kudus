</div>
<?php if ($this->session->userdata('level') == 'admin') {?>

<div class="card">
    <div class="animated fadeIn">
        <div class="card-body">
			<a href="<?php echo base_url('admin/C_suratMasuk');?>">
			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-email text-primary border-primary"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Surat Pending</div>
								<div class="stat-digit"><span class="badge badge-danger"><?php echo $query->jumlah.'</span>';?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-location-arrow text-primary border-primary"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Surat Disetujui</div>
								<div class="stat-digit"><span class="badge badge-success"><?php echo $query2->jmlProses.'</span>';?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-email text-primary border-primary"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Total Surat Masuk</div>
								<div class="stat-digit"><span class="badge badge-info"><?php echo $query1->jmlSurat.'</span>';?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>
		</div>
	</div>
</div>
<?php } ?>

<?php if($this->session->userdata('level') == 'superadmin'){ ?>
<div class="card">
    <div class="animated fadeIn">
        <div class="card-body">
			<a href="<?php echo base_url('admin/C_suratMasuk');?>">
			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-email text-primary border-primary"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Surat Pending</div>
								<div class="stat-digit"><span class="badge badge-danger"><?php echo $sp->pending.'</span>';?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-location-arrow text-primary border-primary"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Surat Disetujui</div>
								<div class="stat-digit"><span class="badge badge-success"><?php echo $sd->setujui.'</span>';?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-email text-primary border-primary"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Total Surat Masuk</div>
								<div class="stat-digit"><span class="badge badge-info"><?php echo $ts->totalsurat.'</span>';?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>
		</div>
	</div>
</div>
<?php } ?>


<?php if($this->session->userdata('level') == 'superadmin'){ ?>

<div class="card">
	<div class="animated fadeIn">
		<div class="card-body">
	<?php foreach ($total as $row):?>
		

		<div class="col-lg-4 col-md-6">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="<?php echo base_url('admin/C_suratMasuk');?>"> <i class="fa fa-envelope-o"></i> <?= $row['nama_lembaga']; ?> / <?= $row['nama_rw']; ?>
						<span class="badge badge-primary pull-right"><?php echo $row['Disetujui'];?></span>
						<span class="badge badge-success pull-right" style="margin-left:20px; margin-right:20px"><?php echo $row['Pending'];?></span>
						<!-- <span class="badge badge-danger pull-right"><?php echo $row['s_1'];?></span> -->
					</a>
				</li>
				<!-- <li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 02 / RW. 01 
						<span class="badge badge-primary pull-right"><?php echo $row['s_2'];?></span>
						<span class="badge badge-success pull-right" style="margin-left:20px; margin-right:20px"><?php echo $row['s_2'];?></span>
						<span class="badge badge-danger pull-right"><?php echo $row['s_2'];?></span>
					</a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 03 / RW. 01 <span class="badge badge-success pull-right"><?php echo $row['s_3'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 04 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_4'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 05 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_5'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 06 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_7'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 07 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_5'];?></span></a>
				</li> -->
			</ul>
		</div>
		<?php endforeach; ?>
		<!-- <div class="col-lg-4 col-md-6">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> <?= $total->nama_lembaga ?><span class="badge badge-primary pull-right"><?php echo $row['s_8'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 09 / RW. 01 <span class="badge badge-danger pull-right"><?php echo $row['s_9'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 010 / RW. 01 <span class="badge badge-success pull-right"><?php echo $row['s_10'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 011 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_11'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 012 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_12'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 013 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_13'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 014 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_14'];?></span></a>
				</li>
			</ul>
		</div>

		<div class="col-lg-4 col-md-6">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 015 / RW. 01  <span class="badge badge-primary pull-right"><?php echo $row['s_15'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 016 / RW. 01 <span class="badge badge-danger pull-right"><?php echo $row['s_16'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 017 / RW. 01 <span class="badge badge-success pull-right"><?php echo $row['s_17'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 018 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_18'];?></span></a>
				</li>
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> RT. 019 / RW. 01 <span class="badge badge-warning pull-right r-activity"><?php echo $row['s_19'];?></span></a>
				</li>
			</ul>
		</div> -->
	
		</div>
	</div>
</div>

<?php } ?>
