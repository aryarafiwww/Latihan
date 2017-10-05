<?php
	include("db.php");
	$query = "SELECT * FROM matakuliah";
	$hasil = mysqli_query($koneksi, $query);
?>
<h1>Data Mata Kuliah</h1>

<a href="template.php?page=formmatakuliah&action=add">Tambah Data</a>

<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	
		<?php
			while($row = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kode_matkul']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td>

				<a href="template.php?page=formmatakuliah&id= <?php echo $row['id'];?> &action=edit">Edit</a>
				<a href="proses_matakuliah.php?action=delete&id= <?php echo $row['id'];?> ">Delete</a>

			</td>
		</tr>
		
		<?php
	}
?>

	</tbody>

</table>