<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
<br>
<br>
<br>

	<div>
		<a href='<?php echo site_url('tables/zakaznik')?>'>Customers</a> |
		<a href='<?php echo site_url('tables/users')?>'>Používatelia</a> |
		<a href='<?php echo site_url('tables/taxik')?>'>Taxíky</a> |
		<a href='<?php echo site_url('tables/sofer')?>'>Šoféri</a> |
		<a href='<?php echo site_url('tables/smena')?>'>Smeny</a> |
		<a href='<?php echo site_url('tables/jazda')?>'>jazdy</a> |
		<a href='<?php echo site_url('tables/druh_platby')?>'>Druh platby</a>
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
<br>
<br>
<br>
<hr color="red">
</body>
</html>
