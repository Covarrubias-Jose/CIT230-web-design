<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Site Plan with css</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body id="home">

        <header role="banner">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>
        <nav role="navigation">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
        </nav>
        <main role="main">
            <p>working on it</p>
        </main>
        <aside role="complementary">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/aside.php'; ?>   
            </div>
        </aside>
        <footer role="contentinfo">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

        </footer>

    </body>
</html>
