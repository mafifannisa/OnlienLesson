<div class="content-wrapper">
<section class="content-header">
    <h1>
        Edit
        <small>Menu Dinamis</small>
    </h1>
</section>
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="glyphicon glyphicon-pencil"></i> Edit Menu</h3>
    </div><!-- /.box-header with-border -->
    <div class="box-body">
      <?php
         echo form_open('menu/edit');
      ?>
    <div>
      <div class="form-group">
         <label for="example">Nama Menu</label>
         <input type="hidden"  name="id" value="<?php echo $record['id_menu'] ?>" >
         <input type="tex" name="nama" class="form-control" id="inputError" required oninvalid="setCustomValidity('Nama Menu Harus di Isi !')"
          oninput="setCustomValidity('')" placeholder="Masukan Nama menu" value="<?php echo $record['nama_menu']; ?>" >
      </div>
                        <div class="form-group">
                            <label for="example">Icon</label>
                            <input type="tex" name="icon" class="form-control" id="inputError" required oninvalid="setCustomValidity('Icon Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : fa fa-dashboard" value="<?php echo $record['icon']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="example">Link</label>
                            <input type="tex" name="link" class="form-control" id="inputError" required oninvalid="setCustomValidity('Link Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : menu/edit" value="<?php echo $record['link']; ?>" >
                        </div>
                        <div class="form-group">
                                <label>Kat. Menu</label>
                                <select name="kat_menu" class="form-control">
                                    <option value='0'>Menu Utama</option>
                                    <?php
                                    foreach ($katmenu as $k) {
                                        echo "<option value='$k->id_menu'";
                                        echo $record['kat_menu'] == $k->id_menu ? 'selected' : '';
                                        echo">$k->nama_menu</option>";
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
