<?php echo form_open('produk/add'); ?>

    <div>
		Nama Produk : 
		<input type="text" name="nama produk" value="<?php echo $this->input->post('nama_produk'); ?>" />
	</div>
	<div>
		Keterangan : 
		<input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" />
	</div>
	<div>
		Harga : 
		<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" />
	</div>
	<div>
		Jumlah : 
		<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>