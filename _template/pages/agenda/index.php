<?php foreach($data['agendas'] as $rdv) { ?>

    <?php if ($rdv->getImportant()) { ?>
        <h2 style="color: red;"><?= htmlspecialchars($rdv->getTitle()); ?></h2>
    <?php } else { ?>
        <h2><?= htmlspecialchars($rdv->getTitle()); ?></h2>
    <?php } ?>
    <p><?= htmlspecialchars($rdv->getDate()); ?></p>
    <p>ID: <?= htmlspecialchars($rdv->getId());?></p>
    <a href="index.php?page=show&id=<?= htmlspecialchars($rdv->getId()); ?>">Voir le RDV</a>

<?php } ?>

<a href="index.php?page=add">
    <button>Ajouter un RDV</button>
</a>