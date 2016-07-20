<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Jenny Willis and Totos</title>            
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
            <div class="guideBoi">
                <h2>Jenny Willis and Totos</h2>
                <img src="/salmon/salmonSiteImages/girl-and-dog-guide.jpg">
                <h3>Credentials</h3>
                    <ul>
                        <li>CPR certified</li>
                        <li>Member of the Western States Kayaking Association</li>
                        <li>Kayak middle class certified</li>
                    </ul>
                <h3>Years of Experience</h3>
                <p>She has work with us for over 5 years, and she has participated in 
                several tournaments</p>
                <h3>Biography</h3>
                <p>She's from Arizona, but loves the weather of Idaho, she moved to Salmon 
                   after college, and she's now practicing part-time as veterinarian 
                   here in the city, when she's not kayaking</p>
                <h3>Have a question for her?</h3>
                <p>jennyW@salmonriver.com</p>
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

