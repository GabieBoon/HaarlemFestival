<!-- set site title -->
<?php $this->setSiteTitle('CMS - Statistics'); ?>
<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->
<?php $this->end(); ?>
<!-- body -->
<?php $this->start('body'); ?>

<div id="pageWrapper">
    <header id="pageHeader">
        <div id="pageTitle">
            <h1><?= ucfirst($this->event); ?> Statistics</h1>
            <!-- <p>Choose an event from the menu</p> -->
        </div>
    </header>
    <main id="pageMain" class="">

    <?php $this->partial('CMS', 'statsWidget'); ?>
        
        
        
        <?= showStatsWidget('Event', 'Total tickets sold', 9658, 16000); ?>
        <?= showStatsWidget('Event', 'Total unsold tickets', 6342, 16000); ?>
        <?= showStatsWidget('Event', 'Total ticket revenue', 689960, 0, '€'); ?>
    </main>
</div>
<?php $this->end(); ?>