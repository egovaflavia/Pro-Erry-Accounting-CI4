<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<span class="navbar-brand">Administrator</span>
	</div>
	<?php
	$user = $this->ion_auth->user()->row();
	?>
	<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : <?= unix_to_human($user->last_login) ?> &nbsp; <a href="<?= site_url('logout') ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
</nav>