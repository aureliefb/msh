<section>
	<h2>Nos dernières actus</h2>
	<section class="actus">
<?php

// http://fb2rss.altervista.org/?id=905114732908799
$pathSimplePie = "$path/Simplepie";
require_once("$pathSimplePie/autoloader.php");

// We'll process this feed with all of the default options.
$feed = new SimplePie();
 
// Set the feed to process.
$feed->set_cache_location($path. '/var/cache');
$feed->set_feed_url("http://fb2rss.altervista.org/?id=905114732908799");

// Run SimplePie.
$feed->init();
 
// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();

foreach ($feed->get_items() as $item) {
    $title = $item->get_title();
    $description = $item->get_description();
    $date = $item->get_date();

    echo 
<<<CODEHTML
    <article class="rss-article">
        <div>$description</div>
        <date>Publié le : $date</date>
    </article>
CODEHTML;
}
    
?>
</section>