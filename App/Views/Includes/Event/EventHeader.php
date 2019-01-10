
<?php $this->start('head'); ?>
<!-- Header CSS -->
     <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/DefaultHeaderCss.php" >
<?php $this->end(); ?>

<?php $this->start('header'); ?>
<header class="<?= $this->_className?>">
    <a href="<?= PROOT ?>">
        <img
             class="nav-logo" src="<?= PROOT ?>public/images/HaarlemFestival-Logo-WT.svg" alt="Haarlem Festival Logo" href="<?= PROOT ?>Home/"/>
    </a>
    <nav class="nav-wrapper">
        <ul class="nav-left">
            <li class="<?php if($this->_className == 'Dance'){echo 'activeDance';} ?> dance-btn nav-btn"><a href="<?= PROOT ?>dance/" >Dance</a></li>
            <li class="<?php if($this->_className == 'Jazz'){echo 'activeJazz';} ?> jazz-btn nav-btn"><a href="<?= PROOT ?>jazz/">Jazz</a></li>
            <li class="<?php if($this->_className == 'Historic'){echo 'activeHistoric';} ?> historic-btn nav-btn"><a href="<?= PROOT ?>historic/">Historic</a></li>
            <li class="<?php if($this->_className == 'Food'){echo 'activeFood';} ?> food-btn nav-btn"><a href="<?= PROOT ?>food/">Food</a></li>
        </ul>
        <ul class="nav-right">
            <li class="<?php if($this->_className == 'Schedule'){echo 'activeSchedule';} ?> schedule-btn nav-btn"><a href="<?= PROOT ?>schedule/">Schedule</a></li>
            <li class="<?php if($this->_className == ('Cart' || 'Order')){echo 'activeTicket';} ?> cart-btn nav-btn"><a class="cart-icon" href="<?= PROOT ?>cart/"><i class="fas fa-shopping-cart"></i></a></li>

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
