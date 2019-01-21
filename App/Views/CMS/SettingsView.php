<!-- set site title -->
<?php $this->setSiteTitle('CMS Settings'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/CMS/StyleSheet.css"><!-- Cms CSS -->
<!-- head -->
<?php $this->start('head'); ?>
<meta content="test" />

<?php $this->end(); ?>

<!-- body -->
<?php $this->start('body'); ?>
<?php $user = $this->UserModel;?>


<div id="pageWrapper">
    <header id="pageHeader">
        <div id="pageTitle">
            <h1>Settings Page</h1>
            <!-- <p>Choose an event from the menu</p> -->
        </div>
    </header>
    <main id="pageMain" class="">







<div class="col-md-6 col-md-offset-3 container bg-light p-3">
<h1 class="text-center">welcome <?= $user->firstName;?> <?= $user->preposition; ?> <?= $user->lastName; ?></h1>
<h2 class="text-center">Logged in under: <?= $user->userName;?></h2>

<h3> Your role is <?= strtolower($user->role); ?></h3>
<a href="<?= PROOT ?>cms/logout" role="button" class="btn btn-primary">Logout</a>
<a href="<?= PROOT ?>cms/dashboard/deleteUserSession" role="button" class="btn btn-warning">Delete User Session</a>
<a href="<?= PROOT ?>cms/dashboard/deleteSession" role="button" class="btn btn-danger">Delete Session</a>
<!-- <a href="< ?= PROOT ?>cms" role="button" class="btn btn-danger">-> cms</a> -->

</div>

<pre>
<!-- < ?php print_r(UserModel::currentLoggedInUser()); ?> -->
<?php 
//  print_r($_SESSION);
// $arh = apache_request_headers();
// print_r(apache_response_headers());
//  print_r($arh);
//  print_r(get_headers($arh['Referer'])); 
// print_r(nsapi_request_headers());
// print_r(nsapi_response_headers());
 
 ?>
 

<!-- < ?php print_r(); ?> -->
<!-- < ?php print_r($this->ContentModel); ?> -->

    </main>
</div>


<!-- < ?php echo ('Hello World!'); ?> -->
<?php $this->end(); ?>