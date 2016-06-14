<!DOCTYPE html>
<html lang="en">
<head>
<title>A JavaScript Carousel</title>
    <meta name="description" content="Building a JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jose covarrubias/ instructor">
<style>
  figure{
    max-width: 1000px;
    max-height: 235px;
    margin: 2em;
  }
  figure > img{
    max-width: 100%;
  }
</style>
</head>
<body>
  <header role="banner" id="page-header">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        <h1>Image Gallery Rotator</h1>
  </header>
  <nav role="navigation" id="page-nav">
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
<!-- No navigation elements in this file -->
</nav>
  <main role="main">
    <p>The gallery appears below and should rotate every 5 seconds except when the mouse hovers over the image when the JavaScript has been implemented.</p>
    <figure><img src="canyonpix/blooms.jpg" id="mainImage" alt="Cacti in bloom in the Grand Canyon">
      <figcaption id="mainImageCaption">Cacti in bloom in the Grand Canyon</figcaption>
    </figure>
    </main>
  <footer role="contentinfo" id="page-footer">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</footer>
<!-- Put the script element here -->

<script src="rotator.js"></script>
</body>
</html>
