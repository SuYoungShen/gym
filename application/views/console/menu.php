<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <!-- <img src="../assets/login/images/4.jpg" alt="User" /> -->
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">歡迎~<?=$this->session->userdata('login_name');?>登入!</div>
                <div class="btn-group user-helper-dropdown" style="color: black;">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="../logout"><i class="material-icons">input</i>登出</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">選單</li>
                <li class="<?php if($menu == 'index') { echo 'active'; } ?>">
                    <a href="index">
                        <i class="material-icons">home</i>
                        <span class="icon-name">首頁</span>
                    </a>
                </li>
                <li class="<?php if($menu == 'offer') { echo 'active'; } ?>">
                    <a href="offer">
                        <i class="material-icons">stars</i>
                        <span class="icon-name">優惠方案</span>
                    </a>
                </li>

                <li class="<?php if($menu == 'in_and_out') { echo 'active'; } ?>">
                    <a href="in_and_out">
                        <i class="material-icons">compare_arrows</i>
                        <span class="icon-name">會員進出場時間</span>
                    </a>
                </li>

                <li class="<?php if($menu == 'member') { echo 'active'; } ?>">
                    <a href="member">
                        <i class="material-icons">group_add</i>
                        <span class="icon-name">會員專區</span>
                    </a>
                </li>
                <li class="<?php if($menu == 'staff') { echo 'active'; } ?>">
                    <a href="staff">
                        <i class="material-icons">person</i>
                        <span class="icon-name">員工專區</span>
                    </a>
                </li>
                <?php
                if($this->session->userdata('login_identity') == 0 ||
                  $this->session->userdata('login_identity') == 99){ ?>
                <li class="<?php if($menu == 'login_history') { echo 'active'; } ?>">
                    <a href="login_history">
                        <i class="material-icons">layers</i>
                        <span class="icon-name">登入紀錄</span>
                    </a>
                </li>
              <?php } ?>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 <a href="javascript:void(0);">SHEN Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> ...
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
