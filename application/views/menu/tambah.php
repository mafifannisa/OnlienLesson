<div class="content-wrapper">
<section class="content-header">
    <h1>
        Tambah
        <small>Menu Dinamis</small>
    </h1>
</section>
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="glyphicon glyphicon-plus"></i> Tambah Menu</h3>
    </div><!-- /.box-header with-border -->
  <div class="box-body">
    <?php
                    echo form_open('menu/add');
                ?>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="example">Nama Menu</label>
                            <input type="tex" name="nama" class="form-control" required oninvalid="setCustomValidity('Nama Menu Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Nama Menu" >
                                   <?php echo form_error('nama', '<div class="text-red">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" class="form-control" name="icon" required oninvalid="setCustomValidity('Icon di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : fa fa-dashboard">
                            <?php echo form_error('merek', '<div class="text-red">', '</div>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" class="form-control" name="link" required oninvalid="setCustomValidity('Link Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : menu/add atau #">
                            <?php echo form_error('merek', '<div class="text-red">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kat. Menu</label>
                            <select name='kat_menu' class="form-control ">
                            <option value='0'>Menu Utama</option>
                                <?php
                                if (!empty($record)) {
                                    foreach ($record as $r) {
                                        echo "<option value=".$r->id_menu.">".$r->nama_menu."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-success"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
                        <a href="<?php echo site_url('menu'); ?>" class="btn btn-success">Kembali</a>
                    </div>
                </form>
  </div><!-- /.box-body -->
</div><!-- /.box box-default -->
</section><!-- /.content -->
</div><!-- /.content-wrapper-->
