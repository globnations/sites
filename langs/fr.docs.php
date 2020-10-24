<?php
#exemple $trad['pages']['index']['title']; 

$trad_docs = array(
	'wiki' => array(
		'stuff' => array(
			'title' => 'Stuffs, Armes et Outils',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/stuff.html',
			'contents' => array(
			
			)
		),
		'economy' => array(
			'title' => 'Système bancaire',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/economy.html',
			'contents' => array(
			
			)
		),
		'faction' => array(
			'title' => 'Faction',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/faction.html',
			'contents' => array(
			
			)
		),
		'freebuild' => array(
			'title' => 'Freebuild',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/freebuild.html',
			'contents' => array(
			
			)
		),
		'minage' => array(
			'title' => 'Minage',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/minage.html',
			'contents' => array(
			
			)
		),
		'warzone' => array(
			'title' => 'Warzone',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/warzone.html',
			'contents' => array(
			
			)
		),
		'space' => array(
			'title' => 'Conquête spaciale',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/space.html',
			'contents' => array(
			
			)
		),
		'rules' => array(
			'title' => 'Règles',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/rules.html',
			'contents' => array(
				'1' => '1) Respecter les joueurs mineurs ne pas insulter quiconque sur le jeux de GlobNations, vous avez 3 avertissement si non vous serez automatiquement kické ou banni pendant 4jours.',
				'2' => '2) Vous n\'êtes pas autorisé à être AFK plus de 15 minutes, si vous êtes trouvé en utilisant une méthode de contournement, le personnel de coup de pied automatique prendra des mesures.',
				'3' => '',
				'4' => '',
				'5' => '',
				'6' => '',
				'7' => '',
				'8' => '',
				'9' => '',
				'10' => ''
			)
		),
		'about' => array(
			'title' => 'A Propos',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/about.html',
			'contents' => array(
			
			)
		),
		'more' => array(
			'title' => 'SUPPLEMENTS',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/more.html',
			'contents' => array(
				'title' => array(
					'1' => ''
				),
				'url' => array(
					'1' => ''
				)
			),
			'mail' => array(
				'title' => 'Plus/Email',
				'description' => '',
				'keyword' => '',
				'url' => 'wiki/more/mail.html',
				'contents' => array(
					'command' => 'Commande',
					'title' => array(
						'1' => 'Menu',
						'2' => 'Ecrire',
						'3' => 'Lire',
						'4' => 'Supprimé',
						'5' => 'Lu',
						'6' => 'Informer'
					),
					'description' => array(
						'1' => '<strong>/mail</strong><br> formulaire UI mail',
						'2' => '<strong>/mail write <i class="far fa-angle-left"></i>joueur<i class="far fa-angle-right"></i></strong><br>Et tapez dans le chat pour envoyer un message à ce joueur',
						'3' => '<strong>/mail read <i class="far fa-angle-left"></i>joueur<i class="far fa-angle-right"></i></strong><br>Lisez les messages des joueurs qui ont été soumis.',
						'4' => '<strong>/mail clear <i class="far fa-angle-left"></i>joueur<i class="far fa-angle-right"></i>  <i class="far fa-angle-left"></i>page<i class="far fa-angle-right"></i></strong><br>Pour supprimer ce message',
						'5' => '<strong>/mail see <i class="far fa-angle-left"></i>joueur<i class="far fa-angle-right"></i></strong><br>Voir mes messages, l\'a-t-il lu?',
						'6' => '<strong>/report <i class="far fa-angle-left"></i>message<i class="far fa-angle-right"></i></strong><br>Informer l\'administrateur'
					)
				)
			),
			'server-channel' => array(
				'title' => 'Plus/Chaîne serveur',
				'description' => '',
				'keyword' => '',
				'url' => 'wiki/more/server-channel.html',
				'contents' => array(
					'command' => 'Commande',
					'description' => array(
						'1' => '<strong>/sch</strong> Rejoignez les différents canaux de serveur par défaut est <i class="far fa-angle-left"></i>users<i class="far fa-angle-right"></i> (uniquement VIP)',
						'2' => '<strong>/sch help</strong>: Afficher l\'aide, comment utiliser?',
						'3' => '<strong>/sch reload</strong>: Recharger la config (uniquement VIP)',
						'4' => '<strong>/sch create <i class="far fa-angle-left"></i>channel<i class="far fa-angle-right"></i></strong>: Créer une nouvelle chaîne (uniquement VIP)',
						'5' => '<strong>/sch join <i class="far fa-angle-left"></i>channel<i class="far fa-angle-right"></i> <i class="far fa-angle-left"></i>password<i class="far fa-angle-right"></i></strong>: Rejoignez une chaîne',
						'6' => '<strong>/sch leave</strong>: Quitter la chaîne actuelle',
						'7' => '<strong>/sch list</strong>: Afficher la liste de toutes les chaînes'
					)
				)
			),
			'love' => array(
				'title' => 'Plus/Aimer',
				'description' => '',
				'keyword' => '',
				'url' => 'wiki/more/love.html',
				'contents' => array(
					'command' => 'Command',
					'description' => array(
						'1' => 'jeu de rôle ou réel dans lequel les gens peuvent s\'aimer',
						'2' => '<strong>/love <i class="far fa-angle-left"></i>joueur<i class="far fa-angle-right"></i></strong>: Cela permet à l\'utilisateur d\'être capable d\'aimer un certain utilisateur.',
						'3' => '<strong>/breakup <i class="far fa-angle-left"></i>joueur<i class="far fa-angle-right"></i></strong>: Cela permet à l\'utilisateur de rompre avec un certain utilisateur.',
						'4' => '<strong>/nolove <i class="far fa-angle-left"></i>nolove/love<i class="far fa-angle-right"></i></strong>: Cela permet à l\'utilisateur de basculer s\'il souhaite être aimé ou non.',
						'5' => '<strong>/serverlove</strong>: Fournit aux utilisateurs l\'aide standard.'
					)
				)
			),
			'emoji' => array(
				'title' => 'Plus/Emoji',
				'description' => '',
				'keyword' => '',
				'url' => 'wiki/more/emoji.html',
				'contents' => array(
					'command' => 'Command',
					'title' => array(
						'1' => 'Texte',
						'2' => 'icon'
					)
				)
			)
		),
		'basic' => array(
			'title' => 'Base',
			'description' => '',
			'keyword' => '',
			'url' => 'wiki/basic.html',
			'contents' => array(
				'title' => array(
					'1' => 'Blocs',
					'2' => 'Objets',
					'3' => 'Créatures',
					'4' => 'Fabrication',
					'5' => 'Cuisson',
					'6' => 'Enchantement',
					'7' => 'Alchimie',
					'8' => 'Commerce'
				),
				'url' => array(
					'1' => 'minecraft-fr.gamepedia.com/Blocs',
					'2' => 'minecraft-fr.gamepedia.com/Objets',
					'3' => 'minecraft-fr.gamepedia.com/Cr%C3%A9atures',
					'4' => 'minecraft-fr.gamepedia.com/Fabrication',
					'5' => 'minecraft-fr.gamepedia.com/Cuisson',
					'6' => 'minecraft-fr.gamepedia.com/Enchantement',
					'7' => 'minecraft-fr.gamepedia.com/Alchimie',
					'8' => 'minecraft-fr.gamepedia.com/Commerce'
				)
			),
			'server' => array(
				'title' => 'Base/serveur',
				'description' => '',
				'keyword' => '',
				'url' => 'wiki/basic/server.html',
				'contents' => array(
					'home' => 'Pour accéder sur nos différentes serveur disponible: <b>/globnations</b>'
				)
			),
			'coordonate' => array(
				'title' => 'Base/Coordonnées',
				'description' => '',
				'keyword' => '',
				'url' => 'wiki/basic/coordonate.html',
				'contents' => array(
					'home' => 'Affiché vos coordonnées: <b>/xyz true</b><br>Désactivé vos coordinnées: <b>/xyz false</b>'
				)
			)
		),
		'maps' => array(
			'title' => 'Maps Carte du monde',
			'description' => '',
			'keyword' => '',
			'url' => 'maps.html',
			'contents' => array(
				'dd' => 'degrés décimaux',
				'dms' => array(
					'title' => 'degrés, minutes, secondes',
					'nord' => 'Nord',
					'soud' => 'Sud',
					'east' => 'Est',
					'west' => 'Ouest'
				),
				'coordonate' => 'Coordonnées',
				'map' => 'Carte du monde',
				'info-gps' => 'Prendre les coordonnées réelle GPS ou de choisir le pays de votre choix à vous installez sur minecraft<br>Cliquer sur la carte de la terre pour prendre <strong>Latitude</strong> et <strong>Longitude</strong>'
			)
		)
	)
);
//$trad['default']['index']['contents']['worlds']['close-maps']
//$trad_docs['wiki']['map']['contents']['map']
$encoderdocs = json_encode($trad_docs);

?>