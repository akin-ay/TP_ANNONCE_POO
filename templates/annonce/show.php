<?php
echo "<style> body{margin : 0;}</style>";
echo"<div>";
echo "<b>Annonce n°".$annonces['id']."</b>";
echo "<h1>".$annonces['title']."</h1>";
echo $annonces['content'];
echo "</div>";
echo "<br><b>Commentaires :</b>"?>
<?php foreach($commenaitres as $commentaire) : ?>
<?=$commentaire['commentaire']?><br>
<?endforeach ?>
<?php
echo "<a href='index.php'>Page d'accueil</a>";
?>