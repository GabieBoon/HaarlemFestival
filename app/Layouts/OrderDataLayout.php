<h1>Order - Data</h1>

<form action="">
    <label for="firstName"><b>First name*</b></label>
    <input type="text" placeholder="John" name="firstName" required>

    <label for="lastName"><b>Last name*</b></label>
    <input type="text" placeholder="Doe" name="lastName" required>

    <label for="email"><b>E-mail address*</b></label>
    <input type="email" placeholder="john.doe@gmail.com" name="email" required>

    <label for="remarks"><b>Remarks for restaurant</b></label>
    <input type="text" placeholder="Vegetarian, lactose intolerant, ..." name="remarks">

    <p>
        <b>*Required fields</b>
    </p>

    <button type="submit">Continue</button>
</form>

<a href="<?= PROOT ?>Tickets">Back</a>