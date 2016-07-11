<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Site Plan with css</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body id="home">

        <header role="banner">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>
        <nav role="navigation">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
        </nav>
        <main role="main" class="sitePlanCSS">
            <h1>Site Plan</h1>
            <h2 id="description">Site Description</h2>
                    <p>
                        Now days we can learn just about anything online, specially on You
                        Tube, if you don’t know how to do something, just search for it 
                        on You Tube and most likely that you will find a video teaching 
                        or showing how to do it. On this website you can find tutorials
                        on how to do many things, for now it will be on things that I 
                        have done myself, so I can record videos and show others how to
                        do things, for example; working with Excel, PowerPoint, Android,
                        IMac, Windows 10, few car repairs and other stuff. The website 
                        will be a compilation of tutorials that others may find useful. 
                        Videos will be uploaded periodically to cover more topics of 
                        visitor’s interests.
                    </p>
                <h3>Site Name</h3>
                <p>YoucanIcan.com</p>
                <h3>Site Purpose</h3>
                <p>YoucanIcan.com is a site offering video tutorials</p>
                <h3>Site Audience</h3>
                    <ul>
                        <li>Age: people ranging from 16 to 80, but they can be 
                            any age older than 16, usually looking for instructions
                            on how to do certain things (since the website is
                            tutorial oriented) like; learn functions from Excel,
                            PowerPoint, auto repairs, electrical installations
                            at home, and more.</li>
                        <li>Gender: the site will target both male and female; 
                            a male trying to save some money from a car repair 
                            that he feels he can do and avoid expensive dealership 
                            costs; a female, maybe a single mom that needs to 
                            get a ceiling fan installed, or a light bulb installed. </li>
                        <li>Economic Status: limited budget, or for those
                            trying to save money, but not necessarily low income person.</li>
                        <li>Language: English as main language.</li>
                        <li>Geographic Location: mostly the USA, because the
                            tutorials will apply to things that are popular in
                            the population, cars and material that Americans
                            have access to, and are most likely to have at home.</li>
                        <li>Devices: laptops, tablets, and smart phones, using
                            the most popular browsers; Chrome, Firefox, Safari,
                            and Edge (Explorer).</li>
                        <li>Like and Dislike: some users may like the fact 
                            that the tutorial was easy to follow and relevant
                            to them, others might dislike the site if they don’t
                            find the tutorial they need.</li>
                    </ul>
                    <h3>Personas</h3>
                    <h4>Name: Louis Montirelli.</h4>
                    <ul>
                        <li>Group: Banker.</li>
                        <li><img src="plandemo/images/banker.jpg" alt="A picture of a banker"></li>
                        <li>Job title: Bank branch manager, provides services to 
                            new and existing customers, provides answers to 
                            customers about their bank accounts. Oversees tellers
                            and resolves issues that tellers can’t solve.</li>
                        <li>Demographics: 37 years old male, married, 2 kids,
                            bachelors’ degree on business management.</li>
                        <li>Goals and tasks: He works Mon-Fri, on the weekends
                            he likes to do things for his home, likes DIY
                            (do it yourself) projects, he learns quick and all
                            he needs is a little of information to start and
                            finish a project at home.</li>
                        <li>Technical: He uses a desktop at work, he’s      
                            comfortable and confident navigating the web,
                            at home he mostly uses his tablet while in the garage
                            to see some tutorials on things that he can do for
                            home improvement. </li>
                        <li>Quote: That’s too expensive, I can do it myself!</li>
                    </ul>
                    <h4>Name: Laura O'Connor</h4> 
                    <ul>
                        <li>Group: Stay home mom.</li>
                        <li><img src="plandemo/images/grace_tn.jpg" alt="A picture of Laura O'Connor"></li>
                        <li>Job title: Homemaker, keeps the family budget,
                            manages all utilities accounts, oversees home repair
                            and improvement expenses.</li>
                        <li>Demographics: 32 years old woman, married, 3 kids,
                            bachelors’ degree on family studies.</li>
                        <li>Goals and tasks: Her husband works 6 days per week,
                            on the weekend they try to spent the most time with
                            the kids. She wants to learn how to do things around
                            the house to not take time away from family time on
                            the weekends.</li>
                        <li>Technical: She knows how to perform searches online,
                            she uses an iPad, and her smart phone to find
                            information on the web.</li>
                        <li>Quote: If I can do it, my husband can spend more time with us.</li>
                    </ul>
                    <h3>Scenarios</h3>
                    <ol>
                        <li>Does the site have tutorials of things that I like?</li>
                        <li>I want to do some improvements to my house, I hope I can learn something here.</li>
                        <li>Can I request information on something I’m interested in?</li>
                        <li>What are the topics of their tutorials?</li>
                        <li>I like the tutorial I just watched, can I share it?</li>
                        <li>I hope that they can tell me where to find the things they used for the tutorial.</li>
                        <li>Can I contribute with my ideas to this site?</li>
                        <li>The constructor guy wanted too much money for such a small job, I think I can do it myself with these instructions.</li>
                        <li>I need some ideas for some DIY projects.</li>
                        <li>You Tube always has these irrelevant related videos.</li>
                    </ol>

                    <h2 id="architecture">Content Architecture</h2>

                    <h3>Content List</h3>
                    <dl>
                        <dt>Does the site have tutorial of things that I like?</dt>
                        <dd>
                            <ul>
                                <li>The site is on its beginnings and the content might be limited for now.</li>
                                <li>More content of different topics will be added periodically.</li>
                            </ul>
                        </dd>
                        <dt>I want to do some improvements to my house, I hope I can learn something here.</dt>
                        <dd>
                            <ul>
                                <li>The simple tutorials will give you a better idea how to do things on your own.</li>
                                <li>Watching the videos, you will be able to understand how things work.</li>
                            </ul>
                        </dd>
                        <dt>Can I request information on something I’m interested in?</dt>
                        <dd>
                            <ul>
                                <li>Yes, there will be a space for requests.</li>
                                <li>The user will be able to request tutorials on something he or she is interested in</li>
                                <li>The user will be asked to provide his email address to be notified if the tutorial requested becomes available.</li>
                            </ul>
                        </dd>
                        <dt>What are the topics of their tutorials?</dt>
                        <dd>
                            <ul>
                                <li>MS Excel.</li>
                                <li>MS Word.</li>
                                <li>Auto repair and maintenance.</li>
                                <li>Home electrical fixtures.</li>
                            </ul>
                        </dd>
                        <dt>I like the tutorial I just watched, can I share it?</dt>
                        <dd>
                            <ul>
                                <li>Yes, the content will be available to be shared among social media sites.</li>
                            </ul>
                        </dd>
                        <dt>I hope that they can tell me where to find the things they used for the tutorial.</dt>
                        <dd>
                            <ul>
                                <li>If our tutorial requires some special tool or material, we will provide links to the sources for you.</li>
                            </ul>
                        </dd>
                        <dt>Can I contribute with my ideas to this site?</dt>
                        <dd>
                            <ul>
                                <li>Yes, you can contribute to the site by submitting a video in an area designated for that.</li>
                                <li>You will send us the video and we will decide if it is appropriate to be posted on the site.</li>
                                <li>You will be acknowledged and mentioned as the contributor.</li>
                            </ul>
                        </dd>
                        <dt>The constructor guy wanted too much money for such a small job, I think I can do it myself with these instructions.</dt>
                        <dd>
                            <ul>
                                <li>You can save money by doing things on your own.</li>
                                <li>Our tutorials will help you do things on your own.</li>
                            </ul>
                        </dd>
                        <dt>I need some ideas for some DIY projects.</dt>
                        <dd>
                            <ul>
                                <li>You will find tutorials on things to do for your home and garden.</li>
                                <li>We hope to provide useful ideas in our tutorials.</li>
                            </ul>
                        </dd>
                        <dt>You Tube always has these irrelevant related videos.</dt>
                        <dd>
                            <ul>
                                <li>There will not be advertisement embedded in our videos.</li>
                                <li>Our site will have dedicated videos.</li>
                            </ul>
                        </dd>
                    </dl>
                    <h3>Site Map</h3>
                    <figure>
                        <img id="PCview" src="plandemo/images/sitemap.cit230.png" alt="The site map for YouCanIcan.com">
                        <figcaption>The site map shows how the site's structure.</figcaption>
                    </figure>
                    
                    <h2 id="guide">Style Guide</h2>
                    <h3>Color Scheme</h3>
                       <p>These are the color samples that the Website will have.</p>
                     <table class="color">
                        <tbody>
                            <tr>
                                <td style="background-color: #968731">#968731<br>(Body background)</td>
                                <td style="background-color: #968002">#968002<br>(Nav anchor color)</td>
                                <td style="background-color: #B7B777">#B7B777<br>(Main background)</td>
                                <td>#000000<br>(Default font color)</td>
                                <td style="background-color: #C4A300">#C4A300<br>(Heading colors)</td>
                                <td style="background-color: #958C61">#958C61<br>(Nav and Footer)</td>
                            </tr>
                        </tbody>
                        
                    </table>
                    <h3>Typography</h3>
                        <p></p>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Text locations</th>
                                    <th>Font type</th>
                                    <th>Font weight</th>
                                    <th>Font substituter</th>
                                </tr>
                                <tr>
                                   <td>Title of the site</td>
                                   <td>Orbitron</td>
                                   <td> bold, weight 700</td>
                                   <td>sand-serif</td>
                                </tr>
                                <tr>
                                    <td>h1 headings</td>
                                    <td>Comfortaa</td>
                                    <td> bold, weight 700</td>
                                    <td>sand-serif</td>
                                </tr>
                            </tbody>
                        </table>
                    <h3>Navigation</h3>
                    <p>The site navigation design will be consistent with the "D" form,
                        meaning that the logo of the site will be on the top left corner
                        of the site, any text that will accompanying the logo will be black 
                        (#0F0A01), then the logo will be followed by a horizontal line of
                        options to let the user select from menu, and about us, then below 
                        the menu a second line of options that will have, most recent, 
                        most viewed, and the search box. The left side of the site will 
                        have links to stores or places where we found the material used 
                        in any of the tutorials, then the right side will have photos and
                        video links to the most recent videos.the main body will be 
                        displaying a video to introduce people with our content.
                    </p>
                    <h3>Responsive Sketches</h3>
                    <figure>
                        <figcaption>Navigation map PC view.</figcaption>
                        <img id="PCview" src='plandemo/images/PCview.png' alt='picture of the navigation map'>
                    </figure>
                    <figure>
                        <figcaption>Navigation map Phone view.</figcaption>
                        <img id="pnView"src='plandemo/images/PhoneView.png' alt='picture of the navigation map'>
                    </figure>
                    
        </main>
        <aside role="complementary">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/aside.php'; ?>   
            </div>
        </aside>
        <footer role="contentinfo">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

        </footer>

    </body>
</html>
