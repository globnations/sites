  <!-- Header -->
  <header class="bg_legal">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $title; ?></div>
      </div>
    </div>
  </header>

  <section class="page-section">
    <div class="container">
  
                <div class="row">
                    <div class="col-lg-12">
					<h6><?php echo $trad['pages']['legal']['contents']['identification-title']; ?></h6>
			<p>
			<?php echo $trad['pages']['legal']['contents']['name-site'].' '.$website['info']['site']['name'].'<br />'.$trad['pages']['legal']['contents']['name-domaine'].' '.$website['info']['site']['default-url'].'<br />'.$trad['pages']['legal']['contents']['site-secure'].' '.$website['hoster']['ssl-provider']; ?>
			</p>
			<h6><?php echo $trad['pages']['legal']['contents']['owner-site']; ?></h6>
			<p>
			<?php 
			echo $trad['pages']['legal']['contents']['statut'].' '.$offices['all']['siege-social']['status'].'<br />'; 
			/**
			echo $trad['pages']['legal']['contents']['siret'].' '.$offices['all']['siege-social']['number-siret'].'<br />'; 
			echo $trad['pages']['legal']['contents']['code-ape'].' '.$offices['all']['siege-social']['number-ape'].'<br />'; 
			echo $trad['pages']['legal']['contents']['tva-intra'].' '.$offices['all']['siege-social']['number-tva-intra'].'<br />'; 
			echo $trad['pages']['legal']['contents']['sap-declared'].' '.$offices['all']['siege-social']['number-sap'].'<br />'; 
			echo $trad['pages']['legal']['contents']['assurance-rcpro'].' '.$offices['all']['siege-social']['number-assurance-rcpro'].'<br />'; 
			echo $trad['pages']['legal']['contents']['head-officer'].' '.$offices['all']['siege-social']['full-name'].'<br />'; 
			echo $trad['pages']['legal']['contents']['address'].' '.$offices['all']['siege-social']['adresse'].' '.$offices['all']['siege-social']['villes'].' '.$offices['all']['siege-social']['pays'].'<br />'; 
			echo $trad['pages']['legal']['contents']['email'].' <a href="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$website['info']['langs']['files'].'/'.$trad['pages']['contact']['url-full'].'" rel="nofollow">'.$website['info']['site']['email-contact'].'</a><br />'; 
			echo $trad['pages']['legal']['contents']['tel-fix'].' <a href="tel:'.$offices['all']['siege-social']['nFix-url'].'" rel="nofollow">'.$offices['all']['siege-social']['nFix-text'].'</a><br />'; 
			echo $trad['pages']['legal']['contents']['tel-mobile'].' <a href="tel:'.$offices['all']['siege-social']['nmobile-url'].'" rel="nofollow">'.$offices['all']['siege-social']['nmobile-text'].'</a><br />'; 
			echo $trad['pages']['legal']['contents']['tel-fax'].' <a href="tel:'.$offices['all']['siege-social']['nFax-url'].'" rel="nofollow">'.$offices['all']['siege-social']['nFax-text'].'</a><br />'; 
			**/
			
			?>
			</p>
			<h6><?php echo $trad['pages']['legal']['contents']['hoster-title']; ?></h6>
			<p>
			<?php 
			echo $trad['pages']['legal']['contents']['hoster-name'].' '.$website['hoster']['name'].'<br />'; 
			echo $trad['pages']['legal']['contents']['siret'].' '.$website['hoster']['siret'].'<br />'; 
			echo $trad['pages']['legal']['contents']['tva-intra'].' '.$website['hoster']['tva'].'<br />'; 
			echo $trad['pages']['legal']['contents']['code-ape'].' '.$website['hoster']['code-ape'].'<br />'; 
			echo $trad['pages']['legal']['contents']['head-officer'].' '.$website['hoster']['address'].'<br />'; 
			echo $trad['pages']['legal']['contents']['siteweb'].' '.$website['hoster']['siteweb'].'<br />';
			echo 'CDN: '.$website['hoster']['cdn-provider'];
			?>
			</p>
			<h6><?php echo $trad['pages']['legal']['contents']['credit-title']; ?></h6>
			<p>
			<?php 
			echo $trad['pages']['legal']['contents']['designer'].' '.$website['credits']['designer'].'<br />'; 
			echo $trad['pages']['legal']['contents']['webdesigner'].' '.$website['credits']['webdesigner'].'<br />'; 
			echo $trad['pages']['legal']['contents']['developper'].' '.$website['credits']['developper'].'<br />'; 
			echo $trad['pages']['legal']['contents']['images'].' '.$website['credits']['images'].'<br />'; 
			echo $trad['pages']['legal']['contents']['tiers'].' '.$website['credits']['tiers'].'<br />'; 
			?>
			</p>
                    </div>
                </div>
	</div>
	</section>