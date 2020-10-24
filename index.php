<?php 
#Show error
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'inc/compress.php';  
require 'inc/phpmailer/src/PHPMailer.php';

include_once 'inc/own.php';  # propore info
include_once 'inc/offices.php';  #Bureaux
include_once 'inc/shoppers.php';  #Boutiques

$lang_finales = 'langs/'.$website['info']['langs']['files'].'.php';
if (file_exists($lang_finales)) {
    include_once 'langs/'.$website['info']['langs']['files'].'.php'; 
    include_once 'langs/'.$website['info']['langs']['files'].'.docs.php'; 
} else {
	include_once 'langs/fr.php'; 
	include_once 'langs/fr.docs.php'; 
}



#Decode true JSON variable use really
$trad = json_decode($encoder, true);
$markets = json_decode($encoder3, true);
$website = json_decode($encoder1, true);
$offices = json_decode($encoder2, true);


use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception; test

if(isset($_GET['lang'])){
	if($_GET['lang'] == 'all'){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'grades'){
				$title = $trad['pages']['grades']['title'];
				$description = $trad['pages']['grades']['description'];
				$keyword = $trad['pages']['grades']['keyword'];
				$urls = $trad['pages']['grades']['url'];
				include('pages/header.php');
				include_once('pages/grades.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'support'){
				$title = $trad['pages']['support']['title'];
				$description = $trad['pages']['support']['description'];
				$keyword = $trad['pages']['support']['keyword'];
				$urls = $trad['pages']['support']['url'];
				include('pages/header.php');
				include_once('pages/support.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'sitemap'){
				$title = $trad['pages']['sitemap']['title'];
				$description = $trad['pages']['sitemap']['description'];
				$keyword = $trad['pages']['sitemap']['keyword'];
				$urls = $trad['pages']['sitemap']['url'];
				include('pages/header.php');
				include_once('pages/sitemap.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'donation'){
				$title = $trad['pages']['donation']['title'];
				$description = $trad['pages']['donation']['description'];
				$keyword = $trad['pages']['donation']['keyword'];
				$urls = $trad['pages']['donation']['url'];
				include('pages/header.php');
				include_once('pages/donation.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'vote'){
				$title = $trad['pages']['vote']['title'];
				$description = $trad['pages']['vote']['description'];
				$keyword = $trad['pages']['vote']['keyword'];
				$urls = $trad['pages']['vote']['url'];
				include('pages/header.php');
				include_once('pages/vote.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'shop'){
				$title = $trad['pages']['shop']['title'];
				$description = $trad['pages']['shop']['description'];
				$keyword = $trad['pages']['shop']['keyword'];
				$urls = $trad['pages']['shop']['url'];
				include('pages/header.php');
				include_once('pages/shop.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'server'){
				$title = $trad['pages']['server']['title'];
				$description = $trad['pages']['server']['description'];
				$keyword = $trad['pages']['server']['keyword'];
				$urls = $trad['pages']['server']['url'];
				include('pages/header.php');
				include_once('pages/server.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'legal'){
				$title = $trad['pages']['legal']['title'];
				$description = $trad['pages']['legal']['description'];
				$keyword = $trad['pages']['legal']['keyword'];
				$urls = $trad['pages']['legal']['url'];
				include('pages/header.php');
				include_once('pages/legal.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'author'){
				$title = $trad['pages']['author']['title'];
				$description = $trad['pages']['author']['description'];
				$keyword = $trad['pages']['author']['keyword'];
				$urls = $trad['pages']['author']['url'];
				include('pages/header.php');
				include_once('pages/author.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'documentation'){
				$title = $trad['pages']['docs']['title'];
				$description = $trad['pages']['docs']['description'];
				$keyword = $trad['pages']['docs']['keyword'];
				$urls = $trad['pages']['docs']['url'];
				include('pages/header.php');
				include_once('pages/docs.php');
				include('pages/footer.php');				
			} else if($_GET['pages'] == 'contact'){
					$title = $trad['pages']['contact']['title'];
					$description = $trad['pages']['contact']['description'];
					$keyword = $trad['pages']['contact']['keyword'];
					$urls = $trad['pages']['contact']['url'];
					
					$msg = '';
					if (array_key_exists('email', $_POST)) {
						date_default_timezone_set('Etc/UTC');

						require 'inc/phpmailer/src/PHPMailer.php';

						$mail = new PHPMailer;
						$mail->setFrom($_POST['email'], $_POST['name']);
						$mail->addAddress($website['info']['site']['email-contact'], $website['info']['site']['default-url']);
						if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
							$mail->Subject = $trad['pages']['contact']['contents']['subject'].' '.$website['info']['site']['default-url'].'.';
							$mail->isHTML(true);
							$mail->Body = '
							<h2>'.$trad['pages']['contact']['contents']['title'].'</h2>
							<strong>'.$trad['pages']['contact']['contents']['email'].':</strong> '.$_POST['email'].'
							<strong>'.$trad['pages']['contact']['contents']['name'].':</strong> '.$_POST['name'].'
							<strong>'.$trad['pages']['contact']['contents']['phone'].':</strong> '.$_POST['phone'].'
							<strong>'.$trad['pages']['contact']['contents']['message'].':</strong> '.$_POST['message'];
							if (!$mail->send()) {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
							   exit();
							} else {
							   header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['success']['url']);
							   exit();
							}
						} else {
							  header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['error']['url']);
							   exit();

						}
					}
					include('pages/header.php');
					include_once('pages/contact.php');
					include('pages/footer.php');
					
			}  else if($_GET['pages'] == 'error'){
				$title = $trad['pages']['error']['title'];
				$description = $trad['pages']['error']['description'];
				$keyword = $trad['pages']['error']['keyword'];
				$urls = $trad['pages']['error']['url'];
				include('pages/header.php');
				include_once('pages/error.php');
				include('pages/footer.php');
				
			} else if($_GET['pages'] == 'success'){
				$title = $trad['pages']['success']['title'];
				$description = $trad['pages']['success']['description'];
				$keyword = $trad['pages']['success']['keyword'];
				$urls = $trad['pages']['success']['url'];
				include('pages/header.php');
				include_once('pages/success.php');
				include('pages/footer.php');
				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else {
			header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['index']['url']);
			exit();			
		}
	} else {
			header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
			exit();			
		}
}  else if(isset($_GET['xml'])){
	if($_GET['xml'] == 'sitemap'){
		include_once('pages/xml/sitemap.php');		
	} else if($_GET['xml'] == 'badge'){
		include_once('pages/xml/badge.php');		
	} else if($_GET['xml'] == 'dublincore'){
		include_once('pages/xml/dublincore.php');		
	} else if($_GET['xml'] == 'rss'){
		include_once('pages/xml/rss.php');
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();
	}
} else if(isset($_GET['txt'])){
	if($_GET['txt'] == 'robots'){
		include_once('pages/txt/robots.php');		
	} else if($_GET['txt'] == 'ads'){
		include_once('pages/txt/ads.php');		
	} else if($_GET['txt'] == 'humans'){
		include_once('pages/txt/humans.php');		
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();
	}
} else if(isset($_GET['json'])){
	if($_GET['json'] == 'manifest'){
		include_once('pages/json/manifest.php');		
	} else {
		header('Location: '.$protocols.'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
		exit();
	}
} else {
	$title = $trad['default']['index']['title'];
	$description = $trad['default']['index']['description'];
	$keyword = $trad['default']['index']['keyword'];
	$urls = $trad['default']['index']['url'];
	include('pages/header.php');
	include_once('pages/home.php');
	include('pages/footer.php');
}

?>