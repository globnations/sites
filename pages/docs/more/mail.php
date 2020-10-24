  <!-- Header -->
  <header class="bg_docs">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $title; ?></div>
		<div class="intro-heading text-uppercase">Wiki</div>
      </div>
    </div>
  </header>
  <section class="page-section">
    <div class="container">
      <div class="row">
		<div class="col-md-9 col-lg-9">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/in-game/mail/mail-menu.jpg" class="card-img-top" alt="<?php echo $trad_docs['wiki']['more']['mail']['contents']['title']['1']; ?>">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $trad_docs['wiki']['more']['mail']['contents']['command']; ?> </h6>
							<p class="card-text"> <?php echo $trad_docs['wiki']['more']['mail']['contents']['description']['1']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/in-game/mail/mail-write.jpg" class="card-img-top" alt="<?php echo $trad_docs['wiki']['more']['mail']['contents']['title']['2']; ?>">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $trad_docs['wiki']['more']['mail']['contents']['command']; ?> </h6>
							<p class="card-text"> <?php echo $trad_docs['wiki']['more']['mail']['contents']['description']['2']; ?> </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/in-game/mail/mail-read.jpg" class="card-img-top" alt="<?php echo $trad_docs['wiki']['more']['mail']['contents']['title']['3']; ?>">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $trad_docs['wiki']['more']['mail']['contents']['command']; ?> </h6>
							<p class="card-text">  <?php echo $trad_docs['wiki']['more']['mail']['contents']['description']['3']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/in-game/mail/mail-reply.jpg" class="card-img-top" alt="<?php echo $trad_docs['wiki']['more']['mail']['contents']['title']['4']; ?>">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted"> <?php echo $trad_docs['wiki']['more']['mail']['contents']['command']; ?></h6>
							<p class="card-text">  <?php echo $trad_docs['wiki']['more']['mail']['contents']['description']['4']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/in-game/mail/mail-receive.jpg" class="card-img-top" alt="<?php echo $trad_docs['wiki']['more']['mail']['contents']['title']['5']; ?>">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $trad_docs['wiki']['more']['mail']['contents']['command']; ?> </h6>
							<p class="card-text"> <?php echo $trad_docs['wiki']['more']['mail']['contents']['description']['5']; ?> </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/img/in-game/mail/mail-report.jpg" class="card-img-top" alt="<?php echo $trad_docs['wiki']['more']['mail']['contents']['title']['6']; ?>">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $trad_docs['wiki']['more']['mail']['contents']['command']; ?> </h6>
							<p class="card-text">  <?php echo $trad_docs['wiki']['more']['mail']['contents']['description']['6']; ?></p>
						</div>
					</div>
				</div>
			</div>
 		</div>
		<div class="col-md-3 col-lg-3">
			<h4><a href="#wiki_index" data-toggle="collapse" data-target="#wiki_index">INDEX</a></h4>
			<ul id="wiki_index" class="collapse">
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['support']['url']; ?>">/<?php echo $trad['pages']['support']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['rules']['url']; ?>">/<?php echo $trad_docs['wiki']['rules']['title']; ?></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['author']['url']; ?>">/<?php echo $trad['pages']['author']['title']; ?></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['about']['url']; ?>">/<?php echo $trad_docs['wiki']['about']['title']; ?></li>
			</ul>
			<h4><a href="#wiki_gameplay" data-toggle="collapse" data-target="#wiki_gameplay">GAMEPLAY</a></h4>
			<ul id="wiki_gameplay" class="collapse">
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['stuff']['url']; ?>">/<?php echo $trad_docs['wiki']['stuff']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['economy']['url']; ?>">/<?php echo $trad_docs['wiki']['economy']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['faction']['url']; ?>">/<?php echo $trad_docs['wiki']['faction']['title']; ?></a></li>
				<!--
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['minage']['url']; ?>">/<?php echo $trad_docs['wiki']['minage']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['warzone']['url']; ?>">/<?php echo $trad_docs['wiki']['warzone']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['space']['url']; ?>">/<?php echo $trad_docs['wiki']['space']['title']; ?></a></li>
				//-->
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['freebuild']['url']; ?>">/<?php echo $trad_docs['wiki']['freebuild']['title']; ?></a></li>
				<li>
					<a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['basic']['url']; ?>">/<?php echo $trad_docs['wiki']['basic']['title']; ?></a>
					<ul>
						<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['basic']['server']['url']; ?>">/<?php echo $trad_docs['wiki']['basic']['server']['title']; ?></a> </li>
						<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['basic']['coordonate']['url']; ?>">/<?php echo $trad_docs['wiki']['basic']['coordonate']['title']; ?></a> </li>
					</ul>
				</li>
			</ul>
			
			<h4><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['more']['url']; ?>" data-toggle="collapse" data-target="#wiki_more"><?php echo $trad_docs['wiki']['more']['title']; ?></a></h4>
			<ul id="wiki_more" class="collapse">
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['more']['mail']['url']; ?>">/<?php echo $trad_docs['wiki']['more']['mail']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['more']['server-channel']['url']; ?>">/<?php echo $trad_docs['wiki']['more']['server-channel']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['more']['love']['url']; ?>">/<?php echo $trad_docs['wiki']['more']['love']['title']; ?></a></li>
				<li><a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad_docs['wiki']['more']['emoji']['url']; ?>">/<?php echo $trad_docs['wiki']['more']['emoji']['title']; ?></a></li>
			</ul>
			
		</div>
	  </div>
	</div>
</section>