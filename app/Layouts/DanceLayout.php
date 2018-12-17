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

    <section>
        <h2>Locaties</h2>
        <p>
            <?= $this->showLocations(); ?>

        </p>

    </section>

    <section class="dancesection">
        <h2>Tickets</h2>

        <p>
        <form action="<?= PROOT ?>Winkelwagen/addTicket/1">
            <button type = "submit"> add ticket to cart</button>
        </form>

        <form action="<?= PROOT ?>Winkelwagen/addTicket/2">
            <button type = "submit"> add ticket to cart</button>
        </form>


        </p>

    </section>

    <section id="schedule">
        <h2>Schedule</h2>

        <table>
            <?=$this->generateTable(10,18, "Dance") ?>

        </table>

    </section>

<span class="clearfix"></span>
</main>