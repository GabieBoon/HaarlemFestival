<?php $this->insert('Historic/Includes/HistoricSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" ><!-- Historic CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image">
    <?= $this->content('hissubnav'); ?>
    <section class="Home1">
        <article>
        <h1 class="titel1">Day trip to Haarlem center and surroundings</h1>
        <p class="para1">
            Do you want to know more about the history of the
            city? Or did you come to Haarlem to shop
            extensively? Your boredom is simply not an option
            here, wander through this historic city full of
            monuments, squares and parks. Discover how the
            masterpieces of French Neck look up close. Walk
            along the boutiques in the Golden streets. Step
            inside the imposing Grote or St. Bavokerk and
            admire its organ that Mozart once played.
        </p>
        <br/>
        <br/>

        </article>
        <img class="img1" src="<?= PROOT ?>public/images/Historic/bavokerk-haarlem.jpg" alt="test">

        <span class="clearfix">

        </span>
        <article>
        <h1 class="titel2">Walking through Haarlem</h1>
        <br/>
        <br/>
        <p class="para2">

            Be surprised during a walk along
            unique spots in the Haarlem city center.
            From hidden courtyards to large churches.
            Together in a group with people who love doing the same thing,
            an experienced city guide wil tell
            you the hottest and most interesting
            facts worth knowing about this beautiful city.
            In the end you will feel like you know the city and its people.
            <br />
        </p>

        </article>
        <img class="img2" src="<?= PROOT ?>public/images/Historic/fotogracht.jpg" alt="test">
        <span class="clearfix">

        </span>

    </section>


    <!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->