<?php if ($this->_action != 'login') {$this->insert('CMS/Includes/Sidebar'); }?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/StyleSheets/Bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?= PROOT ?>Public/StyleSheets/Custom.css" media="screen" title="no title" charset="utf-8">

    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script> -->
    
    <!-- Scripts -->
    <script src="<?= PROOT ?>Public/JavaScripts/JQuery-3.3.1.slim.min.js"></script>
    <script src="<?= PROOT ?>Public/JavaScripts/Bootstrap.min.js"></script>

    <?= $this->content('head'); ?>

    <title><?= $this->getSiteTitle(); ?></title>
  </head>
  <body>

  <?= $this->content('sidebar');?>

  <?= $this->content('body'); ?>

  </body>
</html>