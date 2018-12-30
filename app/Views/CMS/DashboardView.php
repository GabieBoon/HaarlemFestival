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
<h1 class="text-center"> welcome <?= $user->userName;?></h1>

<h2> Your role is <?= strtolower($user->role); ?></h2>
<a href="<?= PROOT ?>cms/logout" role="button" class="btn btn-primary">Logout</a>
<a href="<?= PROOT ?>cms/dashboard/deleteSession" role="button" class="btn btn-danger">Delete Session</a>
<!-- <a href="< ?= PROOT ?>cms" role="button" class="btn btn-danger">-> cms</a> -->

</div>

<pre>
<!-- < ?php print_r(UserModel::currentLoggedInUser()); ?> -->
<?php print_r($_SESSION);
$arh = apache_request_headers();
print_r(apache_response_headers());
 print_r($arh);
 print_r(get_headers($arh['Referer'])); 
// print_r(nsapi_request_headers());
// print_r(nsapi_response_headers());
 
 ?>
 

</pre>
<!-- < ?php echo ('Hello World!'); ?> -->
<?php $this->end(); ?>