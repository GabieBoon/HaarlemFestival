<?php //head ?>
<?php $this->start('head'); ?>

    <!-- Dance CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/DanceCss.css" >

<?= $this->getBgImage(); ?>

    <!-- jQuery scripts -->
    <script src="<?= PROOT ?>Public/JavaScripts/JQueryDance.js"></script>
    <script src="<?= PROOT ?>Public/JavaScripts/JQuerySchedule.js"></script>

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

<main class="background-image">

    <section>


        <section class="DanceSection">

            <h2><?= $this->content->About->title ?></h2>

            <p>

                <?= $this->content->About->text ?>
            </p>
        </section>

        <section class="DanceSection">
            <h2><?= $this->content->Artists->title ?></h2>
            <p>
                <?= DanceViewFunctions::showArtists($this->danceArtists); ?>
            </p>

        </section>

        <section class="DanceSection">
            <h2><?= $this->content->Locations->title ?></h2>
            <p>
                <?= DanceViewFunctions::showLocations($this->danceLocations); ?>
            </p>

        </section>

        <section class="DanceSection">
            <h2><?= $this->content->Tickets->title ?></h2>

            <p>
                <?= $this->content->Tickets->text ?>
            </p>

            <?= DanceViewFunctions::showAllAccessTickets($this->allAccessTickets) ?>

        </section>

        <section class="DanceSection" id="schedule">
            <h2><?= $this->content->Timetable->title ?></h2>

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-27-tab" data-toggle="tab" href="#nav-27" role="tab" aria-controls="nav-27" aria-selected="true">27</a>
                    <a class="nav-item nav-link" id="nav-28-tab" data-toggle="tab" href="#nav-28" role="tab" aria-controls="nav-28" aria-selected="false">28</a>
                    <a class="nav-item nav-link" id="nav-29-tab" data-toggle="tab" href="#nav-29" role="tab" aria-controls="nav-29" aria-selected="false">29</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab">

                    <table>
                        <?=$this->table->generateTable(27,10,27, "Dance", true, false, $this->danceLocations, $this->danceTickets) ?>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab">

                    <table>
                        <?=$this->table->generateTable(28,10,27, "Dance", true, false, $this->danceLocations, $this->danceTickets) ?>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-29" role="tabpanel" aria-labelledby="nav-29-tab">

                    <table>
                        <?=$this->table->generateTable(29,10,27, "Dance", true, false, $this->danceLocations, $this->danceTickets) ?>
                    </table>

                </div>
            </div>

        </section>

        <div class="Overlay" style="display: none">
            <div class="OverlayBackground" ></div>

            <div class="OverlayForeground" >
                <p> overlay tekst</p>
            </div>

        </div>


        <span class="clearfix"></span>
</main>

<?php $this->end(); ?>