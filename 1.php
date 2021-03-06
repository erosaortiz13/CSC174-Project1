<?php
$customCSS="";
$customNav="";
include "inc/html-top.php";
?>
<body>

<header>
    <?php include "inc/nav.php"; ?>
</header>

<div class="container">

    <main>
        <div class="split name">
            <section>
                <h2>Joshua Choi</h2>
                <ul>
                    <li>University of Rochester, 2022</li>
                    <li>Computer Science</li>
                    <li>Digital Media Studies</li>
                </ul>
            </section>

            <section class="image">
                <img src="images/josh.jpg" alt="Joshua Choi">
                <h2 class="text">Choi Joshua</h2>
            </section>
        </div>

        <section>
            <h2>About Me</h2>
            <p>My name is Joshua Choi and I'm a junior at the University of Rochester double majoring in computer science and digital media studies. I'm from Closter, New Jersey, which isn't known for anything special besides being right next to New York City. I'm a very visually-oriented person and enjoy doing digital art and photography in my free time. I also grew up playing music and can play the clarinet, saxophone, and the cello.</p>
        </section>

        <article>
            <h2 class="title">Digital Art</h2>
            <p>I have over 6 years of experience with digital art and graphic design and am proficient using Illustrator, Photoshop, and Adobe XD. Check out some of my stuff here: <a class="link" href="https://joshuachoi.herokuapp.com/" target="_blank">My Work</a></p>
        </article>

        <article>
            <h2 class="title">Photography</h2>
            <p>During my free time I enjoy going out and taking pictures. I shoot on a NikonD5600 and like taking portraits in particular. I like using Photoshop to edit the picture I take. Check out some of my stuff here: <a class="link" href="https://www.instagram.com/choi._.create/" target="_blank">Instagram</a></p>
        </article>

        <article>
            <h2 class="title">SASE</h2>
            <p>I am the Publicity Chair of the University of Rochester Society of Asian Scientists and Engineers. As the Publicity Chair, I am responsible for all of UR SASE’s advertisements, promotions, etc., both digital and physical, as well as marketing techniques and the promotion of SASE branding. I manage SASE’s social media sites such as Instagram and Facebook and create flyers for different events to put around campus. I also design and create banners for the events that I post on UR SASE’s Facebook page.</p>
        </article>
    </main>
    <footer>
        <p>Taken from <a href="http://csc174.org/lab01/jchoi84/" target="_blank">csc174.org/lab01/jchoi84</a></p>
        <p>CSC 174: Advanced Front-end Web Design and Development</p>
    </footer>
</div>

<?php include "inc/scripts.php"; ?>
</body>
</html>