<section>
    <h1 class="page-header">Data Mahasiswa</h1>
    <table class="table table-striped" id="detail">
        <tr>
            <th>Nama</th>
            <td class="span">:</td>
            <td><?php echo $data['nama']; ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td class="span">:</td>
            <td><?php echo $data['nim']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td class="span">:</td>
            <td><?php echo $data['email']; ?></td>
        </tr>
        <tr>
            <th></th>
            <td class="span"></td>
            <td></td>
        </tr>
    </table>
    <a style="margin-bottom: 20px;" href="<?php echo URL; ?>home/index" class="btn btn-danger">Kembali</a>
</section>