<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>About Us</title>
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
                <div>
                <h2>Who we are.</h2>
                
                <p>Our motivation to create this site is the idea that we could have a place for learning.
                   Not only for learning, but also free from irrelevant information, or videos that make no sense,
                   because if we are watching a tutorial about car repairs, we don't need a food related video as the
                   next video to play. We welcome you to a site where the information will be focused on the topic that
                   you select, nothing else. Our site is new, but as user visit, request more topics, and submit their
                   own videos, or databank will expand, and the possibilities that you will find what you need will grow.
                   We thank you for visiting us, and contribute for a place of dedicated people that love to help each other.
                </p>
                </div>
                <p>This audio was recorded with Mac audio recorder and is not formated</p>
                <audio controls preload="none">
                <source src="audiolibrary/CIT230audio.mp3">
                </audio>
                <p>This audio file is recorded with Audacity</p>
                <audio controls preload="none">
                <source src="audiolibrary/YoucanAudio.mp3">
                </audio>
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
