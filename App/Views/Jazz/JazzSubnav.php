<?php $subPage = explode('/', ltrim($_SERVER['PATH_INFO'], '/'))[1]; ?>

<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzSubnavCss.php" ><!-- Jazz Subnav CSS -->
<?php $this->end(); ?>

<?php $this->start('subnav'); ?>
<section class="j-subnav">
<!--    <div class="j-subnav-left"></div>-->
    <nav class="text-center">
        <ul class="mb-0 pl-0">
            <li><a class="<?php if($subPage == 'about') {echo 'j-active';} ?>" href="<?= PROOT ?>jazz/about">About</a></li>
            <li><a class="<?php if($subPage == 'artists') {echo 'j-active';} ?>" href="<?= PROOT ?>jazz/artists/1">Artists</a></li>
            <li><a class="<?php if($subPage == 'tickets') {echo 'j-active';} ?>" href="<?= PROOT ?>jazz/tickets">Tickets</a></li>
            <li><a class="<?php if($subPage == 'locations') {echo 'j-active';} ?>" href="<?= PROOT ?>jazz/locations">Locations</a></li>
        </ul>
    </nav>
<!--    <div class="j-subnav-right"></div>-->
</section>
<?php $this->end(); ?>
