<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
   <head>
       <title>Home Page</title>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
   </head>
  <body id="home">
    
        <header role="banner">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
       </header>
      
        <nav role="navigation">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
        </nav>
     
       <main role="main">
           <h2>This is now the home page or main page</h2>
           <p>Now days we can learn just about anything online, specially on You Tube, if
               you don’t know how to do something, just search for it on You Tube and most 
               likely that you will find a video teaching or showing how to do it. On this 
               website you can find tutorials on how to do many things, for now it will be 
               on things that I have done myself, so I can record videos and show others
               how to do things, for example; working with Excel, PowerPoint, Android, 
               IMac, Windows 10, few car repairs and other stuff. The website will be a 
               compilation of tutorials that others may find useful. Videos will be 
               uploaded periodically to cover more topics of visitor’s interests. </p>
       </main>
       <aside role="complementary">
           <div>
                 
           </div>
       </aside>
        
       <footer role="contentinfo">
           <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
       </footer>
    
  </body>
</html>
