<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url()?>assets/img/sidebar-1.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>


        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="<?php echo base_url();?>index.php/Home">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/Tables/zakaznik">
                        <i class="material-icons">content_paste</i>
                        <p>Table List</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href='<?php echo site_url('tables/zakaznik')?>'>Zákazníci</a></li>
                    <li><a href='<?php echo site_url('tables/users')?>'>Používatelia</a></li>
                    <li><a href='<?php echo site_url('tables/taxik')?>'>Taxíky</a></li>
                    <li><a href='<?php echo site_url('tables/sofer')?>'>Šoféri</a></li>
                    <li><a href='<?php echo site_url('tables/smena')?>'>Smeny</a></li>
                    <li><a href='<?php echo site_url('tables/jazda')?>'>Jazdy</a></li>
                    <li><a href='<?php echo site_url('tables/druh_platby')?>'>Druh platby</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>index.php/auth/logout">
                            <i class="material-icons">power_settings_new</i>
                            <p class="hidden-lg hidden-md">Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>