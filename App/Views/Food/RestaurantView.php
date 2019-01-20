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

                <img class="restaurantImage" src="<?= PROOT . $this->restaurantDetails->imagePath?>" alt="Haarlem Festival Logo" href="<?= PROOT ?>Home/"/>

                <?php if ($_SESSION["Language"] === "NL") {echo $this->restaurantDetails->restaurantDescriptionNL;} elseif($_SESSION["Language"] === "EN"){echo $this->restaurantDetails->restaurantDescriptionEN;};?>
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
                        <h3 class="right">€ 10.00</h3>
                    </div>
                    <div class="price">
                        <h3 class="left">Total price (13+):</h3>
                        <h3 class="right blue"> *</h3>
                        <h3 class="right">€ <?= number_format($this->restaurantDetails->price, 2);?></h3>
                    </div>
                    <div class="price">
                        <h3 class="left">Total price for childeren:</h3>
                        <h3 class="right blue">‏*</h3>
                        <h3 class="right">€ <?= number_format($this->restaurantDetails->price12, 2);?></h3>
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

                                <div class="number" onchange="showPrice(this.value)">
                                    <?= $this->ContentModel->PopupInfoPeople->text?>
                                    <input class="People" type="text">
                                </div>
                                <div class="number" onchange="showPrice(this.value)">
                                    <?= $this->ContentModel->PopupInfoChilderen->text?>
                                    <input class="Children" type="text">
                                </div>
                                <div class="input ">
                                    <?= $this->ContentModel->PopupInfoDay->text?>
                                    <select class="Day">
                                        <option value="" disabled selected>Make your choice...</option>
                                        <option value="26">Day 1</option>
                                        <option value="27">Day 2</option>
                                        <option value="28">Day 3</option>
                                        <option value="29">Day 4</option>
                                    </select>
                                </div>
                                <div class="input ">
                                    <?= $this->ContentModel->PopupInfoSession->text?>
                                    <select class="Session">
                                        <option value="" disabled selected>Make your choice...</option>
                                        <option value="1">Session 1</option>
                                        <option value="2">Session 2</option>
                                        <option value="3">Session 3</option>
                                    </select>
                                </div>

                                <p class="font-italic allergiesInfo"><?= $this->ContentModel->PopupInfoExtra->text?></p>

                                <div class="totalPrice">
                                    <h2 class="price">0.00</h2>
                                    <h2>Total price €</h2>
                                </div>

                                <div class="buttons">
                                    <button class="cancelBTN reservationButton">Cancel</button>
                                    <button class="OrderBTN reservationButton">Order</button>
                                </div>

                                <div id="ErrorMessage"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

<?php $this->end(); ?>