<?php session_start();?>

<!DOCTYPE html>
<!--
    ******* TEMPLATE FOR THE SALMON SITE.*******
This is the file for the final assignment of CIT 230, July 2016.
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>

        <title>Contact Us</title>            
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
            <div>
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
                    <input type="text" name="name" id="name" size="50" value="<?php echo $name; ?>" required><br>
                    
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required><br>
                    
                    <label for="subject">Subject:</label><br>
                    <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required><br>
                    
                    <label for="message">Message:</label><br>
                    <textarea name="message" id="message" cols="48" rows="10" required><?php echo $message; ?></textarea><br>
                    
                    
                    <label>&nbsp;</label><br>
                    <img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5"
                         alt="captcha image"><br>
                    <label>(Type these characters into the text box below)</label><br>
                    
                    <label for="cap_code">Security Code:</label><br>
                    <input id="cap_code" name="cap_code" type="text"size="6" required><br>
                    
                    <label for='action'>&nbsp;</label>
                    <input type='submit' name="action" id='action' value="Send"><br>
                </form>
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

