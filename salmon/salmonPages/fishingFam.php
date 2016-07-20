<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Fishing with Fam</title>            
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
                <h1>Fishing with the Family</h1>
                <img src="/salmon/salmonSiteImages/kids_fishing.jpg">
                <h3>Suitable for:</h3>
                <p></p>
                <h3>Cost:</h3>
                <p></p>
                <h3>Gear:</h3>
                <p></p>
                <h3>Tour Length:</h3>
                <p></p>
                <h3>Skills required:</h3>
                <p></p>
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

