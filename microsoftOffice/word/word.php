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
                <h2>Three useful header keyboard shortcuts for Microsoft Word on a Mac.</h2>
                <p>These shortcuts are very handy when you are writing a lot of papers.
                   these tricks will center the text, make it bold, and increase the
                   size of the text to 16 points.</p>
                <ol>
                    <li>Double click on the header area.</li>
                    <li>Press the command key plus the letter E. example:<strong><image src="/siteImages/commandLogo.png" 
                        width="24" height="16" alt="command logo">+E</strong> this 
                        will center the text. If you repeat this step text returns 
                        to the left.</li>
                    <li>Then press <strong><image src="/siteImages/commandLogo.png" 
                        width="20" height="20" alt="command logo">+B</strong> to make the text bold.</li>
                    <li>And last, press <strong><image src="/siteImages/commandLogo.png" 
                        width="20" height="20" alt="command logo">+shift+></strong> this > is the right arrow, 
                        this will increase the font size, giving you a good title size 
                        font. It usually takes 2 right arrows to make a font 16 points.
                        Using the left < arrow decrease the size.</li>
                </ol>
                <video src="/videolibrary/wordHeaderShortcuts.m4v" width="800" height="680" preload controls></video>
            </main>
            <aside role="complementary">
                <div>
                    <p>Testing the aside in the word page</p>
                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
