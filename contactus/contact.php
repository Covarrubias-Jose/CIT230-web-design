<?php session_start();?>
<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Contact Page</title>
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
                <h2>Contact Us</h2>
                
                <p>Please fill out this form.</p>
                <?php if(!empty($errors)){
                    echo '<ul class="notify">';
                    foreach($errors as $error){
                        echo "<li>$error</li>";
                    }
                    echo '</ul>';
                    unset($errors);
                }?>
                <p>All fields are required.</p>
                <form method="post" action="." id="contactform">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="name" size="40" value="<?php echo $name; ?>" required><br>
                    
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required><br>
                    
                    <label for="subject">Subject:</label><br>
                    <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required><br>
                    
                    <label for="message">Message:</label><br>
                    <textarea name="message" id="message" cols="50" rows="10" required><?php echo $message; ?></textarea><br>
                    
                    <label>&nbsp;</label>
                    <img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5"
                         alt="captcha image">(Type these characters into the text box below)<br>
                    <label for="cap_code">Security Code:</label><br>
                    <input id="cap_code" name="cap_code" type="text"size="6" required><br>
                    
                    <label for='action'>&nbsp;</label>
                    <input type='submit' name="action" id='action' value="Send"><br>
                </form>
            </main>
            <aside role="complementary">
                <div>
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/aside.php'; ?>
                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] .'/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
