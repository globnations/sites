<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">


	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['index']['url'].'</loc>
		<changefreq>monthly</changefreq>
		<priority>0.80</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['default']['index']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['contact']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['docs']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['author']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['legal']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['server']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['shop']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['vote']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['donation']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['support']['url'].'</loc>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	
</urlset>'; ?>