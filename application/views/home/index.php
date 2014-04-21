<section>
    <h1 class="page-header">Data Mahasiswa</h1>
    <a href="<?php echo URL; ?>home/tambah" class="btn btn-success">Tambah Data</a>
    <table class="table table-striped table-bordered" style="margin-top: 10px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['nim']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td style="width: 6%;">
                        <a href="<?php echo URL; ?>home/detail/<?php echo $value['id'] ?>"><i class="glyphicon glyphicon-align-justify"></i></a>
                        <a href="<?php echo URL; ?>home/edit/<?php echo $value['id'] ?>"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="<?php echo URL; ?>home/delete/<?php echo $value['id'] ?>" onClick="return confirm('Yakin ingin menghapus data?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
        </tbody>
    </table>                    
</section>