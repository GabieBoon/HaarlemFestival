<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" ><!-- Historic CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image">
    <section>
        <h1 id="titel">Day trip to Haarlem center and surroundings</h1>
        <p id="para1">
            Do you want to know more about the history of the
            city? Or did you come to Haarlem to shop
            extensively? Your boredom is simply not an option
            here, wander through this historic city full of
            monuments, squares and parks. Discover how the
            masterpieces of French Neck look up close. Walk
            along the boutiques in the Golden streets. Step
            inside the imposing Grote or St. Bavokerk and
            admire its organ that Mozart once played.
            <br />
            <img src="<?= PROOT ?>public/images/Historic/bavokerk-haarlem.jpg" alt="test">
        </p>

        <h1 id="titel">Walking through Haarlem</h1>
        <p id="para2">
            Be surprised during a walk along
            unique spots in the Haarlem city center.
            From hidden courtyards to large churches.
            An experienced city guide wil tell
            you  the hottest and most interesting
            facts worth knowing about this beautiful city.
            <br />
            <img src="<?= PROOT ?>public/images/Historic/fotogracht.jpg" alt="test">
        </p>

    </section>


    <!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->