<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Lodging</title>            
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
            <div>
                <h1>Lodging</h1>
                <img id="lodgePic"src="/salmon/salmonSiteImages/lodge.jpg">
                <h2>Stay with us</h2>
                <p>
                    Come visit our lodge and stay with us. Our cabin like hotel 
                    can enhance the experience. Built in 1983, this hotel has 
                    tradition and style. You won't forget the smell of pinewood 
                    and the nature as you stay with us.
                </p>
                <p>We Still do some things around here old school, so pleased 
                call us for reservations.
                </p>
                <p id="bold">1-800-salmons</p>
                <h2>Our rates include</h2>
                <ul>
                    <li>Free Wi-Fi</li>
                    <li>Breakfast</li>
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

