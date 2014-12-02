<!DOCTYPE html>
<?php
    $this->load->helper('form');
    $this->load->helper('url');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
            </tr>
            <?php foreach ($mahasiswa_list as $mahasiswa): ?>
                <tr>
                    <td><?php echo anchor("mahasiswa/view/$mahasiswa->npm", $mahasiswa->npm); ?></td>
                    <td><?php echo $mahasiswa->nama; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h1>Tambah Mahasiswa</h1>
        <?php echo form_open('mahasiswa/add'); ?>
            <?php echo form_label('NPM: ', 'npm'); ?>
            <?php echo form_input('npm'); ?>
            <?php echo form_label('Nama: ', 'nama'); ?>
            <?php echo form_input('nama'); ?>
            <?php echo form_submit('add', 'Add'); ?>
        <?php form_close(); ?>
    </body>
</html>