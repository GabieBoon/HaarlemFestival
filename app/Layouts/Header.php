<header class="<?= $this->class?>">
    <a href="<?= PROOT ?>">
        <img
             class="nav-logo <?php if($_SESSION['CurrentPage'] == 'Home'){echo 'hide';} ?>"
             src="<?= PROOT ?>public/images/HaarlemFestival-Logo-WT.svg"
             alt="Haarlem Festival Logo"
             href="<?= PROOT ?>Home/"
        />
    </a>
    <nav class="nav-wrapper">
        <ul class="nav-left">
            <li class="dance-btn nav-btn"><a href="<?= PROOT ?>Dance/" >Dance</a></li>
            <li class="jazz-btn nav-btn"><a href="<?= PROOT ?>Jazz/">Jazz</a></li>
            <li class="historic-btn nav-btn"><a href="<?= PROOT ?>Historic/">Historic</a></li>
            <li class="active food-btn nav-btn"><a href="<?= PROOT ?>Food/">Food</a></li>
        </ul>
        <ul class="nav-right">
            <li class="schedule-btn nav-btn"><a href="<?= PROOT ?>Schedule/">Schedule</a></li>
            <li class="cart-btn nav-btn"><a class="cart-icon" href="<?= PROOT ?>Ticket/"><i class="fas fa-shopping-cart"></i></a></li>

            <li class="nav-btn">
                <select class="language-selection">
                    <option value="nederlands">Nederlands</option>
                    <option value="engels">Engels</option>
                </select>
            </li>
        </ul>
    </nav>
</header>