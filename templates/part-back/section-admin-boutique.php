<?php

$verifPseudo = $objetSession->get("pseudo");

?>
<section>
    <h3>SECTION ADMIN</h3>
    <h4>BIENVENUE <?php echo $verifPseudo ?></h4>
</section>

<?php 

if ($objetRequest->get("afficher", "") == "update") {
    require_once("$cheminPart/admin-boutique-update.php");
} else {
    require_once("$cheminPart/admin-boutique-create.php");
}

	require_once("$cheminPart/admin-boutique-read.php");

