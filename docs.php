<?php 
#Show error
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/autoload.php';
#require libs/custom/
foreach (glob('libs/custom/*.php') as $GlobRequire) { include_once $GlobRequire; }
#configuration
foreach (glob('inc/*.php') as $GlobConfig) { include_once $GlobConfig; }

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
$trad_docs = json_decode($encoderdocs, true);
$markets = json_decode($encoder3, true);
$website = json_decode($encoder1, true);
$offices = json_decode($encoder2, true);

if(isset($_GET['wiki'])){
	if($_GET['wiki'] == 'all'){
		if(isset($_GET['stuff'])){
			if($_GET['stuff'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['stuff']['title'];
				$description = $trad_docs['wiki']['stuff']['description'];
				$keyword = $trad_docs['wiki']['stuff']['keyword'];
				$urls = $trad_docs['wiki']['stuff']['url'];
				include('pages/header.php');
				include_once('pages/docs/stuff.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['economy'])){
			if($_GET['economy'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['economy']['title'];
				$description = $trad_docs['wiki']['economy']['description'];
				$keyword = $trad_docs['wiki']['economy']['keyword'];
				$urls = $trad_docs['wiki']['economy']['url'];
				include('pages/header.php');
				include_once('pages/docs/economy.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['faction'])){
			if($_GET['faction'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['faction']['title'];
				$description = $trad_docs['wiki']['faction']['description'];
				$keyword = $trad_docs['wiki']['faction']['keyword'];
				$urls = $trad_docs['wiki']['faction']['url'];
				include('pages/header.php');
				include_once('pages/docs/faction.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['freebuild'])){
			if($_GET['freebuild'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['freebuild']['title'];
				$description = $trad_docs['wiki']['freebuild']['description'];
				$keyword = $trad_docs['wiki']['freebuild']['keyword'];
				$urls = $trad_docs['wiki']['freebuild']['url'];
				include('pages/header.php');
				include_once('pages/docs/freebuild.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['minage'])){
			if($_GET['minage'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['minage']['title'];
				$description = $trad_docs['wiki']['minage']['description'];
				$keyword = $trad_docs['wiki']['minage']['keyword'];
				$urls = $trad_docs['wiki']['minage']['url'];
				include('pages/header.php');
				include_once('pages/docs/minage.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['warzone'])){
			if($_GET['warzone'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['warzone']['title'];
				$description = $trad_docs['wiki']['warzone']['description'];
				$keyword = $trad_docs['wiki']['warzone']['keyword'];
				$urls = $trad_docs['wiki']['warzone']['url'];
				include('pages/header.php');
				include_once('pages/docs/warzone.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['space'])){
			if($_GET['space'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['space']['title'];
				$description = $trad_docs['wiki']['space']['description'];
				$keyword = $trad_docs['wiki']['space']['keyword'];
				$urls = $trad_docs['wiki']['space']['url'];
				include('pages/header.php');
				include_once('pages/docs/space.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['rules'])){
			if($_GET['rules'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['rules']['title'];
				$description = $trad_docs['wiki']['rules']['description'];
				$keyword = $trad_docs['wiki']['rules']['keyword'];
				$urls = $trad_docs['wiki']['rules']['url'];
				include('pages/header.php');
				include_once('pages/docs/rules.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['about'])){
			if($_GET['about'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['about']['title'];
				$description = $trad_docs['wiki']['about']['description'];
				$keyword = $trad_docs['wiki']['about']['keyword'];
				$urls = $trad_docs['wiki']['about']['url'];
				include('pages/header.php');
				include_once('pages/docs/about.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['basic'])){
			if($_GET['basic'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['basic']['title'];
				$description = $trad_docs['wiki']['basic']['description'];
				$keyword = $trad_docs['wiki']['basic']['keyword'];
				$urls = $trad_docs['wiki']['basic']['url'];
				include('pages/header.php');
				include_once('pages/docs/basic.php');
				include('pages/footer.php');				
			} else if($_GET['basic'] == 'server'){
				$title = 'Wiki - '.$trad_docs['wiki']['basic']['server']['title'];
				$description = $trad_docs['wiki']['basic']['server']['description'];
				$keyword = $trad_docs['wiki']['basic']['server']['keyword'];
				$urls = $trad_docs['wiki']['basic']['server']['url'];
				include('pages/header.php');
				include_once('pages/docs/basic/server.php');
				include('pages/footer.php');				
			} else if($_GET['basic'] == 'coordonate'){
				$title = 'Wiki - '.$trad_docs['wiki']['basic']['coordonate']['title'];
				$description = $trad_docs['wiki']['basic']['coordonate']['description'];
				$keyword = $trad_docs['wiki']['basic']['coordonate']['keyword'];
				$urls = $trad_docs['wiki']['basic']['coordonate']['url'];
				include('pages/header.php');
				include_once('pages/docs/basic/coordonate.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['more'])){
			if($_GET['more'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['more']['title'];
				$description = $trad_docs['wiki']['more']['description'];
				$keyword = $trad_docs['wiki']['more']['keyword'];
				$urls = $trad_docs['wiki']['more']['url'];
				include('pages/header.php');
				include_once('pages/docs/more.php');
				include('pages/footer.php');				
			} else if($_GET['more'] == 'mail'){
				$title = 'Wiki - '.$trad_docs['wiki']['more']['mail']['title'];
				$description = $trad_docs['wiki']['more']['mail']['description'];
				$keyword = $trad_docs['wiki']['more']['mail']['keyword'];
				$urls = $trad_docs['wiki']['more']['mail']['url'];
				include('pages/header.php');
				include_once('pages/docs/more/mail.php');
				include('pages/footer.php');				
			} else if($_GET['more'] == 'server-channel'){
				$title = 'Wiki - '.$trad_docs['wiki']['more']['server-channel']['title'];
				$description = $trad_docs['wiki']['more']['server-channel']['description'];
				$keyword = $trad_docs['wiki']['more']['server-channel']['keyword'];
				$urls = $trad_docs['wiki']['more']['server-channel']['url'];
				include('pages/header.php');
				include_once('pages/docs/more/server-channel.php');
				include('pages/footer.php');				
			} else if($_GET['more'] == 'love'){
				$title = 'Wiki - '.$trad_docs['wiki']['more']['love']['title'];
				$description = $trad_docs['wiki']['more']['love']['description'];
				$keyword = $trad_docs['wiki']['more']['love']['keyword'];
				$urls = $trad_docs['wiki']['more']['love']['url'];
				include('pages/header.php');
				include_once('pages/docs/more/love.php');
				include('pages/footer.php');				
			} else if($_GET['more'] == 'emoji'){
				$title = 'Wiki - '.$trad_docs['wiki']['more']['emoji']['title'];
				$description = $trad_docs['wiki']['more']['emoji']['description'];
				$keyword = $trad_docs['wiki']['more']['emoji']['keyword'];
				$urls = $trad_docs['wiki']['more']['emoji']['url'];
				include('pages/header.php');
				include_once('pages/docs/more/emoji.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else if(isset($_GET['maps'])){
			if($_GET['maps'] == 'index'){
				$title = 'Wiki - '.$trad_docs['wiki']['maps']['title'];
				$description = $trad_docs['wiki']['maps']['description'];
				$keyword = $trad_docs['wiki']['maps']['keyword'];
				$urls = $trad_docs['wiki']['maps']['url'];
				include('pages/header.php');
				include_once('pages/docs/maps.php');
				include('pages/footer.php');				
			} else {
				header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
				exit();
			}
		} else {
			header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['wiki']['']['url']);
			exit();			
		}
	} else {
			header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url']);
			exit();			
	}
} else {
	header('Location: '.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['docs']['url']);
	exit();	
}
?>