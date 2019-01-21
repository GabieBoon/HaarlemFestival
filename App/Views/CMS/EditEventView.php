<!-- set site title -->
<?php $this->setSiteTitle('CMS Dashboard'); ?>

<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/CMS/StyleSheet.css"><!-- Cms CSS -->


<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<?php $this->end(); ?>

<!-- body -->
<?php $this->start('body'); ?>
 <?php $this->partial('CMS', 'EditPagesControls'); ?>


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



<?php showEditPagesWidget($this->event, $this->ContentModel);?>

    <pre>
<!-- < ?php print_r($this->ContentModel); ?> -->
</pre>
    </main>
</div>








<?php $this->end(); ?>