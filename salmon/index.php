<!DOCTYPE html>
<!--
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/head.php'; ?>
        
            <title>Salmon River | covsite.com</title>            
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
        <h1>Salmon River Adventures</h1>
        <p>Welcome to Salmon River Adventures tours and camp grounds.</p>
        <p>We provide a number of services that can enhance the outdoor experience 
            while visiting Salmon River. The variety of our tours can accommodate 
            your needs; whether you are solo, a group, or a family there are different
            options for you to plan the next nature adventure.
        </p>
        <p>Please select from the options below.</p>
        <figure>
            <figcaption>Kayaking</figcaption>
            <a href="/salmon/salmonPages/kayaking.php"><img src="/salmon/salmonSiteImages/kayak.jpg"></a>
        </figure>
        <figure>
            <figcaption>Fishing with the family</figcaption>
            <a href="/salmon/salmonPages/fishingFam.php"><img src="/salmon/salmonSiteImages/kids_fishing.jpg"></a>
        </figure>
        <figure>
            <figcaption>Rafting</figcaption>
            <a href="/salmon/salmonPages/rafting.php"><img src="/salmon/salmonSiteImages/white-water-rafting-fam.jpg"></a>
        </figure>
        <figure>
            <figcaption>Quiet fishing</figcaption>
            <a href="/salmon/salmonPages/soloFishing.php"><img src="/salmon/salmonSiteImages/single_person.jpg"></a>
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
