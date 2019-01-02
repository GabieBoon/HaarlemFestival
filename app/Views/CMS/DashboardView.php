<!-- set site title -->
<?php $this->setSiteTitle('CMS Dashboard'); ?>

<!-- head -->
<?php $this->start('head'); ?>
<meta content="test" />

<?php $this->end(); ?>

<!-- body -->
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 container bg-light p-3">
<?php $user = UserModel::currentLoggedInUser();?>
<h1 class="text-center">welcome <?= $user->firstName;?> <?= $user->preposition; ?> <?= $user->lastName; ?></h1>
<h2 class="text-center">Logged in under: <?= $user->userName;?></h2>

<h3> Your role is <?= strtolower($user->role); ?></h3>
<a href="<?= PROOT ?>cms/logout" role="button" class="btn btn-primary">Logout</a>
<a href="<?= PROOT ?>cms/dashboard/deleteSession" role="button" class="btn btn-danger">Delete Session</a>
<!-- <a href="< ?= PROOT ?>cms" role="button" class="btn btn-danger">-> cms</a> -->

</div>

<pre>
<?php print_r($user); ?>
<?php print_r($_SESSION); ?>
<br>
<br>
<br>

<!-- < ?php print_r(); ?> -->
</pre>
<!-- < ?php echo ('Hello World!'); ?> -->
<?php $this->end(); ?>