<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Drew Nicholson</title>            
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
                <h2>Drew Nicholson</h2>
                <img src="/salmon/salmonSiteImages/rafting-guide.jpg">
                <h3>Credentials</h3>
                <ul>
                    <li>Professional rafter</li>
                    <li>Member of the United States Rafting Association <a href="http://www.usaraftassociation.com/" target="_blank">(USRA)</a></li>
                </ul>
                <h3>Years of Experience</h3>
                <p>3 years with us, and 4 years in a professional raft team. </p>
                <h3>Biography</h3>
                <p>Drew Nicholson, born in LA always had an eye for extreme sports. His passion
                   for the adventure lead him to join a rafting team 10 years ago, where 
                   he obtained several achievements, including a championship on the US 
                   rafting tournament in 2013</p>
                <h3>Have a question for him?</h3>
                <p>drewN@salmonriver.com</p>
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

