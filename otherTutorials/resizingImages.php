<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Other Tutorials</title>
        <meta name="autor" content="Jose Covarrubias">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="home">
        <div>
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <nav role="navigation">

            </nav>
            <main role="main">
                <p>Place for other tutorials.</p><br>
                
                <p>In this tutorial we will show you how to resize an image using<br>
                   the application Preview on a Mac computer.
                </p>
                <video src="/videolibrary/resizingImages.mp4" controls </video>
            </main>
            <aside role="complementary">
                <div>

                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
