<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2>

					<div class="alert alert-success">
						Nombre d'articles :
					</div>

					<div class="alert alert-success">
						Nombre de commentaires :
					</div>

					<form action="upload_action.php" method="post" enctype="multipart/form-data">
Importer un fichier XML : <input type="file" name="fichier1"> <br>


    <input type="submit" value="Importer XML" name="Envoye">
</form>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>