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
    <div>
        <header role="banner">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
       </header>
      
       <nav role="navigation">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
       </nav>
       <main role="main">
           <h2>This is now the home page or main page</h2>
           <p>testing no deletion</p>

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
