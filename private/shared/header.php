<?php
  // require_once('../private/initialize.php');
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="<?php echo $font_sheet1 ?>" rel="stylesheet">
    <link href="<?php echo $font_sheet2 ?>" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?php echo $css_sheet ?>" >
  </head>
  <body>
    <main>
      <!-- *********************** BANNER AND OPTIONS   ******************** -->
      <nav class="banner">
        <ul>
          <li><a href="<?php echo url_for("about_me.php") ?>" >About Me</a></li>
          <li><a href="<?php echo url_for("music.php") ?>">Music</a></li>
          <li><a href="<?php echo url_for("photos.php") ?>">Photos</a></li>
          <li><a href="<?php echo url_for("travels.php") ?>">Travels</a></li>
          <li><a href="<?php echo url_for("books.php") ?>">Books Read</a></li>
      </nav>
  <!-- <body> -->
