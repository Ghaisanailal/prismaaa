  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Input Data Pegawai
        </h4>
      </div> <!-- /.page-header -->
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php" enctype="multipart/form-data">

          <div class="form-group">
              <label class="col-sm-2 control-label">ID</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">NAMA LENGKAP</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="username" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" name="password" autocomplete="off" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">NIS</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nis" autocomplete="off" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Level</label>
              <div class="col-sm-3">
                <select class="form-control" name="level" placeholder="Pilih Level" required>
                  <option value="Admin">Admin</option>
                  <option value="Pegawai">Pegawai</option>
                </select>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->