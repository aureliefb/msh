
        </main>
        <footer>
            <div class="footer">
            <nav class ="desktop-only">
                <ul>
                    <li><a href="<?php echo $urlAccueil ?>">Accueil</a></li>
                    <li><a href="<?php echo $urlActus ?>">Actualités</a></li>
                    <li><a href="<?php echo $urlCatalogue ?>">Catalogue</a></li>
                    <li><a href="<?php echo $urlPierre ?>">Pierre Ragot</a></li>
                    <li><a href="<?php echo $urlSavoirFaire ?>">Savoir-faire</a></li>
                    <li><a href="<?php echo $urlBoutiques ?>">Boutiques</a></li>
                </ul>
            </nav>
            </div>
            <!-- formulaire de contact -->
            <h4>Inscrivez vous à la Newsletter !</h4>
            <form>
                <input required type="email" name="email" placeholder="Votre E-mail">
                <button type="submit" name="submit" value="validNL">Inscription</button>
            </form>
                <!--réseaux sociaux icons-->
                <li><a href="https://www.facebook.com/maisonsthonorepierreragot/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/maisonsainthonoremarseille/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <!--End réseaux sociaux-->
        <p>Maison Saint-Honoré par Pierre Ragot 2014-<?php echo date("Y")?></p>
        </footer>


        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

        <script type="text/javascript" src="<?php echo $urlAccueil ?>/js/thomas/javascript.js"></script>
        <script type="text/javascript" src="<?php echo $urlAccueil ?>/js/script.js"></script>
        <script>
			// JE PEUX ECRIRE DU CODE JS
			// MAIS JE PEUX AUSSI ECRIRE DU CODE PHP
			urlAjax = "<?php echo $this->generateUrl('ajax'); ?>";
		</script>
    </body>
</html>