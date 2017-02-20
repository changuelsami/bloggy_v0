<?php
print "<pre>";
var_dump($_FILES);
print "<hr> Le fichier " . $_FILES['fichier1']['name'] . " est actuellement dans le dossier " . $_FILES['fichier1']['tmp_name'];

exit();
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['fichier1']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fichier1']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}
?>
