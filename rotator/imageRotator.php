<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>A JavaScript Carousel</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        
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
    <body id="home">
        <div>
            <header role="banner" id="page-header">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
            </nav>
            <main role="main">
                    <h1>Image Gallery Rotator</h1>
                    <p>The gallery appears below and should rotate every 5 seconds except when the mouse hovers over the image when the JavaScript has been implemented.</p>
                    <figure><img src="/rotator/canyonpix/blooms.jpg" id="mainImage" alt="Cacti in bloom in the Grand Canyon">
                      <figcaption id="mainImageCaption">Cacti in bloom in the Grand Canyon</figcaption>
                    </figure>
            </main>
            <aside role="complementary">
                <div>

                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
        
        <!-- Put the script element here -->
        <script src="/rotator/rotator.js"></script>
    </body>
</html>
