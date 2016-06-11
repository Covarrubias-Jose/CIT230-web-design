<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    </head>
    <body id="home">
        <div>
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>
            </nav>
            <main role="main">
                <form method="post" action="." id="contactform">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="name" size="40"><br
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" size="50"><br>
                    <label for="subject">Subject></label><br>
                    <input type="text" name="subject" id="subject" size="50"><br>
                    <label for="message">Message:</label><br>
                    <textarea name="message" id="message" cols="50" rows="10"></textarea><br>
                    
                </form>
            </main>
            <aside role="complementary">
                <div>

                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
