<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HisSubnavCss.css" ><!-- Jazz Subnav CSS -->
<?php $this->end(); ?>

<?php $this->start('hissubnav'); ?>
<section class="hissubnav">
    <p class="subnav">
        &nbsp;
        <a class="<?php if($subPage == 'about'  || $subPage == null) {echo 'active';} ?>" href="<?= PROOT ?>Historic/about">About</a> &nbsp;
        <a class="<?php if($subPage == 'artists') {echo 'active';} ?>" href="<?= PROOT ?>Historic/locations">Locations</a> &nbsp;
        <a class="<?php if($subPage == 'artists') {echo 'active';} ?>" href="<?= PROOT ?>Historic/schedule">Schedule</a> &nbsp;
    </p>
</section>
<?php $this->end(); ?>
