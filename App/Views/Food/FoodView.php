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
                <h4><?= $this->ContentModel[0]->content?></h4>
                <p><?= $this->ContentModel[1]->content?></p>
                <p><?= $this->ContentModel[2]->content?></p>
            </div>

            <div class="restaurant-list">
                <h4><?= $this->ContentModel[3]->content?></h4>

                <?= FoodViewFunctions::viewRestaurantInfo($this->restaurantInfo); ?>
            </div>
        </div>
    </article>
</div>

<?php $this->end(); ?>