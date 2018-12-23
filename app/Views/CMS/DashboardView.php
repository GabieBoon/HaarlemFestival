<?php //set site title ?>
<?php $this->setSiteTitle('CMS Dashboard'); ?>

<?php //head ?>
<?php $this->start('head'); ?>
<meta content="test" />

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

<?php print_r(UserModel::currentLoggedInUser()) ?>
<?php echo ('Hello World!'); ?>
<?php $this->end(); ?>