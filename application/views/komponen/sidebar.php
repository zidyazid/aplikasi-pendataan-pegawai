<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Admin Menu</span>
          </h6>

          <?php

                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                    FROM `user_menu` JOIN `user_access_menu` 
                                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                WHERE `user_access_menu`.`role_id` = $role_id
                                ORDER BY `user_access_menu`.`menu_id` ASC
                                ";
                $menu = $this->db->query($queryMenu)->result_array();

          ?>

        <ul class="navbar-nav">
          <?php foreach($menu as $m) : ?>
            <?php
        $menu_id = $m['id'];
        $querySubmenu = "SELECT *
                           FROM `user_sub_menu` JOIN `user_menu` 
                             ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                          WHERE `user_sub_menu`.`menu_id` = $menu_id
                            AND `user_sub_menu`.`is_active` = 1 
                          ";
        $subMenu = $this->db->query($querySubmenu)->result_array();
        ?>
            <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <a class="nav-link active" href="<?= $sm['url']; ?>">
                  <?php else : ?>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= $sm['url']; ?>">
                    <?php endif; ?>
                      <i class="<?= $sm['icon'] ?> text-primary"></i>
                      <span class="nav-link-text"><?= $sm['title'] ?></span>
                    </a>
                  </li>
                  
          <?php endforeach; ?>
          <?php endforeach; ?>
           <li class="nav-item" >
              <a class="nav-link" href="<?= base_url('auth/logout'); ?> ">
                <i class="fas fa-sign-out-alt text-danger mt-1"></i>Logout</a>
           </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  