<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Format video on Mac</title>
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
            <h2>Format Video on Mac</h2>
            <p>
                In this video I will show you how easy is to format video on your Mac.
                You don't need to download new software, or program. One of the reasons
                you would want to format a video is to make it compatible with other 
                devices, and specially if you want to use the video on a website. Mac can
                record the screen of you computer, but the format (QuickTime) is not the 
                best one for websites, if you upload the video in that format to a 
                website, mobile devices will play it without audio. 
            </p>
            <video src="/videolibrary/formating_video.m4v" preload controls></video>
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
