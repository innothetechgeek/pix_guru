<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/my-style.css');?>">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{  padding: 20px; margin: 0 auto; height: 86vh; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/images/logo-login.png');?>" class="logo" alt="pix-guru-logo" style="width: 100%">
            </div>	
            <div class="col-md-6">
                <h2>Forgot Password</h2>
                <p>Please fill in your email address to reset your password.</p>
                <form action="<?php echo base_url('login/forgot_password');?>" method="post">
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <label>Email</label>
                        <input type="text" name="forgot_email" class="form-control" value="">
                        <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn save-btn" value="Send Reset Link">
                    </div>
                </form>
            </div>
        </div>
    </div>  
    

    
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>