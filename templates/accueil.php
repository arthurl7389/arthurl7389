<?php $titre='Test Arthur'; ?>

<?php ob_start(); ?>
 <p>coucou</p>
<?php $fond = ob_get_clean(); ?>
<?php require_once('layout.php')?>
