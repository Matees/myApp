<nav class="navbar navbar-inverse">
    <div class="container-fluid">
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
        <div class="content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">

                                <div class="ct-chart" id="dailySalesChart"></div>

                            <div id="chart_div">

                            </div>

                            </div>
                            <div class="card-content">
                                <h4 class="title">Podiel druhov platenia zákazníkov z Nitry</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="orange">
                                <div id="chart2"></div>
                                <div class="ct-chart" id="emailsSubscriptionChart"></div>
                            </div>
                            <div class="card-content">
                                <h4 class="title">Počet jázd jednotlivých vodičov</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="red">
                                <div class="ct-chart" id="completedTasksChart"></div>
                                <div id="columnchart_values"></div>
                            </div>
                            <div class="card-content">
                                <h4 class="title">Počet najazdených km na jednotlivých autách</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-content">
                                <div id="chart3" style="height: 500px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title">Informácie o šoféroch</h4>

                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Number of Driver License</th>
                                    <th>Expiration Date</th>
                                    <th>Contact</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($sofer as $sofer_item): ?>
                                    <tr>
                                        <td><?php echo $sofer_item['ID'];?></td>
                                        <td><?php echo $sofer_item['meno'];?></td>
                                        <td><?php echo $sofer_item['priezvisko'];?></td>
                                        <td><?php echo $sofer_item['cislo_vodicaka'];?></td>
                                        <td><?php echo $sofer_item['datum_platnosti'];?></td>
                                        <td><?php echo $sofer_item['kontakt'];?></td>
                                        <?php endforeach; ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


