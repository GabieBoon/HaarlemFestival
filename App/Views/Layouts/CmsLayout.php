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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

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