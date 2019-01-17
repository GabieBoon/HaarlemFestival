<?php //head ?>
<?php $this->start('head'); ?>
<!-- Food CSS -->
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/FoodCss.php" >

<?= $this->getBgImage(); ?>

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

<div class="background-image">
    <article class="food-content-box">
        <div class="food-content">
            <div class="about-food">
                <h4><?= $this->ContentModel->About->title?></h4>
                <?= $this->ContentModel->About->text?>
            </div>

            <div class="restaurant-list">
                <h4><?= $this->ContentModel->Restaurants->title?></h4>

                <?= FoodViewFunctions::viewRestaurantInfo($this->restaurantInfo); ?>
            </div>
        </div>
    </article>
</div>

<?php $this->end(); ?>