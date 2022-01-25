
<h1>Liste des annonces</h1>
<?php foreach($annonces as $annonce) : ?>
<h2>
    <?=$annonce['title']?>
</h2>
<p>
    <?=$annonce['description']?>
</p>
<a href="index.php?controlleur=annonces&task=showbyid&id=<?= $annonce['id']?>">Lire</a>

<?php endforeach ?>
    