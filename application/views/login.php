<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>


    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">


</head>

<body>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign in</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <?php echo form_open('auth/login');?>
            <form action="<?php echo base_url()?>application/controllers/Auth/login" method="post">
            <form class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Email</label>
                    <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'class'=>'input')); ?>
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <?php echo form_input(array('name'=>'password', 'id'=> 'password', 'type'=>'password', 'class'=>'input')); ?>
                </div>
                <div class="group">
                    <input type="submit" name="submit" class="button" value="login">
                </div>
            </form>
                <?php echo form_close();?>
                <div class="hr"></div>
                <a href="<?php echo base_url() ?>index.php/auth/register">Registrácia</a>
            </div>
        </div>
    </div>
</div>
<?php echo validation_errors();?>


</body>
</html>
