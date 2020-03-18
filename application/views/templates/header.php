<html>
  <head>
    <link rel='icon' href='<?php echo site_url(); ?>/assets/images/trashumante.ico' type='image/x-icon'/ >
    <title>Arte en Movimiento</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>

  <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light  bg-light">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Arte en Movimiento</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">Exhibitions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>artists">Artists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>artworks">Artworks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact us</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">

          <?php if($this->session->userdata('logged_in')) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>artworks/add">Add artwork</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>artists/add">Add artists</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
          </li>
          <?php endif;?>
        </ul>
      </div>
    </nav>
  <!-- End navigation -->

