<?php //head ?>
<?php $this->start('head'); ?>

    <!-- Dance CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>public/css/Dancecss.css" >

<?= $this->getBgImage(); ?>

    <!-- jQuery scripts -->
    <script src="<?= PROOT ?>public/javascripts/jQueryDance.js"></script>
    <script src="<?= PROOT ?>public/javascripts/jQuerySchedule.js"></script>

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

<main class="background-image">

    <section>


        <section class="DanceSection">

            <h2>About dance</h2>

            <p>
                For the first year the Haarlem Festival contains a dance event! With 5 out of the 6 DJ's being in the top 10 DJ's
                in the world, Haarlem Dance will be one giant party. Apart from standard formats Haarlem Dance will include back to back
                sessions in which multiple talented DJ's will play and mix together. There will also be a session named Tiëstoworld in which
                Tiësto will play songs spanning his entire career. This session will also include some suprise guests!
            </p>
        </section>

        <section class="DanceSection">
            <h2>Artists</h2>
            <p>
                <?= DanceViewFunctions::showArtists($this->danceArtists); ?>
            </p>

        </section>

        <section class="DanceSection">
            <h2>Locaties</h2>
            <p>
                <?= DanceViewFunctions::showLocations($this->danceLocations); ?>
            </p>

        </section>

        <section class="DanceSection">
            <h2>Tickets</h2>

            <p>
                Check prices for individual concerts in the timetable below. For the real party-people there are also All-Access-Tickets available!
            </p>

            <?= DanceViewFunctions::showAllAccessTickets($this->allAccessTickets) ?>

        </section>

        <section class="DanceSection" id="schedule">
            <h2>Schedule</h2>

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