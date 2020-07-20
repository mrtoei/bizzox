<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bizzox</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

<?php
	$controller_url = $this->uri->segment(1);
?>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item  <?php echo $controller_url=='customer' ? 'active':'null' ?>">
        <a class="nav-link" href="<?=base_url()?>customer">Customer</a>
      </li>
      <li class="nav-item <?php echo $controller_url=='product' ? 'active':'null' ?>">
        <a class="nav-link" href="#">Product</a>
      </li>
    </ul>
  </div>
</nav>
