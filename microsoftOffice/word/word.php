<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Word tutorials</title>
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
                <h3>Three useful header keyboard shortcuts for Microsoft Word on a Mac.</h3>
                <p>These shortcuts are very handy when you are writing a lot of papers.
                   these tricks will center the text, make it bold, and increase the
                   size of the text to 16 points.</p>
                <ol>
                    <li>Double click on the header area.</li>
                    <li>Press the command key plus the letter E. example: ⌘+E this 
                        will center the text. If you repeat this step text return 
                        to the left</li>
                    <li>Then press ⌘+B to make the text bold.</li>
                    <li>And last, press ⌘+shift+> this > is the right arrow, 
                        this will increase the font size, giving you a good title size 
                        font. It usually takes 2 right arrows to make a font 16 points.
                        Using the left < arrow decrease the size.</li>
                </ol>
                <video src="/videolibrary/wordHeaderShortcuts.m4v" width="660" height="580" preload controls></video>
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
