<!-- right column -->
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url('apartment/update'); ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Id apartment</label>

          <div class="col-sm-10">
            <input type="text" name="id_apartment" value="<?= $apartment['id_apartment'] ?>" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama apartment</label>

          <div class="col-sm-10">
            <input type="text" name="nama_apartment" value="<?= $apartment['nama_apartment'] ?>" class="form-control"  placeholder="Nama apartment..." required>
          </div>
        </div>
       
             

            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

          <div class="col-sm-10">
            <textarea name="alamat" class="form-control" required><?= $apartment['alamat'] ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No. Telepon</label>

          <div class="col-sm-10">
            <input type="text" name="no_telepon" value="<?= $apartment['no_telp'] ?>"  class="form-control"  placeholder="Nomor telepon" required>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <a href="<?= base_url('apartment'); ?>" class="btn btn-warning">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>