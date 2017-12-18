<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
<div class="box box-primary">
<!-- <section class="content"> -->
	<!-- <div class="box"> -->
		<div class="box-body">
			 <!-- <?php echo $tablecustom; ?> --> 
			<table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>NAMA</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>No. Identitas</th>
						<th>Alamat</th>
						<th>No. Telephone</th>
						<th>Lokasi Jemput</th>
					</tr>
				</thead>
				<?php
					$no = 1;
					foreach ($data_user as $du) {
				?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $du->user_name ?></td>
							<td><?php echo $du->user_kelamin ?></td>
							<td><?php echo $du->user_tglahir ?></td>
							<td><?php echo $du->user_identitas ?></td>
							<td><?php echo $du->user_alamat ?></td>
							<td><?php echo $du->user_telp ?></td>
							<td><?php echo $du->user_lokasi ?></td>
						</t>
					
					<?php }?>
			</table> 
			<div class="col-md-6">
				<div class="box-body">
					<div class="form-group">
						<div class="col-sm-offset-10 col-sm-12">
							<button type="submit" class="btn btn-default"> Print All in this List</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- </div> -->
<!-- </section> -->
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    //Date picker
    $('#tgl_nota').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });

    $('#keluar_nota').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });
</script>

<script type="text/javascript">
	
</script>