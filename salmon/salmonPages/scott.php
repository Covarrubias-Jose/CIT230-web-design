<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Scott Rownd</title>            
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
                <h2>Scott Rownd</h2>
                <img src="/salmon/salmonSiteImages/older-guide.JPG">
                <h3>Credentials</h3>
                <ul>
                    <li>2006, 2008 champion of the Outdoor Salmon Tournament</li>
                    <li>Pro fisher for more than 20 years</li>
                    <li>Idaho Fishing Association Certified</li>
                </ul>
                <h3>Years of Experience</h3>
                <p>More than 30 years fishing salmon</p>
                <h3>Biography</h3>
                <p>Scott Rownds was born here in Salmon city. He loves the area for various reasons.
                   He grew up here and the are several memories that link him to the Salmon river.
                   He has raised his family here also and pass down generation's tricks about the 
                   salmon fishing, that makes him a well certified guide. </p>
                <h3>Have a question for him?</h3>
                <p>scottR@salmonriver.com</p>
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

