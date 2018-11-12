
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?=base_url('mainmenu');?>" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?=base_url('mainmenu');?>">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php foreach ($akses as $value) { ?>
                <li>
                    <a href="<?=base_url('mainmenu/').$value->nama_menu;?>">
                        <?=$value->icon;?>
                        <p><?=$value->nama;?></p>
                    </a>
                </li>
                <?php
                    }
                ?>
                
                 <li>
                    <a href="<?=base_url('login/logout');?>">
                        <i class="ti-lock"></i>
                        <p>Logout</p>
                    </a>
                </li>
              
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                   

                </div>
            </div>
        </nav>