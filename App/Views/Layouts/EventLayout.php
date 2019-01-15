    <?php $this->insert('Includes/Event/EventHeader'); ?>
    <?php $this->insert('Includes/Event/EventFooter'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php
    // These comments are in php so they'll be serverside.
    // The 3rd party vendor libraries can be found in Public/Vendor.
    // Versions are kept in '_versions.txt'.
    ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/Vendor/Bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="<?= PROOT ?>Public/Vendor/Bootstrap/js/Bootstrap.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/Vendor/Fontawesome/css/all.min.css" > 
    
    <!-- Scripts -->
    <script src="<?= PROOT ?>Public/Vendor/jQuery/jQuery.min.js"></script>
        
    <!-- other CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/StyleSheet.css" >
    
    
    <!-- start Import -->
    <?= $this->content('head'); ?>
    <!-- end Import -->
    <title><?= $this->getSiteTitle(); ?></title>
  </head>
  <body>

    <?= $this->content('header'); ?>   
    <?= $this->content('body'); ?>
    <?= $this->content('footer'); ?>

  </body>
</html>