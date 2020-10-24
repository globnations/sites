  <!-- Header -->
  <header class="bg_shop">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $title; ?></div>
      </div>
    </div>
  </header>
  <section class="page-section">
    <div class="container">
      <div class="row">
		<div class="col-md-6">
			<div class="card">
			  <img src="https://shop.alexonbstudio.fr/wp-content/uploads/2020/03/hero-scaled.jpg" class="card-img-top" alt="<?php echo $trad['pages']['shop']['contents']['left']['title']; ?>">
			  <div class="card-body text-center">
				<h5 class="card-title"><?php echo $trad['pages']['shop']['contents']['left']['title']; ?></h5>
				<p class="card-text"><?php echo $trad['pages']['shop']['contents']['left']['description']; ?></p>
				<a href="https://alexonbstudio.fr/boutiques.html" class="btn btn-primary"><?php echo $trad['pages']['shop']['contents']['visit-now']; ?></a>
			  </div>
			</div>
 		</div>
		<div class="col-md-6">
			<div class="card">
			  <img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/more/tebex.jpg" class="card-img-top" alt="<?php echo $trad['pages']['shop']['contents']['right']['title']; ?>">
			  <div class="card-body text-center">
				<h5 class="card-title"><?php echo $trad['pages']['shop']['contents']['right']['title']; ?></h5>
				<p class="card-text"><?php echo $trad['pages']['shop']['contents']['right']['description']; ?></p>
				<a href="https://globnations.tebex.io/" class="btn btn-primary"><?php echo $trad['pages']['shop']['contents']['visit-now']; ?></a>
			  </div>
			</div>

 		</div>
 	   </div>
 	</div>
   </section>