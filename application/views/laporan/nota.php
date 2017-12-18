<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">

<div class="box box-primary">
	<div class="box-body">
		<div class="row">
	  		<form class="form-horizontal">
				<div class="col-md-6">
					<div class="box-body">
						<div class="form-group">
		             		<div class="box-body">
		             			<label for="" class="col-sm-3 control-label">Layanan</label>
		                		<div class="row">
									<div class="col-xs-5">
				                  		<select class="form-control select2" style="width: 100%;">
											<option></option>
											<option>layanan 2</option>
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
											<option></option>
											<option>jenis 2</option>
										</select>
			                		</div>
		                		</div>
		             		</div>
						</div>

		             	<!-- <div class="form-group">
						</div> -->
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
							<div class="box-body">
								<label for="" class="col-sm-3 control-label">Periode</label>
								<div class="row">
									<div class="col-xs-4">
			                  			<input type="text" name="" id="tglperiode" class="form-control" placeholder="Tanggal">
			                		</div>
			                		<div class="col-xs-4">
			                  			<input type="text" nama="" id="keluarperiode" class="form-control" placeholder="Tanggal">
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
					              <button type="submit" class="btn btn-default"> Clear</button>
					              <button type="" class="btn btn-default"><a href="<?php //echo base_url('');?>" ><i class="fa fa-search"></i> Search</a></button>
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
					<th>No</th>
					<th>No Nota</th>						
					<th>Layanan</th>
					<th>Jenis Nota</th>
					<th>Customer</th>
					<th>Besaran Nota</th>
					<th>TTD Customer</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table> 
		<div class="col-md-6">
			<div class="box-body">
				<div class="form-group">
					<div class="col-sm-offset-10 col-sm-12"> 
						<button type="submit" class="btn btn-default"> Export To Excel</button>
						<button type="submit" class="btn btn-default"> Print Report</button>
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
    $('#tglperiode').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });

    $('#keluarperiode').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });
</script>

<script type="text/javascript">
	
</script>