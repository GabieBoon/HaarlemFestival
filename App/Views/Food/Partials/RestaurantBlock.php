<div class="restaurant-item">
    <!-- <img src="<?= PROOT ?>public/images/languages/nederlands.png" alt="test"> -->
    <img src="<?= PROOT . $restaurant->imagePath;?>" alt = "afbeelding">
    <p> <?= $restaurant->name ?> </p>
    <p> <?= $restaurant->bio?> </p>
    <p> <?= $restaurant->foodTypecol?> </p>
    <p>Stars: <?php for ($i=0; $i<$restaurant->stars; $i++){ print "<i class='fas fa-star' style=\"color:#CB6C0E;\"></i>"; } ?></p>
    <a href="<?= PROOT ?>food/restaurant/<?= $restaurant->id ?>"> <h5>view restaurant</h5> </a>
</div>