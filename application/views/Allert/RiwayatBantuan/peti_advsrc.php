<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">

<div class="box box-primary">
	<div class="box-body">
		<div class="row">
	  		<form class="form-horizontal">
				<div class="col-md-6">
					<div class="box-body">
						<div class="form-group">
							<div class="box-body">
								<label for="" class="col-sm-3 control-label">No Nota</label>
								<div class="row">
									<div class="col-xs-5">
			                  			<input type="text" name="" id="" class="form-control" placeholder="No Nota">
			                		</div>
		                		</div>
		             		</div>
	             		</div>

	             		<div class="form-group">
							<div class="box-body">
								<label for="" class="col-sm-3 control-label">No Pranota</label>
								<div class="row">
									<div class="col-xs-5">
			                  			<input type="text" name="" id="" class="form-control" placeholder="No Pronota">
			                		</div>
		                		</div>
		             		</div>
	             		</div>

	             		<div class="form-group">
		             		<div class="box-body">
		             			<label for="" class="col-sm-3 control-label">Status Bayar</label>
		                		<div class="row">
									<div class="col-xs-5">
				                  		<select class="form-control select2" style="width: 100%;">
											<option>Tagihan</option>
											<option>Lunas</option>
										</select>
			                		</div>
		                		</div>
		             		</div>
						</div>

						<div class="form-group">
		             		<div class="box-body">
		             			<label for="" class="col-sm-3 control-label">Jenis Nota</label>
		                		<div class="row">
									<div class="col-xs-5">
				                  		<select class="form-control select2" style="width: 100%;">
											<option>Jenis Nota 1</option>
											<option>Jenis Nota 2</option>
										</select>
			                		</div>
		                		</div>
		             		</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="box-body">
						<div class="form-group">
							<div class="box-body">
								<label for="" class="col-sm-3 control-label">Customer</label>
								<div class="row">
									<div class="col-xs-5">
			                  			<input type="text" name="" id="" class="form-control" placeholder="Customer">
			                		</div>
	                			</div>
							</div>
						</div>

						<div class="form-group">
							<!-- <label for="" class="col-sm-3 control-label">Tanggal Nota</label> -->
							<!-- <div class="col-sm-8">
								<input type="text" name="tgl_nota" class="form-control" placeholder="tanggal nota" style="width: 50%;">
							</div> -->
							<div class="box-body">
								<label for="" class="col-sm-3 control-label">Tanggal Nota</label>
								<div class="row">
									<div class="col-xs-4">
			                  			<input type="text" name="" id="tgl_nota" class="form-control" placeholder="Tanggal">
			                		</div>
			                		<div class="col-xs-4">
			                  			<input type="text" nama="" id="keluar_nota" class="form-control" placeholder="Tanggal">
			                		</div>
	                			</div>
							</div>

							<div class="box-body">
								<label for="" class="col-sm-3 control-label">Jenis Pelayaran</label>
								<div class="row">
									<div class="col-xs-5">
										<select class="form-control select2" style="width: 100%;">
											<option>all</option>
											<option>domestik</option>
											<option>ocean going</option>
										</select>
									</div>
								</div>
							</div>

		             		<div class="box-body">
		             			<label for="" class="col-sm-3 control-label">Area</label>
		                		<div class="row">
									<div class="col-xs-5">
				                  		<select class="form-control select2" style="width: 100%;">
											<option>area 1</option>
											<option>area 2</option>
										</select>
			                		</div>
		                		</div>
		             		</div>

		             		<div class="box-body">
		             			<label for="" class="col-sm-3 control-label">Penerbit Nota</label>
		                		<div class="row">
									<div class="col-xs-5">
				                  		<select class="form-control select2" style="width: 100%;">
											<option>penerbit 1</option>
											<option>Penerbit 2</option>
										</select>
			                		</div>
		                		</div>
		             		</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="box-body">
						<div class="form-group">
				            <div class="col-sm-offset-12 col-sm-10">
				            	<div class="col-sm-6"></div> 
				            	<div class="col-sm-6">
					              <button type="submit" class="btn btn-default"> Clear</button>
					              <button type="" class="btn btn-default"><a href="<?php //echo base_url('');?>" ><i class="fa fa-search"></i> Search</a></button>
				          		</div>
				            </div>
      					</div>
  					</div>
          		</div>

			</form>
		</div>
	</div>
</div>

<div class="box box-primary">
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No Nota</th>
					<th>Area</th>
					<th>Jenis Nota</th>
					<th>Tanggal Nota</th>
					<th>Nama Customer</th>
					<th>Jumlah Total</th>
					<th>Status Bayar</th>
					<th>Pernah Cetak</th>
					<th>Pernah Kirim</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>234092</td>
					<td>T01</td>
					<td>Receeiving</td>
					<td>20/09/2017</td>
					<td>PT ABC</td>
					<td>Rp. 3.000.000</td>
					<td>Lunas</td>
					<td><center><input type="checkbox"></center></td>
					<td><center><input type="checkbox"></center></td>
					<td><center><i class="fa fa-print"></i></center></td>
				</tr>
				<tr>
					<td>234093</td>
					<td>T02</td>
					<td>Receeiving</td>
					<td>20/09/2017</td>
					<td>PT ABC</td>
					<td>Rp. 10.000.000</td>
					<td>Lunas</td>
					<td><center><input type="checkbox"></center></td>
					<td><center><input type="checkbox"></center></td>
					<td><center><i class="fa fa-print"></i></center></td>
				</tr>
				<tr>
					<td>234094</td>
					<td>T03</td>
					<td>Bongkar Muat</td>
					<td>20/09/2017</td>
					<td>PT DEF</td>
					<td>Rp. 2.000.000</td>
					<td>Lunas</td>
					<td><center><input type="checkbox"></center></td>
					<td><center><input type="checkbox"></center></td>
					<td><center><i class="fa fa-envelope"></i> <i class="fa fa-print"></i></center></td>
				</tr>
				<tr>
					<td>234095</td>
					<td>T03</td>
					<td>Bongkar Muat</td>
					<td>20/09/2017</td>
					<td>PT DEF</td>
					<td>Rp. 5.000.000</td>
					<td>Belum Lunas</td>
					<td><center><input type="checkbox"></center></td>
					<td><center><input type="checkbox"></center></td>
					<td><center><i class="fa fa-envelope"></i> <i class="fa fa-print"></i></center></td>
				</tr>
			</tbody>
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