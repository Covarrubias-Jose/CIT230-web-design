<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Tour Guides</title>            
    </head>

    <body>
        <header>  
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/header.php'; ?>                                 
        </header>
        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/navigation.php'; ?>
        </nav>

        <!-- THIS PART IS THE ONLY ONE THAT CHANGES ON EACH PAGE FOR CONSISTENCY  -->
        <main class="guidesIntro">
            <!--<div class="guidesIntro">-->
                <h2>Meet our tour guides</h2>
                <p>The best guide you can get around here!</p>
                <p>Click on any of the tour guides to view their profile and credentials.</p>
                <article>
                    <h3>Jenny Willis and Totos</h3>
                    <a href="/salmon/salmonPages/jenny.php"><img src="/salmon/salmonSiteImages/girl-and-dog-guide.jpg"></a>
                </article>
                <article>
                    <h3>Scott Rownd</h3>
                    <a href="/salmon/salmonPages/scott.php"><img src="/salmon/salmonSiteImages/older-guide.JPG"></a>
                </article>
                <article>
                    <h3>Drew Nicholson</h3>
                    <a href="/salmon/salmonPages/drew.php"><img src="/salmon/salmonSiteImages/rafting-guide.jpg"></a>
                </article>
            <!--</div>-->
        </main>


        <aside>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/aside.php'; ?>
        </aside>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/footer.php'; ?>
        </footer>
    </body>
</html>

