<header id="test">
    <img class="nav-logo <?php if($_SESSION['CurrentPage'] == 'Home'){echo 'hide';} ?>"   src="<?= PROOT ?>images/HaarlemFestival-Logo-WT.png" alt="Haarlem Festival Logo" href="<?= PROOT ?>Home/" />



    <nav class='nav-wrapper'>
        <ul class="nav-left">
            <li><a href="<?= PROOT ?>Dance/">Dance</a></li>
            <li><a href="<?= PROOT ?>Jazz/">Jazz</a></li>
            <li><a href="<?= PROOT ?>Historic/">Historic</a></li>
            <li><a href="<?= PROOT ?>Food/">Food</a></li>
        </ul>
        <ul class="nav-right">
            <li><a href="<?= PROOT ?>Schedule/">Schedule</a></li>
            <li><a href="<?= PROOT ?>Cart/">Cart</a></li>
            <li>
                <select>
                    <option value="nederlands">Nederlands</option>
                    <option value="engels">Engels</option>
                </select>
            </li>
        </ul>
    </nav>
</header>