<div>
    <p>All-Access ticket: <?=$startDate[2]?> tot <?=$endDate[2]?>  €<?=$ticket->price?>
        <form action="<?= PROOT ?>Cart/addTicket/<?=$ticket->id?>">
            <button class="AllAccessButton" type = "submit"> add ticket to cart</button>
        </form>
    </p>
</div>