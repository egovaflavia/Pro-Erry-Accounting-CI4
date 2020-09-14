<?php $this->load->view('backEnd/_partials/head.php'); ?>

<body>
	<div id="wrapper">
		<?php $this->load->view('backEnd/_partials/top-bar.php'); ?>
		<?php $this->load->view('backEnd/_partials/side-bar.php'); ?>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h2><?= $title ?></h2>
						<h5><?= $sub ?></h5>
					</div>
				</div>
				<hr />
				<?php $this->load->view('backEnd/' . $content); ?>
			</div>
		</div>
	</div>

	<?php $this->load->view('backEnd/_partials/scripts.php'); ?>

</body>

</html>