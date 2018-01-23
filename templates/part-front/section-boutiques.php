<section class="section-boutiques">
	<h2><a id="anchor-boutique">Nos boutiques</a></h2>
	<section class="adress-map">
		<div class="adresses">
			<iframe src="https://www.google.com/maps/d/embed?mid=1EWxCbC__4H0afdJmBKgBQWEeRnZh1DOg" width="840" height="600"></iframe>
			<ul>
			
			<?php
			foreach ($listBoutiques as $b) {
				$nomBoutique = $b->getNomBoutique();
				$adresse     = $b->getAdresse();
				$horaires    = $b->getHoraires();
				$telephone   = $b->getTelephone();
				echo '
					<li>
						<h3>'.$nomBoutique.'</h3>
						<div class="adresses-infos">
							<div>
								<p><i class="fa fa-home" aria-hidden="true"></i> '.$adresse.'</p>
								<p><i class="fa fa-phone" aria-hidden="true"></i> +33'.$telephone.'</p>
							</div>
							<div>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i> Horaires :</br> '.$horaires.'</p>
							</div>
						</div>
					</li>';
			}
			?>
				
			</ul>
		</div>
	</section>



	<!-- formulaire de contact -->
       <section class="section-contact">
            <h2><a id="anchor-contact">Contactez-nous</h2>
                <form>
                	<div>
                        <label>Votre nom</label>
                        <input type="text" name="nom" class="select">
                        <label>Votre e-mail</label>
                        <input type="email" name="email" class="select">
                    </div>
                    <div>
						<label>Sujet</label>
                        <input type="text" name="sujet" class="select">
                        <label>Votre message</label>
                        <textarea name="message"></textarea>
                        <button type="submit" name="submit" value="validC">Envoyer</button>
                        <div class="response"><div>
                    </div>
                </form>
        </section>
</section>