<<<<<<< HEAD
<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
=======
<?php $this->titre = 'Mon Blog'; ?>

<p>Une erreur est survenue : <?= $msgErreur ?></p>
>>>>>>> refs/remotes/origin/ArchitectureMVCOO
