<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>public/css/OrderCss.css" ><!-- Order CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<!-- <div class="background-image"> -->
    

<?php
$firstName = '';
$lastName = '';
$email = '';
$remarks = '';

if (isset($_SESSION['customerData'])) {
    $firstName = $_SESSION['customerData']['firstName'];
    $lastName = $_SESSION['customerData']['lastName'];
    $email = $_SESSION['customerData']['email'];
    $remarks = $_SESSION['customerData']['remarks'];
}


?>

<h1>Order - Data</h1>

<form method="post" action="<?= PROOT ?>order/confirm">
    <label for="firstName"><b>First name*</b></label>
    <input type="text" placeholder="John" name="firstName" value="<?= $firstName ?>" required>

    <label for="lastName"><b>Last name*</b></label>
    <input type="text" placeholder="Doe" name="lastName" value="<?= $lastName ?>" required>

    <label for="email"><b>E-mail address*</b></label>
    <input type="email" placeholder="john.doe@gmail.com" name="email" value="<?= $email ?>" required>

    <label for="remarks"><b>Remarks for restaurant</b></label>
    <textarea placeholder="Vegetarian, lactose intolerant, ..." name="remarks" cols="30" rows="10"><?= $remarks ?></textarea>

    <p>
        <b>*Required fields</b>
    </p>

    <button type="submit" class="btn btn-primary">Continue</button>
</form>
<a href="<?= PROOT ?>cart/" role="button" class="btn btn-primary">Back</a>
<!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->