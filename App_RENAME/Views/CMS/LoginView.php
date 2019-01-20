<?php //set site title ?>
<?php $this->setSiteTitle('CMS Login Page'); ?>

<?php //head ?>
<?php $this->start('head'); ?>
<?php $this->getBgImage(); ?>
<meta content="test" />
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/LoginCss.php"/> 
<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>
<main class="background-image">
<div class="col-md-6 col-md-offset-3 container card p-3 l-div">
    <img src="<?= PROOT ?>Public/Images/HaarlemFestival-Logo-ZW.svg"/>
    <form class="form l-form" action="<?= PROOT ?>cms/login" method="POST">
    <div class="alert-danger"><?= $this->displayErrors ?></div>
        <h3 class="text-center">Login</h3>
        <div class="form-group l-form-group">
            <label for="Username">Username: </label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group l-form-group">
            <label for="Password">Password: </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group l-form-group">
            <label for="remember_me">Remember Me: <input type="checkbox" id="remember_me" name="remember_me" value="on"></label>
        </div>
        <div class="form-group l-form-group">
            <input type="submit" name="submit_btn" value="Login" class="btn-primary btn-lg btn-block btn"></label>
        </div>
        <!-- <div class="text-right hide"> -->
            <!-- <a href="< ?= PROOT ?>cms/register" class="text-primary">Register</a> -->
        <!-- </div> -->
    </form>
    <a href="<?=PROOT?>home">Back to Homepage</a>
</div>
</main>

<?php $this->end(); ?>