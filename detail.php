<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Detail Data Pegawai
            </h4>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $id   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM user WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id      = $data['id'];
                $username     = $data['username'];
                $level        = $data['level'];
                $nis          = $data['nis'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA PEGAWAI</b></li>
            <li class="list-group-item">ID : <b><?php echo $id; ?></b></li>
            <li class="list-group-item">Username : <b><?php echo $username; ?></b></li>
            <li class="list-group-item">Level : <b><?php echo $level; ?></b></li>
            <li class="list-group-item">NIS : <b><?php echo $nis; ?></b></li>
        </ul>

        <div class="form-group">
            <a href="index.php" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->