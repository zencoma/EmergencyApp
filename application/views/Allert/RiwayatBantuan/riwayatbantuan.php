<link rel="stylesheet"  href="<?php echo base_url ();?>assets/plugins/datepicker/datepicker3.css">

<div class="box box-primary">
<!-- <section class="content"> -->
	<!-- <div class="box"> -->
		<div class="box-body">
			<table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Telephone</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>DD/MM/YYYY</td>
						<td>Mr. SSSS</td>
						<td>L</td>
						<td>Jl.nnnnn</td>
						<td>08xxxxxx</td>
						<td><input type=checkbox name=c1 checked></td>
						<td><input type=checkbox name=c1 checked></td>
					</tr>
				</tbody>
			</table>
			<div class="col-md-6">
					<div class="box-body">
						<div class="form-group">
							<!-- <div class="box -body"> -->
					            <div class="col-sm-offset-10 col-sm-10">
					              <button type="submit" class="btn btn-default">Print All in this List</button>
					              
					            </div>
          					<!-- </div> -->
      					</div>
  					</div>
          		</div>
		</div>

		
	<!-- </div> -->
<!-- </section> -->
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js">	
</script>
<script type="text/javascript">
	$('#tgl_nota').datepicker({
		autoclose: true,
		format: 'dd/mm/yyyy',
		startDate: '-3d'

	});
	$('#tgl_nota2').datepicker({
		autoclose:true,
		format: 'dd/mm/yyyy',
		startDate: '-3d'

	});

</script>

<script type="text/javascript">
	
</script>