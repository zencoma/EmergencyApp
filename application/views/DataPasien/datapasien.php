<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">

<form action="<?php echo base_url(). 'datapasien/tambah_aksi'; ?>" methode="post">
	<table style="margin: 20px auto;">
		<tr>
			<td>Nomor RM</td>
			<td><input type="text" name="pasien_rm"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="pasien_name"></td>
		</tr>
		<tr>
			<td>No Identitas</td>
			<td><input type="text" name="pasien_identitas"></td>
		</tr>
		<tr>
               <td valign="top">Jenis Kelamin</td>
               <td>
    	    	<input type="radio" name="pasien_kelamin" value="L"/>Laki-Laki
    	    	<input type="radio" name="pasien_kelamin" value="P"/>Perempuan
    	    </td>
    	</tr>
		<tr>
			<td>Tempat/Tanggal Lahir</td>
			<td><input type="text" name="pasien_tmlahir"></td><br>
			<td><input type="date" name="pasien_tglahir"></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td><input type="text" name="pasien_umur"></td>
		</tr>
		<tr>
               <td valign="top">Golongan Darah</td>
               <td>
    	    	<input type="radio" name="pasien_goldarah" value="A"/>A
    	    	<input type="radio" name="pasien_goldarah" value="AB"/>AB
    	    	<input type="radio" name="pasien_goldarah" value="B"/>B
    	    	<input type="radio" name="pasien_goldarah" value="O"/>O
    	    </td>
    	</tr>
		<tr>
			<td>Telephone</td>
			<td><input type="text" name="pasien_telp"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="pasien_almt"></td>
		</tr>
		<tr>
               <td valign="top">Status Perkawinan</td>
               <td>
    	    	<input type="radio" name="pasien_stkawin" value="Belum Kawin"/>Belum Kawin
    	    	<input type="radio" name="pasien_stkawin" value="Sudah Kawin"/>Sudah Kawin
    	    </td>
    	</tr>
		<tr>
			<td>Tinggi Badan</td>
			<td><input type="text" name="pasien_tbadan"></td>
		</tr>
		<tr>
			<td>Berat Badan</td>
			<td><input type="text" name="pasien_bbadan"></td>
		</tr>
		<tr>
			<td>Pernah Operasi</td>
			<td><input type="text" name="pasien_operasi"></td>
		</tr>
		<tr>
			<td>Riwayat Alergi</td>
			<td><input type="text" name="pasien_rwalergi"></td>
		</tr>
		<tr>
			<td>Riwayat Penyakit Keluarga</td>
			<td><input type="text" name="pasien_rwkeluarga"></td>
		</tr>
		<tr>
			<td>Jenis Pasien</td>
			<td><input type="text" name="pasien_jenis"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="Save"></td>
		</tr>
				
	</table>

</form>

<div class="box box-primary">
<!-- <section class="content"> -->
	<!-- <div class="box"> -->
		<div class="box-body">
			 <!-- <?php echo $tablecustom; ?> --> 
			<table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>No RM</th>
						<th>Nama</th>
						<th>No Identitas</th>
						<th>Jenis Kelamin</th>
						<th>Tempat/Tgl Lahir</th>
						<th>Umur</th>
						<th>Golongan Darah</th>
						<th>Telepone</th>
						<th>Alamat</th>
						<th>Status Perkawinan</th>
						<th>T/B</th>
						<th>B/B</th>
						<th>Pernah Operasi</th>
						<th>Riwayat alergi</th>
						<th>RWT Penyakit Keluarga</th>
						<th>Jenis Pasien</th>

					</tr>
				</thead>
				<?php
					$no = 1;
					foreach ($data_pasien as $dp) {
				?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $dp->pasien_rm ?></td>
							<td><?php echo $dp->pasien_name ?></td>
							<td><?php echo $dp->pasien_identitas ?></td>
							<td><?php echo $dp->pasien_kelamin ?></td>
							<td><?php echo $dp->pasien_tmlahir ?>/<?php echo $dp->pasien_tglahir ?></td>
							<td><?php echo $dp->pasien_umur ?></td>
							<td><?php echo $dp->pasien_goldarah ?></td>
							<td><?php echo $dp->pasien_telp ?></td>
							<td><?php echo $dp->pasien_almt ?></td>
							<td><?php echo $dp->pasien_stkawin ?></td>
							<td><?php echo $dp->pasien_tbadan ?></td>
							<td><?php echo $dp->pasien_bbadan ?></td>
							<td><?php echo $dp->pasien_operasi ?></td>
							<td><?php echo $dp->pasien_rwalergi ?></td>
							<td><?php echo $dp->pasien_rwkeluarga ?></td>
							<td><?php echo $dp->pasien_jenis ?></td>
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