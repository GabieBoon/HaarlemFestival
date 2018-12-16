<header id="test">

    <a href="<?= PROOT ?>">
        <img class="nav-logo <?php if($_SESSION['CurrentPage'] == 'Home'){echo 'hide';} ?>"   src="<?= PROOT ?>public/images/HaarlemFestival-Logo-WT.svg" alt="Haarlem Festival Logo" href="<?= PROOT ?>Home/" />
    </a>


    <nav class='nav-wrapper'>
        <ul class="nav-left">
            <li class="dance-button"><a href="<?= PROOT ?>Dance/" >Dance</a></li>
            <li class="jazz-button"><a href="<?= PROOT ?>Jazz/">Jazz</a></li>
            <li class="historic-button"><a href="<?= PROOT ?>Historic/">Historic</a></li>
            <li class="food-button"><a href="<?= PROOT ?>Food/">Food</a></li>
        </ul>
        <ul class="nav-right">
            <li class="schedule-button"><a href="<?= PROOT ?>Schedule/">Schedule</a></li>
            <li class="cart-button"><a href="<?= PROOT ?>Tickets/">Cart</a></li>
            <li>
                <select class="language-selection">
                    <option value="nederlands"><img src="/haarlem-festival/public/images/languages/nederlands.png"></option>
                    <option value="engels">Engels</option>
                </select>
            </li>
        </ul>
    </nav>
</header>