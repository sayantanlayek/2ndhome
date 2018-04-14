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
                <form id="userlogin" class="form-signin"  method="POST" action="<?php echo base_url() ?>userlogin">
                <input type="text" name="email" id="email" class="form-control myform" placeholder="Email" >
                <input type="password" name="password" id="password" class="form-control myform" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                     <a class="btn btn-lg btn-success btn-block" href="<?php echo base_url() ?>userregistration" class="text-center new-account">Create an account </a>
                
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>


                <input type="hidden" value="" name="cart" id="cart">
                <input type="hidden" value="" name="total" id="total">



                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/login.js"></script>
<script type="text/javascript">
    
    $('#cart').val(localStorage.cart);
    $('#total').val(localStorage.total);
    //localStorage.removeItem(cart);
</script>