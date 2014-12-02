<!DOCTYPE html>
<?php $this->load->helper('url'); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <table>
            <tr>
                <td>NPM:</td>
                <td><?php echo $mahasiswa->npm; ?></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><?php echo $mahasiswa->nama; ?></td>
            </tr>
        </table>
        <?php echo anchor('mahasiswa/', 'Daftar') ?> | 
        <?php echo anchor("mahasiswa/delete/$mahasiswa->npm", 'Hapus'); ?>
    </body>
</html>