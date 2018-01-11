<?php

// liste des abonnés à la newsletter

$verifPseudo = $objetSession->get("pseudo");

?>
<section>
    <h3>SECTION ADMIN</h3>
    <h4>BIENVENUE <?php echo $verifPseudo ?></h4>
</section>

<?php 

if ($objetRequest->get("afficher", "") == "update") {
    require_once("$cheminPart/admin-newsletter-update.php");
} else {
	require_once("$cheminPart/admin-newsletter-read.php");


