 <?php $this->start('head'); ?>
 <!-- Footer CSS -->
  <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>public/css/footer.css" >
<?php $this->end(); ?>

<?php $this->start('footer'); ?>
 <footer>

        <div class="row">
            <div class="column">
                    <ul class="social-media">
                        <ol><a href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i> facebook</a></ol>
                        <ol><a href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i> twitter</a></ol>
                        <ol><a href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i> instagram</a></ol>

                    </ul>
            </div>
            <div class="column">
                <a href="<?= PROOT ?>Home/" ><img class="foot-logo" src="<?= PROOT ?>public/images/HaarlemFestival-Logo-WT.svg" alt="Haarlem Festival Logo" /></a>
            </div>
            <div class="column contactinfo">
                <div class="contactinfo-box">
                   <p>Contact us at:</p>
                   <p>0800-1234</p>
                  <p><a href="mailto:info.haarlemfestival@gmail.com">info.haarlemfestival@gmail.com</a></p>
                </div>
                <br> <br> <br> <br>
                <nav>
                    <ul class="CMS-buttons">
                        <li><a href="<?= PROOT ?>cms/login">Management login</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </footer>


    </body>
</html>
<?php $this->end(); ?>
