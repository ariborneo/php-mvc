<section>
    <h1 class="page-header">Tambah Data Mahasiswa</h1>
    <form class="form-horizontal" role="form" style="width: 500px;" method="POST" action="<?php echo URL; ?>home/tambah">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <input name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">NIM</label>
            <div class="col-sm-10">
                <input name="nim" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input name="submit" type="submit" class="btn btn-success" value="Submit">
                <a href="<?php echo URL; ?>home/index" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>

</section>