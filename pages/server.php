  <!-- Header -->
  <header class="bg_server">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $title; ?></div>
      </div>
    </div>
  </header>

  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $title.' '.$trad['pages']['server']['contents']['title']['public']; ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $trad['pages']['server']['contents']['sub-title']['public']; ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
			<a href="https://www.alexonbstudio.fr/server/minecraft.html"><img src="https://minecraftpocket-servers.com/server/95384/banners/banner-1.png" class="img-fluid" border="0"></a>
        </div>
      </div>
	  <div class="row">
		<div class="col-lg-12">
			<div class="card">
			  <div class="card-header">
				<h4><?php echo $trad['pages']['server']['contents']['public']['classic']['name']; ?> Earth - 20 Slot</h4>
			  </div>
			  <div class="card-body">
				<h5 class="text-center">IP: <span class="badge badge-info"><?php echo $trad['pages']['server']['contents']['public']['classic']['ip']; ?></span> PORT: <span class="badge badge-info"><?php echo $trad['pages']['server']['contents']['public']['classic']['port']; ?></span></h5>
				<blockquote class="blockquote mb-0">
				  <p><?php echo $trad['pages']['server']['contents']['public']['classic']['description']; ?></p>
				  <footer class="blockquote-footer"><?php echo $title.' '.$trad['pages']['server']['contents']['public']['classic']['name']; ?> (Earth) - <?php echo $trad['pages']['server']['contents']['public']['classic']['footer']; ?></footer>
				</blockquote>
				<a href="minecraft://?addExternalServer=Earth-<?php echo $trad['pages']['server']['contents']['public']['classic']['name'].'|'.$trad['pages']['server']['contents']['public']['classic']['ip'].':'.$trad['pages']['server']['contents']['public']['classic']['port']; ?>" class="btn btn-success"><?php echo $trad['pages']['server']['contents']['lunch']; ?></a>
			  </div>
			</div>        
		</div>
      </div>
    </div>
   </section>

  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $title.' '.$trad['pages']['server']['contents']['title']['private']; ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $trad['pages']['server']['contents']['sub-title']['private']; ?></h3>
        </div>
      </div>
	  <div class="row">
		<div class="col-lg-12">
			<div class="card">
			  <div class="card-header">
				<h4><?php echo $trad['pages']['server']['contents']['private']['custom']['name']; ?> Earth - 20 Slot</h4>
			  </div>
			  <div class="card-body">
				<h5 class="text-center">IP: <span class="badge badge-info"><?php echo $trad['pages']['server']['contents']['private']['custom']['ip']; ?></span> PORT: <span class="badge badge-info"><?php echo $trad['pages']['server']['contents']['private']['custom']['port']; ?></span></h5>
				<blockquote class="blockquote mb-0">
				  <p><?php echo $trad['pages']['server']['contents']['private']['custom']['description']; ?></p>
				  <footer class="blockquote-footer"><?php echo $title.' '.$trad['pages']['server']['contents']['private']['custom']['name']; ?> (Earth) - <?php echo $trad['pages']['server']['contents']['private']['custom']['footer']; ?></footer>
				</blockquote>
				<a href="minecraft://?addExternalServer=Earth-<?php echo $trad['pages']['server']['contents']['private']['custom']['name'].'|'.$trad['pages']['server']['contents']['private']['custom']['ip'].':'.$trad['pages']['server']['contents']['private']['custom']['port']; ?>" class="btn btn-success"><?php echo $trad['pages']['server']['contents']['lunch']; ?></a>
			  </div>
			</div>        
		</div>
      </div>
    </div>
   </section>
   
  <section class="page-section">
    <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <h3 class="text-center"><?php echo $trad['pages']['server']['supply']['title-system']; ?></h3>
					<p><i class="fab fa-linux fa-5x"></i> <i class="fab fa-ubuntu fa-5x"></i> </p>
                </div>	
                <div class="col-xl-3 col-md-3">
                    <h3 class="text-center"><?php echo $trad['pages']['server']['supply']['title-devs']; ?></h3>
					<p><i class="fab fa-html5 fa-5x"></i> <i class="fab fa-js fa-5x"></i> <i class="fab fa-php fa-5x"></i></p>
                </div>	
                <div class="col-xl-3 col-md-3">
                    <h3 class="text-center"><?php echo $trad['pages']['server']['supply']['title-hosting']; ?></h3>
					<p><i class="fab fa-expeditedssl fa-5x"></i><br><img class="img-ico" src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/more/ovh.png" alt="OVH" width="120" height="auto"></p>
                </div>	
                <div class="col-xl-3 col-md-3">
                    <h3 class="text-center"><?php echo $trad['pages']['server']['supply']['title-cloud']; ?></h3>
					<p><i class="fab fa-aws fa-5x"></i> <i class="fab fa-google fa-5x"></i></p>
                </div>	
            </div>	
 	</div>
   </section>