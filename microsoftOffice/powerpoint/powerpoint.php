<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>PowerPoint Tutorials</title>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    </head>
    <body id="home">
        <div>
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] .'/modules/header.php'; ?>
            </header>
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
            </nav>
            <main role="main">
                <h2>Remove the Background of an Image with PowerPoint.</h2>
                <p>
                    PowerPoint is without a doubt a powerful tool when it comes to creating 
                    presentations. One of my favorite tools is the option to remove the 
                    background of an image. This gives me the ability to create my own art
                    to add to other presentation. On this video I will show you how this 
                    tool works.
                </p>
                <video src="/videolibrary/removeBackground.m4v" preload controls></video>
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
