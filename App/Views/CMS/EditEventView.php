<!-- set site title -->
<?php $this->setSiteTitle('CMS Dashboard'); ?>

<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('body'); ?>



<?php $user = $this->UserModel; ?>

<?php
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;

?>

<div id="pageWrapper">
    <header id="pageHeader">
        <div id="pageTitle">
            <h1>Edit
                <?= ucfirst($this->event); ?> Page</h1>
            <p>Choose an event from the menu</p>
        </div>
    </header>
    <main id="pageMain" class="">


    </main>
</div>





<?php $this->end(); ?>