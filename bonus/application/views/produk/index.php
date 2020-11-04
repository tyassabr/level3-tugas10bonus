<table border="1" width="100%">
    <tr>
		<th>Nama Produk</th>
		<th>Keterangan</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Actions</th>
    </tr>
	<?php foreach($produk as $p){ ?>
    <tr>
		<td><?php echo $p['nama_produk']; ?></td>
		<td><?php echo $p['keterangan']; ?></td>
		<td><?php echo $p['harga']; ?></td>
		<td><?php echo $p['jumlah']; ?></td>
		<td>
            <a href="<?php echo site_url('produk/edit/'.$p['nama_produk']); ?>">Edit</a> | 
            <a href="<?php echo site_url('produk/remove/'.$p['nama_produk']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
