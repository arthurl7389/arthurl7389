<?php $titre='Test Arthur'; ?>

<?php ob_start(); ?>
 <p>coucou</p>
<?php ob_get_clean(); ?>
<?php require('layout.php') ?>
