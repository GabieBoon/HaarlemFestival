<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    
    <!-- other CSS -->
    <link rel="stylesheet" href="<?= PROOT ?>Public/css/custom.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>public/css/StyleSheet.css" >
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="<?= PROOT ?>public/javascripts/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= PROOT ?>public/javascripts/bootstrap.min.js"></script>
    
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