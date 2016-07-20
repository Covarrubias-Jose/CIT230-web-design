<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Kayaking</title>            
    </head>

    <body>
        <header>  
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/header.php'; ?>                                 
        </header>
        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/navigation.php'; ?>
        </nav>

        <!-- THIS PART IS THE ONLY ONE THAT CHANGES ON EACH PAGE FOR CONSISTENCY  -->
        <main>
            <div class="adventures">
                <h1>Kayaking</h1>
                <img src="/salmon/salmonSiteImages/kayak.jpg">
                <h3>Tour Guide</h3>
                <p><a href="/salmon/salmonPages/jenny.php">Jenny Willis</a></p>
                <h3>Suitable for:</h3>
                <p>People 10 years and older.</p>
                <h3>Cost:</h3>
                <p>$80 USD if you rent everything here.</p>
                <p>$40 USD if you bring your own equipment.</p>
                <h3>Gear:</h3>
                <ul>
                    <li>Kayak</li>
                    <li>helmet</li>
                    <li>Life saver vest</li>
                </ul>
                <h3>Tour Length:</h3>
                <p>The tour is about 4 hours. Transportation is provided to return to station</p>
                <h3>Skills required:</h3>
                <ul>
                    <li>Swimming</li>
                    <li>Paddle</li>
                </ul>
            </div>
        </main>


        <aside>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/aside.php'; ?>
        </aside>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/footer.php'; ?>
        </footer>
    </body>
</html>

