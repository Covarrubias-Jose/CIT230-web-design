<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Rafting</title>            
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
                <h1>Rafting</h1>
                <img src="/salmon/salmonSiteImages/white-water-rafting-fam.jpg">
                <h3>tour Guide</h3>
                <a href="/salmon/salmonPages/drew.php">Drew Nicholson</a>
                <h3>Suitable for:</h3>
                <p>We advise this activity for people older than 10 years. It requires
                   a lot of strength, and awareness,</p>
                <h3>Cost:</h3>
                <p>$80 USD per person per 2 hours, this includes gear rental</p>
                <p>$55 USD if you have your gear</p>
                <h3>Gear:</h3>
                <ul>
                    <li>Helmet</li>
                    <li>Life saver vest</li>
                </ul>
                <h3>Tour Length:</h3>
                <p>The tour takes about 2 hours. transportation is provided to return 
                   to the station.</p>
                <h3>Skills required:</h3>
                <ul>
                    <li>Rowing</li>
                    <li>Swimming</li>
                </ul>
        </main>


        <aside>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/aside.php'; ?>
        </aside>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/footer.php'; ?>
        </footer>
    </body>
</html>

