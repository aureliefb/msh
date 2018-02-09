  <!-- VERSION MOBILE -->
  <!-- Section des actus -->
      <section class="actus">
        <h2>
          <a id="anchor-actus">Nos dernières actus</a>
        </h2>
        <!-- <section class="actus"> -->
              <div class="slideshow-container">


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

          // conversion de la date EN en FR avec encodage UTF-8
          setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
          $datefr = utf8_encode(strftime('%d %B %Y', strtotime($date)));

          // $description = mb_strimwidth($description, 0, 15, '... ');

          echo 
<<<CODEHTML
      <div class="mySlides fade">
          <article class="rss-article">
              <div>$description</div>
              <date>Publié le : $datefr</date>
          </article>
      </div>
CODEHTML;
      }
          
      ?>

      </div>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)">1</span> 
        <span class="dot" onclick="currentSlide(2)">2</span> 
        <span class="dot" onclick="currentSlide(3)">3</span>
        <span class="dot" onclick="currentSlide(4)">4</span>
      </div>

      </section><!-- FIN section actus -->
    <!-- Fin bloc welcome + actus -->