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

<div id="base">
    <!-- Unnamed (Rectangle) -->
    <div id="u462">
        <div id="u462_div"></div>
        <div id="u462_text" class="text ">
            <h1><span>Edit <?= ucfirst($this->event); ?> Page</span></h1>
            <p>Choose an event from the menu</p>
            
        </div>
    </div>
</div>






<?php $this->end(); ?>