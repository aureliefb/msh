<?php
	$urlAccueil     = $this->generateUrl("accueil");
	$urlCatalogue   = $this->generateUrl("catalogue");
?>

<section class="section-savoirfaire">
	<h2>Notre savoir-faire</h2>
	<section>
		<article>
			<div>
				<h3>La passion du métier</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem pariatur illum aspernatur nostrum hic dolor omnis quis, dolorum perferendis obcaecati explicabo minus error sint, ducimus.</p>
			</div>
		</article>

		<article>
			<h3>Des matières premières de premier choix ...</h3>
			<p><span>...pour des produits de qualité ! </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quos, accusamus veritatis iure facere numquam consequatur quasi ipsa perspiciatis. Nobis dicta eaque nemo harum ipsum architecto est veniam sapiente facilis blanditiis unde at, temporibus quia officiis quod cumque eius ad dolorum itaque perferendis molestiae beatae consectetur! Nostrum laboriosam dolore nihil?</p>
			<p>Découvrez toute notre gamme de produits <a href="<?php echo $urlCatalogue ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></p>
		</article>

		<article>
			<h3>On parle de nous</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quisquam neque eaque delectus, in placeat, voluptatibus dolorem dicta consequuntur, unde qui quod voluptate ullam eveniet similique. Corporis nemo et deleniti, quas, fugiat quis reiciendis amet eveniet tempora, nesciunt facere minima!</p>
		</article>
	</section>
</section>