<div class="container">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="<?php echo base_url();?>index.php/Home"><span> Dashboard</span></a></li>
            <li><a href='<?php echo site_url('tables/zakaznik')?>'>Zákazníci</a></li>
            <li><a href='<?php echo site_url('tables/users')?>'>Používatelia</a></li>
            <li><a href='<?php echo site_url('tables/taxik')?>'>Taxíky</a></li>
            <li><a href='<?php echo site_url('tables/sofer')?>'>Šoféri</a></li>
            <li><a href='<?php echo site_url('tables/smena')?>'>Smeny</a></li>
            <li><a href='<?php echo site_url('tables/jazda')?>'>Jazdy</a></li>
            <li><a href='<?php echo site_url('tables/druh_platby')?>'>Druh platby</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a>
                <?php
                echo $this->session->userdata('FirstName');
                ?>
                </a>
            </li>
            <li><a href="<?php echo base_url();?>index.php/auth/logout""><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>
    <h2 align="center">Podiel platenia kartou a hotovosťou zákazníkov z Nitry</h2>
    <div align="center" id="chart_div"></div>
    <h2 align="center">Počet jázd jednotlivých vodičov</h2>
    <div align="center" id="chart2"></div>
    <h2 align="center">Počet najazdených km na jednotlivých autách</h2>
    <div align="center" id="columnchart_values"></div>
    <h2 align="center">Počet jázd v jednotlivých rokoch</h2>
    <div align="center" id="curve_chart"></div>
</div>



