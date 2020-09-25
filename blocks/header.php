<!DOCTYPE HTML>
<html lang="en">
<head>

  <title><?php print $dataCurrentPage['title']; ?></title> 

  <meta  charset="utf-8">
  <meta name="description" content="<?php print $dataCurrentPage['description']; ?>">
  <meta name="keywords" content="<?php print $dataCurrentPage['keywords']; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if(isset( $dataCurrentPage['head']) && $dataCurrentPage['head'] ) : ?>
    <?php print $dataCurrentPage['head']; ?>
  <?php endif; ?>

  <!-- Styles -->
  <link href="/css/style.css" rel="stylesheet"  media="screen">

</head>
<body class="<?php print $dataCurrentPage['body_class']; ?>">
