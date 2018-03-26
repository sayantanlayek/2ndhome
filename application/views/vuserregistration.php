<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet" id="bootstrap-css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"> </script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url() ?>assets/homeassets/images/logo.png"
                    alt="">
                    <?php if(!empty($this->session->flashdata('verificationStatus'))){ ?>
                 <div class="successHandler alert alert-success ">
                        <i class="fa fa-remove-sign"></i> <?php echo $this->session->flashdata('verificationStatus'); ?>
                    </div> 
                    <?php } ?>  
                <form id="registerform" class="form-signin" method="POST" action="<?php echo base_url() ?>reguser">
                <input type="text" name="username" id="username" class="form-control myform" placeholder="User Name">
                <input type="text" name="email" id="email" class="form-control myform" placeholder="Email">
                <textarea class="form-control myform" name="address" id="address" placeholder="Address"></textarea>
                 <input type="text" name="phone" id="phone" class="form-control myform" placeholder="Phone Number" >
                <input type="password" name="password" id="password" class="form-control myform" placeholder="Password">
                <input type="password" name="confpassword" id="confpassword" class="form-control myform" placeholder="Re Enter Password">

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Register me</button>
                
                <a href="<?php echo base_url() ?>adminlogin"  class="btn btn-lg btn-warning btn-block text-center new-account">Back to login</a>
                </form>
            </div>
            
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/regester.js"></script>