<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/loginBootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/loginStyle.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Login</title>
	</head>
	
	<body>
		<div class="loginContainer">
			<div class="titleBar display-5">Corona Watch Campus</div>
			<form action="<?= site_url('login/login') ?>" method="post">
				<h2>Login</h2>
				<?php if(isset($error_message)) { ?>
				<div class="alert alert-danger" role="alert">
					<?= $error_message ?>
				</div>
				<?php } ?>
				<div class="form-group">
					<input type="text" class="form-control rounded-0" name="username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control rounded-0" name="password" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary rounded-0">Login</button>
				<a class="btn btn-info rounded-0" href="<?= site_url() ?>/login/guest" role="button">Guest</a>
			</form>
		</div>
	</body>
</html>