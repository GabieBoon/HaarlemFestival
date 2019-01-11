<div class="restaurant-item">
    <!-- <img src="<?= PROOT ?>public/images/languages/nederlands.png" alt="test"> -->
    <img src="<?= PROOT . $restaurant->imagePath;?>" alt = "afbeelding">
    <p> <?= $restaurant->name ?> </p>
    <p> <?= $restaurant->bio?> </p>
    <p> <?= $restaurant->foodTypecol?> </p>
    <p>Stars: <?php for ($i=0; $i<$restaurant->stars; $i++){ print "⋆"; } ?></p>
    <a href="<?= PROOT ?>food/<?= $restaurant->name ?>"> <h5>view restaurant</h5> </a>
</div>