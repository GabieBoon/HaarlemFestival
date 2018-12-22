<main>




    <section>

    <!--<img src="/phpfiles/Haarlem-Festival BitBucket/haarlem-festival/phpproject1/images/Dance BW.jpg" alt="Background, dancing people in black and white">
    -->
    <section class="dancesection">

        <h2>About dance</h2>

        <p>
            For the first year the Haarlem Festival contains a dance event! With 5 out of the 6 DJ's being in the top 10 DJ's
            in the world, Haarlem Dance will be one giant party. Apart from standard formats Haarlem Dance will include back to back
            sessions in which multiple talented DJ's will play and mix together. There will also be a session named Tiëstoworld in which
            Tiësto will play songs spanning his entire career. This session will also include some suprise guests!
        </p>
    </section>

    <section class="dancesection">
        <h2>Artists</h2>
        <p>
            <?= $this->showArtists(); ?>
        </p>

    </section>

    <section class="dancesection">
        <h2>Locaties</h2>
        <p>
            <?= $this->showLocations(); ?>
        </p>

    </section>

    <section class="dancesection">
        <h2>Tickets</h2>

        <p>
        <form action="<?= PROOT ?>Cart/addTicket/1">
            <button type = "submit"> add ticket to cart</button>
        </form>

        <form action="<?= PROOT ?>Cart/addTicket/2">
            <button type = "submit"> add ticket to cart</button>
        </form>


        </p>

    </section>

    <section class="dancesection" id="schedule">
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

<span class="clearfix"></span>
</main>