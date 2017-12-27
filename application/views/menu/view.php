<div class="content-wrapper">
<section class="content-header">
    <h1>
        Menu Dinamis
        <small>Seting Menu Dinamis</small>
    </h1>
</section>
<section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-tag"></i> Daftar Menu</h3>
        <div class="pull-right">
          <a href="<?php echo base_url('menu/add'); ?>" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
        </div>
      </div><!-- /.box-header with-border -->
      <div class="box-body">
        <table id="tb-datatables" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Menu</th>
                                        <th>Icon</th>
                                        <th>Link</th>
                                        <th>Kat. Menu</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                               <?php
        					   $no=1;
                               function chek($id) {
                                    $CI = get_instance();
                                    $result = $CI->db->get_where('tb_menu', array('id_menu' => $id))->row_array();
                                    return $result['nama_menu'];
                                }
        					   foreach ($record as $r){
                                $katmenu = $r->kat_menu == 0 ? 'Menu Utama' : chek($r->kat_menu);
        						   echo"
        							   <tr>
        							   <td>$no</td>
        							   <td>".$r->nama_menu."</td>
        							   <td>".$r->icon."</td>
        							   <td>".$r->link."</td>
        							   <td>".$katmenu."</td>
        							   <td>" . anchor('menu/edit/' . $r->id_menu, '<i class="btn btn-success btn-sm glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit"></i>') . "</td>
        							   <td>" . anchor('menu/delete/' . $r->id_menu, '<i class="btn-sm btn-success glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i>', array('onclick' => "return confirm('Data Akan di Hapus?')")) . "</td>
                                       </tr>";
        						   $no++;
        					   }
        					   ?>
                            </Table>
      </div><!-- /.box-body -->
    </div><!-- /.box box-default -->
</section><!-- /.content -->
</div><!-- /.content-wrapper-->
