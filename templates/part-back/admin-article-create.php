<section>
    <h3>FORMULAIRE CREATE Article</h3>
    <!-- NE PAS OUBLIER: POUR UPLOADER UN FICHIER -->
    <!-- method="POST" enctype="multipart/form-data" -->
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="titre" required placeholder="TITRE">
        <input type="text" name="categorie" required placeholder="CATEGORIE">
        <textarea id="editor1" type="text" name="contenu" required placeholder="CONTENU" rows="30"></textarea>
        <input type="file" name="cheminImage">
        <button type="submit">PUBLIER ARTICLE</button>
        <input type="hidden" name="codebarre" value="article">
        <div class="response">
<?php
// TRAITER LE FORMULAIRE
if ($objetRequest->get("codebarre", "") == "article")
{
    $objetFormArticle = new App\Controller\FormArticle;
    
    //$objetFormArticle->creer($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
    // https://symfony.com/doc/current/doctrine.html#persisting-objects-to-the-database
    $objetEntityManager = $this->getDoctrine()->getManager();
    $objetFormArticle->creerPersistence($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession, $this->getDoctrine());
}
?>
        </div>
    </form>
    
    <!-- https://sdk.ckeditor.com/samples/autogrow.html# -->
	<script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'editor1', {
			extraPlugins: 'autogrow',
			autoGrow_minHeight: 200,
			autoGrow_maxHeight: 600,
			autoGrow_bottomSpace: 50,
			removePlugins: 'resize'
		} );
    </script>
    
</section>
