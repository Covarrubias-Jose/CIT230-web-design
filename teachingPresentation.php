<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Teaching Presentation</title>
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
            <h2>Teaching Presentation Lesson 7 Images</h2>
            <iframe src='https://onedrive.live.com/embed?cid=A72013ED638B9FBE&resid=A72013ED638B9FBE%212945&authkey=AOCRZooKzoFEAKs&em=2&wdAr=1.7777777777777777' width='962px' height='565px' frameborder='0'>This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a> presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>
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
