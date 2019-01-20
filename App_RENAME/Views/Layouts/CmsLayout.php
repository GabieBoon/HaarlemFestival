<?php if ($this->_action != 'login') {$this->insert('CMS/Includes/Sidebar'); }?>
<!DOCTYPE html>
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
    <!-- Scripts -->
    <script src="<?= PROOT ?>Public/Vendor/jQuery/jQuery.min.js"></script>
    <script src="<?= PROOT ?>Public/Vendor/Fitty/fitty.min.js"></script>
  


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/Vendor/Bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="<?= PROOT ?>Public/Vendor/Bootstrap/js/Bootstrap.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/Vendor/Fontawesome/css/all.min.css" > 
    
    <!-- HighChart -->
    <script src="<?= PROOT ?>Public/Vendor/Highcharts/code/highcharts.js"></script>
    <script src="<?= PROOT ?>Public/Vendor/Highcharts/code/modules/exporting.js"></script>
    <script src="<?= PROOT ?>Public/Vendor/Highcharts/code/modules/export-data.js"></script>


    <script src="<?= PROOT ?>Public/JavaScriptS/jQueryCms.js"></script>
    

    <?= $this->content('head'); ?>

    <title><?= $this->getSiteTitle(); ?></title>
  </head>
  <body>

  <?= $this->content('sidebar');?>

  <?= $this->content('body'); ?>

  </body>
</html>