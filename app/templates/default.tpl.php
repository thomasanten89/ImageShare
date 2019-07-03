<?php if(!defined('INCLUDED')) exit('This file cannot be opened directly'); ?>

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $config['site_title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php echo $html->css('css/foundation.css'); ?>
    <?php echo $html->css('css/foundation.min.css'); ?>
    <?php echo $html->css('css/app.css'); ?>
  </head>
  <body>

    <!-- This is the content placeholder, pages will be included here -->
    <?php echo template_content(); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <?php echo $html->js('js/vendor/jquery.js'); ?>
    <?php echo $html->js('js/vendor/what-input.js'); ?>
    <?php echo $html->js('js/vendor/foundation.js'); ?>
    <?php echo $html->js('js/app.js'); ?>

  </body>
</html>
