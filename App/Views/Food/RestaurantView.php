<?php

// converts '<Name>, <Address>, <City>' to a URI for Google Maps
function encodeURIComponent($str) {
    $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
    return strtr(rawurlencode($str), $revert);
}

?>
<?php $this->start('head'); ?>
    <!-- Food CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/FoodCss.php" >
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/RestaurantCss.css" >

<?= $this->getBgImage(); ?>

    <script src="<?= PROOT ?>Public/JavaScripts/JQueryFood.js"></script>

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

    <div class="background-image">
        <article class="food-content-box">
            <div class="food-content">
                <div class="breadcrumb-nav">
                    <p><a href="<?= PROOT ?>Home/">Home</a> > <a href="<?= PROOT ?>Food">Food</a> > <?= $this->restaurantDetails->name; ?></p>
                </div>

                <h1><?= $this->restaurantDetails->name; ?></h1>

                <img class="restaurantImage" src="<?= PROOT ?>public/images/RestaurantBanners/ml.png" alt="Haarlem Festival Logo" href="<?= PROOT ?>Home/"/>

                <p>The successful restaurant by chef Joshua Jaring is – just like ratatouille – a mix of French cuisine in the reality of today with excellent value for money in an accessible environment. So we started in 2013 in de lange veerstraat and so we go after moving in also by 2015 on our unique monumental location on the Spaarne. Michelin named our restaurant at the presentation of our first star in 2014 an example to the new generation of chefs and restaurants: less stiff, less expensive, and more accessible. It comes to what's on the Board. Find out for yourself: from experience menus to our exclusive a la carte dishes. Everything to perfection made with surprising taste palettes, a sublime wine choice, our extensive wine list with more than 460 wines and only the best seasonal produce available. Come enjoy at lunch or dinner and choose how far you want to be included in the culinary world of chef Joshua Jaring and his team. Our location is also suitable for weddings and offers a private dining.</p>
<!--                <p>--><?//= $this->restaurantDetails->restaurantDescription;?><!--</p>-->
                <div class="wrapper">
                    <div class="form-row">
                        <p class="font-weight-bold" >Kitchen</p>
                        <p><?= $this->restaurantDetails->foodTypecol; ?></p>
                    </div>
                    <div class="form-row">
                        <p class="font-weight-bold">Stars</p>
                        <p><?= $this->restaurantDetails->stars; ?> stars</p>
                    </div>
                    <div class="form-row">
                        <div>
                            <p class="font-weight-bold">Address</p>
                            <p class="child-2"><?= $this->restaurantDetails->street;?> <?= $this->restaurantDetails->houseNr; ?>, <?= $this->restaurantDetails->postalCode; ?> Haarlem, Nederland</p>
                        </div>
                        <iframe src="https://www.google.com/maps?&amp;q=<?= encodeURIComponent($this->restaurantDetails->name . ', ' . $this->restaurantDetails->street . ' ' . $this->restaurantDetails->houseNr .', Haarlem') ?>&amp;output=embed"\
                                frameborder="0" style="border:1px solid black;"   allowfullscreen></iframe>
                    </div>
                </div>

                <div class="priceoverview">
                    <div class="price">
                        <h3 class="left">Reservation fees:</h3>
                        <h3 class="right"> </h3>
                        <h3 class="right">€ 10,00</h3>
                    </div>
                    <div class="price">
                        <h3 class="left">Total price (13+):</h3>
                        <h3 class="right blue"> *</h3>
                        <h3 class="right">€ <?= ($this->restaurantDetails->price);?></h3>
                    </div>
                    <div class="price">
                        <h3 class="left">Total price for childeren:</h3>
                        <h3 class="right blue">‏*</h3>
                        <h3 class="right">€ <?= $this->restaurantDetails->price12;?></h3>
                    </div>
                    <p class="steruitleg"><?= $this->ContentModel->PricingInfo->text?></p>
                </div>

                <div class="buttonwrapper">
                    <button class="reservationButton">Make your reservation</button>
                </div>

                <div class="Overlay" style="display: none">
                    <div class="OverlayBackground" >
                        <div class="OverlayForeground" >
                            <div class="popupContent">
                                <h1>Session: <?= $this->restaurantDetails->name; ?></h1>
                                <div class="number">
                                    <p>Number of people</p>
                                    <input type="text">
                                </div>
                                <div class="number">
                                    <p>Number of childeren (12-)</p>
                                    <input type="text">
                                </div>
                                <div class="input">
                                    <p>Select a day</p>
                                    <select>
                                        <option value="" disabled selected>Make your choice...</option>
                                        <option value="1">Day 1</option>
                                        <option value="2">Day 2</option>
                                        <option value="3">Day 3</option>
                                        <option value="4">Day 4</option>
                                    </select>
                                </div>
                                <div class="input">
                                    <p>Select a session</p>
                                    <select>
                                        <option value="" disabled selected>Make your choice...</option>
                                        <option value="1">Session 1</option>
                                        <option value="2">Session 2</option>
                                        <option value="3">Session 3</option>
                                        <option value="4">Session 4</option>
                                    </select>
                                </div>

                                <p class="font-italic allergiesInfo">Allergens can be reported in the checkout process.</p>

                                <div class="totalPrice">
                                    <h2>0.00</h2>
                                    <h2>Total price €</h2>
                                </div>

                                <div class="buttons">
                                    <button class="cancelBTN reservationButton">Cancel</button>
                                    <button class="OrderBTN reservationButton">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

<?php $this->end(); ?>