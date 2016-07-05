<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Excel Tutorials</title>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    </head>
    <body id="home">
        
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
      
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
            </nav>
       
            <main role="main">
                <h2>Print your Excel workbook in one page</h2>
                <p>There is a way for you to print your Excel workbook in one page.
                    You don’t have to adjust every single row or column to do it. With 
                    just a few clicks you can have all of your work in one page.
                </p>
                <ol>
                    <li>Open the workbook that you want to print.</li>
                    <li>To preview if your workbook fits in one page, click <strong>⌘+p</strong> this command is for printing.</li>
                    <li>If it in fact does not fit in one page, go to the page layout tab.</li>
                    <li>Then go to the scale to fit menu options.</li>
                    <li>Click on the width dropdown menu and select one page.</li>
                    <li>Repeat the <strong>⌘+p</strong> option to see if your work fits in one page.</li>
                    <li>If it doesn’t, change the orientation of the page.</li>
                    <li>In the same page layout tab click on orientation and select landscape.</li>
                    <li>Once more use the shortcut <strong>⌘+p</strong> to see if it now fits in one page.</li>
                </ol>
                <video src="/videolibrary/onePagePrint.m4v" alt="excel video" title="excel video tutorial" width="800" height="680" preload controls></video>
            </main>
            <aside role="complementary">
                <div>
                   <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/aside.php'; ?>
                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        
    </body>
</html>
