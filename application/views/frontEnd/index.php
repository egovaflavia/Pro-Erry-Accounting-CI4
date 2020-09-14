<?php $this->load->view('frontEnd/_partials/head.php'); ?>

<body data-spy="scroll" data-target="#main-navbar">

    <!-- NavigationBar Section -->
    <?php $this->load->view('frontEnd/_partials/navbar.php'); ?>

    <?php $this->load->view('frontEnd/' . $content); ?>

    <!-- Footer -->
    <?php $this->load->view('frontEnd/_partials/footer.php'); ?>

    <!-- Scripts -->
    <?php $this->load->view('frontEnd/_partials/scripts.php'); ?>

</body>

</html>