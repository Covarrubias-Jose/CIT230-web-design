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
                <h3>Tour Guide</h3>
                <p>Here personnel at the station provide general instructions, then
                   we let you experience nature on your own.</p>
                <h3>Suitable for:</h3>
                <p>Anyone older than 3 years old.</p>
                <h3>Cost:</h3>
                <p>$25 for permit and fishing pole.</p>
                <p>$10 for the permit only</p>
                <h3>Gear:</h3>
                <ul>
                    <li>Fishing pole</li>
                    <li>Bucket</li>
                    <li>Hat, or cap</li>
                </ul>
                <h3>Tour Length:</h3>
                <p>the permit is good for one day.</p>
                <h3>Skills required:</h3>
                <p>No skills needed, you will learn here.</p>
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

