<?php echo form_open('produk/edit/'.$produk['nama_produk']); ?>
    <div>
		Nama Produk : 
		<input type="text" name="nama_produk" value="<?php echo ($this->input->post('nama_produk') ? $this->input->post('nama_produk') : $produk['nama_produk']); ?>" />
	</div>
	<div>
		Keterangan : 
		<input type="text" name="keterangan" value="<?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $produk['keterangan']); ?>" />
	</div>
	<div>
		Harga : 
		<input type="text" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $produk['harga']); ?>" />
	</div>
	<div>
		Jumlah : 
		<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $produk['jumlah']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>