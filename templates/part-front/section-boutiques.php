<section class="section-boutiques">
	<h2>Nos boutiques</h2>
	<section class="adress-map">
		<div class="adresses">
			<ul>
			<?php
			foreach ($listBoutiques as $b) {
				$nomBoutique = $b->getNomBoutique();
				$adresse     = $b->getAdresse();
				$horaires    = $b->getHoraires();
				$telephone   = $b->getTelephone();
				echo '
				<li><h3>'.$nomBoutique.'</h3></li>
				<li><adress>'.$adresse.'</adress></li>
				<li><p>'.$horaires.'</li>
				<li><p>+33'.$telephone.'</li>';
			}
			?>
			</ul>
			<!-- <ul>
				<li><h3>Maison Saint-Honoré par Pierre Ragot - Prado/Castellane</h3>
				<address>41 avenue du Prado, 13006 Marseille</address></li>
				<li><h3>Maison Saint-Honoré par Pierre Ragot - Endoume</h3>
				<address>131 rue d'Endoume, 13007 Marseille</address></li>
				<li><h3>Fournil des Auffes</h3>
				<address>35 bd Augustin Cieussa, 13007 Marseille</address></li>
			</ul> -->

			<ul>
				<p>Revendeurs</p>
				<li>Biocoop</li>
				<li>Revendeur1</li>
				<li>Revendeur21</li>
			</ul>
		</div>
		<iframe src="https://www.google.com/maps/d/embed?mid=1EWxCbC__4H0afdJmBKgBQWEeRnZh1DOg" width="840" height="600"></iframe>
	</section>

	<!-- formulaire de contact -->
       <section class="section-contact">
            <h2>Contactez-nous</h2>
                <form>
                	<div>
                        <label>Votre nom</label>
                        <input type="text" name="nom">
                        <label>Votre e-mail</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label>Votre message</label>
                        <textarea rows="10" cols="50"></textarea>
                        <button type="submit" name"submit" value="validC">Envoyer</button>
                    </div>
                </form>
        </section>
</section>