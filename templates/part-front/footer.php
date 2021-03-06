
        </main>
        <footer>
            <div class="footer">
                <nav class="desktop-only">
                    <ul>
                        <li><a href="<?php echo $urlAccueil ?>">Accueil</a></li>
                        <li><a href="<?php echo $urlActus ?>#anchor-actus">Actualités</a></li>
                        <li><a href="<?php echo $urlCatalogue ?>#anchor-catalogue">Catalogue</a></li>
                        <li><a href="<?php echo $urlPierre ?>#anchor-pierre">Pierre Ragot</a></li>
                        <li><a href="<?php echo $urlSavoirFaire ?>#anchor-savoirfaire">Savoir-faire</a></li>
                        <li><a href="<?php echo $urlBoutiques ?>#anchor-boutique">Boutiques </a> / <a href="<?php echo $urlBoutiques ?>#anchor-contact">Contact</a></li>
                        <li><a href="<?php echo $urlMentionsLegales ?>#anchor-mentionslegales">Mentions légales / Crédits</a></li>
                    </ul>
                </nav>


                <!-- formulaire de contact -->
                <div class="subscribe-newsletter">
                    <form>
                        <label>Inscrivez-vous à notre newsletter !</label>
                        <input required type="email" name="email" placeholder="Votre E-mail">
                        <button type="submit" name="submit" value="validNL">Inscription</button>
                    </form>
                </div><!--fin div subscribe newsletter-->

                <!--réseaux sociaux icons-->
                <ul class="reseaux-sociaux">
                    <p>Retrouvez-nous sur nos réseaux sociaux</p>
                    <li>
                        <a href="https://www.facebook.com/maisonsthonorepierreragot/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> <span>Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/maisonsainthonoremarseille/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> <span>Instagram</span></a>
                    </li>
                </ul>
                <!--End réseaux sociaux-->
            </div><!--fin div footer-->

            <p>Maison Saint-Honoré par Pierre Ragot 2014-<?php echo date("Y")?></p>
        </footer>


        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="<?php echo $urlAccueil ?>js/intro.js"></script>
        <script type="text/javascript" src="<?php echo $urlAccueil ?>js/thomas/javascript.js"></script>
        <script type="text/javascript" src="<?php echo $urlAccueil ?>js/script.js"></script>
        <script type="text/javascript" src="<?php echo $urlAccueil ?>js/formValidation.js"></script>
        <script>
			// JE PEUX ECRIRE DU CODE JS
			// MAIS JE PEUX AUSSI ECRIRE DU CODE PHP
			urlAjax = "<?php echo $this->generateUrl('ajax'); ?>";
		</script>
    </body>
</html> 