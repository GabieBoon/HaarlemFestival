<?php //head ?>
<?php $this->start('head'); ?>
    <!-- Food CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/FoodCss.php" >
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/RestaurantCss.css" >

<?= $this->getBgImage(); ?>

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

    <div class="background-image">
        <article class="food-content-box">
            <div class="food-content">
                <div class="breadcrumb-nav">
                    <p><a href="<?= PROOT ?>Home/">Home</a> > <a href="<?= PROOT ?>Food">Food</a> > RestaurantName</p>
                </div>

                <h1>RestaurantName</h1>

                <img class="restaurantImage" src="<?= PROOT ?>public/images/RestaurantBanners/ml.png" alt="Haarlem Festival Logo" href="<?= PROOT ?>Home/"/>

                <p>The successful restaurant by chef Joshua Jaring is – just like ratatouille – a mix of French cuisine in the reality of today with excellent value for money in an accessible environment. So we started in 2013 in de lange veerstraat and so we go after moving in also by 2015 on our unique monumental location on the Spaarne. Michelin named our restaurant at the presentation of our first star in 2014 an example to the new generation of chefs and restaurants: less stiff, less expensive, and more accessible. It comes to what's on the Board. Find out for yourself: from experience menus to our exclusive a la carte dishes. Everything to perfection made with surprising taste palettes, a sublime wine choice, our extensive wine list with more than 460 wines and only the best seasonal produce available. Come enjoy at lunch or dinner and choose how far you want to be included in the culinary world of chef Joshua Jaring and his team. Our location is also suitable for weddings and offers a private dining.</p>

                <div class="restaurantDetails">
                    <div class="restaurantDetail">
                        <p class="font-weight-bold">Kitchen</p>
                        <p class="right">French, fish and seafood, European</p>
                    </div>


                    <p class="font-weight-bold">Stars</p>
                    <p class="right">French, fish and seafood, European</p>
                </div>
            </div>
        </article>
    </div>

<?php $this->end(); ?>