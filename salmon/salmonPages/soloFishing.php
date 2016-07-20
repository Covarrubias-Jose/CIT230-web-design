<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Quiet Fishing</title>            
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
                <h1>Quiet Fishing</h1>
                <img src="/salmon/salmonSiteImages/single_person.jpg">
                <h3>Tour Guide</h3>
                <p><a href="/salmon/salmonPages/scott.php">Scott Rownd</a></p>
                <h3>Suitable for:</h3>
                <p>Single individuals, couples, or parties of no more than 3 people.</p>
                <h3>Cost:</h3>
                <p>$55 USD this package includes a fishing pole, and the permit.</p>
                <p>$20 USD for the permit, if you bring your equipment.</p>
                <h3>Gear:</h3>
                <ul>
                    <li>Fishing pole</li>
                    <li>Waders (recommended)</li>
                    <li>Hat, or cap</li>
                </ul>
                <h3>Tour Length:</h3>
                <p>The guided tour is for 3 hours, but you can stay up to 6 hours.</p>
                <h3>Skills required:</h3>
                <p>Skills are needed only if you don't want to go home empty hands</p>
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

