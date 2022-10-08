<?php if ($data['agenda']->getImportant()) { ?>
    <h2 style="color: red;"><?= htmlspecialchars($data['agenda']->getTitle()); ?></h2>
<?php } else { ?>
    <h2><?= htmlspecialchars($data['agenda']->getTitle()); ?></h2>
<?php } ?>
<p><?= htmlspecialchars($data['agenda']->getDetails()); ?></p>
<p><?= htmlspecialchars($data['agenda']->getDate()); ?></p>
<a href="index.php?page=home">Retour à l'index</a>