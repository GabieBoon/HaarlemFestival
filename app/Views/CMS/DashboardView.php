<!-- set site title -->
<?php $this->setSiteTitle('CMS Dashboard'); ?>

<!-- head -->
<?php $this->start('head'); ?>
<meta content="test" />

<?php $this->end(); ?>

<!-- body -->
<?php $this->start('body'); ?>
<pre>
<?php print_r(UserModel::currentLoggedInUser()); ?>
<?php print_r($_SESSION); ?>

</pre>
<?php echo ('Hello World!'); ?>
<?php $this->end(); ?>