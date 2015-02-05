<table>
	<thead>
		<tr>
			<th>NPM</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list as $mahasiswa): ?>
		<tr>
			<td><?php echo $mahasiswa->npm; ?></td>
			<td><?php echo $mahasiswa->nama; ?></td>
			<td>
				<a href="<?php echo '/mahasiswa/delete/' . $mahasiswa->npm; ?>">Hapus</a> | 
				<a href="<?php echo '/mahasiswa/view/' . $mahasiswa->npm; ?>">Detail</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>