<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Salmon city Map</title>            
    </head>

    <body>
        <header>  
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/header.php'; ?>                                 
        </header>
        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/navigation.php'; ?>
        </nav>

        <!-- THIS PART IS THE ONLY ONE THAT CHANGES ON EACH PAGE FOR CONSISTENCY  -->
        <main id="salmonMap">
            <h2>Here is the map of the Salmon city</h2>
            <p>
                It is located in the state of Idaho. You can get directions here from your
                location.
            </p>
            <div>
               <iframe id="salmonMapFrame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31594.634623868536!2d-113.91600091252484!3d45.17922915280624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53582f0ac1c6b95f%3A0xf0e171459132c687!2sSalmon%2C+ID+83467!5e0!3m2!1sen!2sus!4v1468950817272" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

