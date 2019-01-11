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
                <h4>About Food</h4>
                <p>Curious about what kind of great food Haarlem has to offer? Then you have arrived at the right page! On this page you will find several restaurants that are located in Haarlem where you can dine during the festival. Read below about the restaurants that are affiliated with the haarlem festival.</p>
                <p>If you buy a ticket for a restaurant, you place a reservation for which the costs are 10 euros. Additional costs of the restaurant will be settled at the restaurant.</p>
            </div>

            <div class="restaurant-list">
                <h4>Restaurants</h4>

                <?= FoodViewFunctions::viewRestaurantInfo($this->restaurantInfo); ?>
            </div>
        </div>
    </article>
</div>

<?php $this->end(); ?>