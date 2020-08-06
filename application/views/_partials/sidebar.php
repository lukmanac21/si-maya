<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('Dashboard/index');?>" class="brand-link">
      <img src="<?= base_url();?>assets/img/logo/si-maya.jpg" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SI-Maya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2" style="padding-top:10px;">
      <?php foreach($menu as $row_menu){?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">

              <i class="<?= $row_menu->icon_menu?>"></i>
              <p>
                <?= $row_menu->nama_menu?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <?php 
              $menuId = $row_menu->id_menu;
              $roleId = $this->session->userdata('id_role');
              $querySub = "SELECT * FROM tbl_sub_menu inner join tbl_user_access on tbl_user_access.id_sub_menu = tbl_sub_menu.id_sub_menu where tbl_sub_menu.id_menu = $menuId and tbl_user_access.id_role = $roleId" ;
              $subMenu = $this->db->query($querySub)->result_array();

              foreach($subMenu as $sm){
            ?>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url($sm['link_sub_menu']);?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?= $sm['nama_sub_menu'];?></p>
                </a>
              </li>
            </ul>
            <?php } ?>
          </li>
        </ul>
        <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>