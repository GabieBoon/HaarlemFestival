
<?php $this->start('head'); ?>
<!-- Header CSS -->
     <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>public/css/headercss.php" >
<?php $this->end(); ?>

<?php $this->start('header'); ?>
<header class="<?= $this->_className?>">
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
            <li class="<?php if($_SESSION['CurrentPage'] == 'Dance'){echo 'active';} ?> dance-btn nav-btn"><a href="<?= PROOT ?>Dance/" >Dance</a></li>
            <li class="<?php if($_SESSION['CurrentPage'] == 'Jazz'){echo 'active';} ?> jazz-btn nav-btn"><a href="<?= PROOT ?>Jazz/">Jazz</a></li>
            <li class="<?php if($_SESSION['CurrentPage'] == 'Historic'){echo 'active';} ?> historic-btn nav-btn"><a href="<?= PROOT ?>Historic/">Historic</a></li>
            <li class="<?php if($_SESSION['CurrentPage'] == 'Food'){echo 'active';} ?> food-btn nav-btn"><a href="<?= PROOT ?>Food/">Food</a></li>
        </ul>
        <ul class="nav-right">
            <li class="<?php if($_SESSION['CurrentPage'] == 'Schedule'){echo 'active';} ?> schedule-btn nav-btn"><a href="<?= PROOT ?>Schedule/">Schedule</a></li>
            <li class="<?php if($_SESSION['CurrentPage'] == 'Ticket'){echo 'active';} ?> cart-btn nav-btn"><a class="cart-icon" href="<?= PROOT ?>Ticket/"><i class="fas fa-shopping-cart"></i></a></li>

            <li class="nav-btn">
                <select class="language-selection">
                    <option value="nederlands">Nederlands</option>
                    <option value="engels">Engels</option>
                </select>
            </li>
        </ul>
    </nav>
</header>
<?php $this->end(); ?>
