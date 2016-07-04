<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Resizing Images</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body id="home">
        <div>
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
            </nav>
            <main role="main">
                <p>This video was recorded with QuickTime on a Mac, and it is not formated yet.</p>
                <video src="/videolibrary/resizingImages.mp4" width="800" height="680" preload controls></video>
            </main>
            <aside role="complementary">
                <div>
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/aside.php'; ?>
                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
