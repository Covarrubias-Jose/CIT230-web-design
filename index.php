<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
   <head>
      <meta charset="UTF-8">
      <title>Home | covsite.com</title>
      <meta name="autor" content="Jose Covarrubias">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  <body id="home">
    <div>
        <header role="banner">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
       </header>
      
       <nav role="navigation">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
       </nav>
       <main role="main">
           <p>This is now the home page or main page</p>
           <br>
           <audio controls preload="none">
               <source src="audiolibrary/CIT230audio.mp3">
               <p>This audio was recorded with Mac audio recorder and is not formated</p>
           </audio>
           <br>
           <audio controls preload="none">
               <source src="audiolibrary/YoucanAudio.mp3">
               <p>This audio file is recorded with Audacity</p>
           </audio>
       </main>
       <aside role="complementary">
           <div>
                 
           </div>
       </aside>
        
       <footer role="contentinfo">
           <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
       </footer>
    </div>
  </body>
</html>
