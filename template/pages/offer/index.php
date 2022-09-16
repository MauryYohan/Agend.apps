

<?php foreach($data['offers'] as $offer) { ?>
    <h2><?= htmlspecialchars($offer->getTitle()); ?></h2>
    <p><?= htmlspecialchars($offer->getDescription()); ?></p>
    <a href="<?= htmlspecialchars($offer->getLink()); ?>">Voir l'offre</a>
<?php } ?>