<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo $this->session->userdata('gambar'); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu Utama</li>
      <?php

        $main = $this->db->get_where('tb_menu', array('kat_menu' => 0));
        foreach ($main->result() as $m) {
          // chek ada submenu atau tidak
          $sub = $this->db->get_where('tb_menu', array('kat_menu' => $m->id_menu));
          if ($sub->num_rows() > 0) {
              // buat menu + sub menu
              $cek = $this->uri->segment(1);
              $cekat="";
              foreach ($sub->result() as $s) {
                if(strtolower($s->link) == strtolower($cek)){
                  $cekat = $s->kat_menu;
                }
              }

              if(strtolower($m->link) == strtolower($cek) || strtolower($m->id_menu) == strtolower($cekat)){
                echo '<li class="active treeview">' . anchor($m->link, '<i class="' . $m->icon . '"></i><span>' .$m->nama_menu . '</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>', array('class' => 'dropdown-toggle'));
                echo "<ul class='treeview-menu'>";
                foreach ($sub->result() as $s) {
                    echo '<li class="active">' . anchor($s->link, '<i class="' . $s->icon . '"></i>' . $s->nama_menu) . '</li>';
                }
              }else {
                echo '<li class="treeview">' . anchor($m->link, '<i class="' . $m->icon . '"></i><span>' .$m->nama_menu . '</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>', array('class' => 'dropdown-toggle'));
                echo "<ul class='treeview-menu'>";
                foreach ($sub->result() as $s) {
                    echo '<li>' . anchor($s->link, '<i class="' . $s->icon . '"></i>' . $s->nama_menu) . '</li>';
                }
              }



              echo "</ul>";
              echo '</li>';
          } else {
              // single menu
              $nm="";
              $cek = $this->uri->segment(1);
              if(strtolower($m->link) == strtolower($cek)){
                $nm = 'class="active"';
              }
              echo '<li '.$nm.'>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg"></i>  <span class="nav-label">' . $m->nama_menu . '</span>') . '</li>';
          }
        }
       ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
