
<div class="content">
    <div class="container-fluid">
        <?php echo form_open('customer/create'); ?>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Edit Customer</h4>
                    </div>
                    <div class="card-content">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Address</label>
                                        <?php echo form_input(array('name'=>'address', 'id'=> 'address', 'class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number</label>
                                        <?php echo form_input(array('name'=>'phone', 'id'=> 'phone', 'class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>


                            <input type="submit" name="submit" value="Add Customer" class="btn btn-primary pull-right">
                            <div class="clearfix"></div>
                            <?php echo validation_errors();?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="<?php echo base_url();?>assets/img/faces/marc.jpg" />
                        </a>
                    </div>

                    <div class="content">
                        <h6 class="category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-content">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
        </p>
    </div>
</footer>