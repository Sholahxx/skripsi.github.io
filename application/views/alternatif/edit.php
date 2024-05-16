<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

	<a href="<?= base_url('Alternatif'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw fa-edit"></i> Edit Data Calon Penerima</h6>
    </div>

	<?php echo form_open('Alternatif/update/'.$alternatif->id_alternatif); ?>
		<div class="card-body">
			<div class="row">
				<?php echo form_hidden('id_alternatif', $alternatif->id_alternatif) ?>
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Nama Calon Penerima</label>
					<input autocomplete="off" type="text" name="nama" value="<?php echo $alternatif->nama ?>" required class="form-control"/>

          <div class="form-group col-md-12">
          <label class="font-weight-bold">Usia</label>
					<input autocomplete="off" type="number" name="usia" value="<?php echo $alternatif->usia ?>" required class="form-control"/>
          </div>
          <label class="font-weight-bold">Alamat</label>
          <input autocomplete="off" type="text" name="alamat" value="<?php echo $alternatif->alamat ?>" required class="form-control"/>
				</div>
			</div>
		</div>
		<div class="card-footer text-right">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </div>
	<?php echo form_close() ?>
</div>

<?php $this->load->view('layouts/footer_admin'); ?>
