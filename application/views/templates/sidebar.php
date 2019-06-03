<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-database"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI APFTL</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!--QUERY MENU-->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `apftl_menu`.`id`,`menu`
                    FROM `apftl_menu` JOIN `access_menu` 
                        ON `apftl_menu`.`id` = `access_menu`.`menu_id`
                WHERE `access_menu`.`role_id` = $role_id
            ORDER BY `access_menu`.`menu_id` ASC
    ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- QUERY SUBMENU -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                            FROM `apftl_submenu` JOIN `apftl_menu` 
                                ON `apftl_submenu`.`menu_id` = `apftl_menu`.`id`
                        WHERE `apftl_submenu`.`menu_id`= $menuId
                            AND `apftl_submenu`.`is_active` = 1
        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>
        <?php foreach ($subMenu as $sm) : ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
            </li>

        <?php endforeach; ?>
        <hr class="sidebar-divider">
    <?php endforeach; ?>



    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->