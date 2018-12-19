<h1>Order - Confirmation</h1>

<!--<pre>--><?php //var_dump($_POST); ?><!--</pre>-->

<h2>Order details</h2>

<h3>Personal information</h3>
<ul>
    <li>
        <span><b>First name:</b></span>
        <p><?= $_POST['firstName'] ?></p>
    </li>
    <li>
        <span><b>Last name:</b></span>
        <p><?= $_POST['lastName'] ?></p>
    </li>
    <li>
        <span><b>E-mail address:</b></span>
        <p><?= $_POST['email'] ?></p>
    </li>
    <li>
        <span><b>Remarks:</b></span>
        <p><?= $_POST['remarks'] ?></p>
    </li>
</ul>

<h3>Tickets</h3>
<ul>
<!--    <pre>--><?php //var_dump($_SESSION['Cart']); ?><!--</pre>-->
    <?php

    $this->printTickets();

    ?>
</ul>