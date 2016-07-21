<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/head.php'; ?>
        
            <title>Weather</title>            
    </head>
    
    <body>
<header>  
    <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/header.php'; ?>                                 
</header>
<nav>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/navigation.php'; ?>
</nav>
        
            <!-- THIS PART IS THE ONLY ONE THAT CHANGES ON EACH PAGE FOR CONSISTENCY  -->
            <main>
            <div>
                <h1>Salmon, Idaho.</h1>
                <figure>
                    <iframe src="http://www.accuweather.com/en/us/salmon-id/83467/current-weather/332624"></iframe>
                </figure>
            </div>
            </main>
        
        
<aside>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/aside.php'; ?>
</aside>
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/footer.php'; ?>
</footer>
</body>
</html>

