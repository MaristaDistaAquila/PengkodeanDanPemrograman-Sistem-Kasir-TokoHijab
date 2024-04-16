<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
<a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
<h4>Details Barang</h4>
<?php if(isset($_GET['success-stok'])){?>
<div class="alert alert-success">
	<p>Tambah Stok Berhasil Dilakukan !</p>
</div>
<?php }?>
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
	<p>Tambah Data Berhasil Dilakukan !</p>
</div>
<?php }?>
<?php if(isset($_GET['remove'])){?>
<div class="alert alert-danger">
	<p>Hapus Data Berhasil Dilakukan !</p>
</div>
<?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td>Kode Hijab</td>
				<td><?php echo $hasil['kode_hijab'];?></td>
			</tr>
			<tr>
				<td>Kategori Hijab</td>
				<td><?php echo $hasil['nama_kategori'];?></td>
			</tr>
			<tr>
				<td>Nama Hijab</td>
				<td><?php echo $hasil['nama_barang'];?></td>
			</tr>
			<tr>
				<td>Merk Hijab</td>
				<td><?php echo $hasil['merk'];?></td>
			</tr>
			<tr>
				<td>Harga Beli Hijab</td>
				<td><?php echo $hasil['harga_beli'];?></td>
			</tr>
			<tr>
				<td>Harga Jual Hijab</td>
				<td><?php echo $hasil['harga_jual'];?></td>
			</tr>
			<tr>
				<td>Satuan Produk Hijab</td>
				<td><?php echo $hasil['satuan_barang'];?></td>
			</tr>
			<tr>
				<td>Stok Hijab</td>
				<td><?php echo $hasil['stok'];?></td>
			</tr>
			<tr>
				<td>Tanggal Input Produk</td>
				<td><?php echo $hasil['tgl_input'];?></td>
			</tr>
			<tr>
				<td>Tanggal Update Produk</td>
				<td><?php echo $hasil['tgl_update'];?></td>
			</tr>
		</table>
	</div>
</div>