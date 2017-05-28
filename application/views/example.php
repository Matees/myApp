<!DOCTYPE html>
<html>
<head>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>

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
            <li><a href="<?php echo base_url();?>index.php/auth/logout""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
</div>
</body>
</html>