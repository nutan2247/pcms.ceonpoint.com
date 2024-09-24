<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title><?php echo $title; ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/adminstyle.css'); ?>">

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</head>





<body>

  <div class="container">

    <div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

        <div class="card card-signin my-5">

          <div class="card-body">

            <!-- <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="admin-logo"> -->

            <h5 class="card-title text-center"><b>Examiner login</b></h5>

            <?php echo $this->session->flashdata('response'); ?>

            <form class="form-signin" action="<?php echo current_url(); ?>" method="post" >
              <div class="form-label-group">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email address" value="<?php echo set_value('email'); ?>" required autofocus>
				<?php echo form_error('email', '<div class="error">', '</div>'); ?>
                <label for="email">Username</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="examiner_password" class="form-control" name="examiner_password" placeholder="Password" required>
				<?php echo form_error('examiner_password', '<div class="error">', '</div>'); ?>
                <label for="inputPassword">Password</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Login</button>

            </form>



          </div>

        </div>

      </div>

    </div>

  </div>

</body>
</html>