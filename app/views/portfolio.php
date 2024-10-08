<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/af63d23d76.js" crossorigin="anonymous"></script>
    <script src="app/assets/js/main.js"></script>
    <link rel="stylesheet" href="app/assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Doan Anh Quan Portfolio</title>
</head>

<body>
    <div id="fixed-nav">

        <section id="navigation-bar">
            <div class="top-nav">
                <a href="#hero" class="nav-item" onclick="activeNavButton('Home')">Home</a>
                <a href="#about-me" class="nav-item" onclick="activeNavButton('About')">About</a>
                <a href="#my-projects" class="nav-item" onclick="activeNavButton('Project')">Project</a>
                <a href="#skill-update" class="nav-item" onclick="activeNavButton('Skills')">Skills</a>
                <a href="#contact-me" class="nav-item" onclick="activeNavButton('Contact')">Contact</a>
                <a href="Courses/CreateCertificateForm" class="nav-item" onclick="activeNavButton('Contact')">Add Certificate</a>
                <a href="#" class="nav-item downloadCV" onclick="activeNavButton('Download')">Download CV</a>
                <i class="fa-solid fa-bars mobile-menu" onclick="dropDownMenu()"></i>
            </div>
        </section>
    </div>

    <section id="hero">
        <div id="hero-image">
            <img src="https://cdn.shopify.com/s/files/1/0586/2614/6502/files/Profile-Mau.png?v=1718783453" alt="">
        </div>
        <div id="hero-content">
            <div id="hero-hello-text">
                Hello, I'm
            </div>
            <div id="hero-full-name">
                Quan "Legion" Doan
            </div>
            <div id="hero-role">
                Backend Developer (May be mobile Developer. Can't decide it yet!)
            </div>
            <div class="primary-button">
                <a href="#">About Me</a>
            </div>
            <div class="social-media-icon-holder">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    </section>

    <section id="process">
        <div id="process-wrapper">
            <?php

            $courses = $input["courses"];

            foreach ($courses as $course) {
                echo '
                <div class="process-item">
                <div class="icon-holder">
                    <i class="fa-solid fa-crosshairs"></i>
                </div>
                <div class="process-item-title">
                    ' . $course["CourseName"] . '
                </div>
                <div class="process-item-content">

                    ' . $course["Certificate"] . '
                </div>
            </div>';
            }
            ?>
        </div>
        </div>
    </section>

    <section id="about-me">
        <img id="about-me-image" src="https://cdn.shopify.com/s/files/1/0586/2614/6502/files/Frame_7231.png?v=1718786861"
            alt="" srcset="">
        <div id="about-me-right">

            <div id="about-me-text-section">
                <div class="subtitle">
                    I'm a Developer
                </div>
                <div class="title">
                    I can develop anything <br> you want
                </div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et augue in enim scelerisque lacinia in
                    eget sem. In hac habitasse platea dictumst. Sed vehicula ornare arcu, sed rutrum leo varius nec. Donec
                    et leo tincidunt, dictum neque id, facilisis turpis. Mauris eu euismod libero. Integer scelerisque porta
                    vehicula. Nullam accumsan velit non erat congue, a egestas augue dapibus. Nam sed lorem turpis. Mauris
                    venenatis pellentesque odio eu aliquet. Sed pellentesque lorem quis ante fermentum, non ultricies diam
                    varius. Aenean felis ligula, luctus in accumsan a, blandit et ex. Sed eget aliquet nulla, imperdiet
                    efficitur dui. Pellentesque et convallis quam, semper feugiat ex. Mauris ut turpis vestibulum, pharetra
                    justo auctor, euismod arcu. In vitae scelerisque metus, in placerat nulla. Etiam egestas quam ut neque
                    lobortis iaculis.
                </div>

            </div>
        </div>
    </section>

    <section id="my-projects">
        <div id="my-projects-wrapper">
            <div class="subtitle">
                Projects
            </div>
            <div class="title">
                My Amazing Works
            </div>
            <div class="content">
                Aenean feugiat, dui non rhoncus volutpat, mi leo consequat massa, eu tempor arcu dolor sed urna.
            </div>
        </div>
        <div id="my-project-items-wrapper">
            <div class="my-project-item">
                <div class="project-image">
                    <img src="img/IMG_0411-removebg-preview.png" alt="">
                </div>
                <div class="project-text-wrapper">
                    <div class="project-title">
                        Quandoan21
                    </div>
                    <div class="project-description">
                        lorem lsjdlaslkdjasdkla
                    </div>
                </div>
            </div>
            <div class="my-project-item">
                <div class="project-image">
                    <img src="img/IMG_0411-removebg-preview.png" alt="">
                </div>
                <div class="project-text-wrapper">
                    <div class="project-title">
                        Quandoan21
                    </div>
                    <div class="project-description">
                        lorem lsjdlaslkdjasdkla
                    </div>
                </div>
            </div>
            <div class="my-project-item">
                <div class="project-image">
                    <img src="img/IMG_0411-removebg-preview.png" alt="">
                </div>
                <div class="project-text-wrapper">
                    <div class="project-title">
                        Quandoan21
                    </div>
                    <div class="project-description">
                        lorem lsjdlaslkdjasdkla
                    </div>
                </div>
            </div>
            <div class="my-project-item">
                <div class="project-image">
                    <img src="img/IMG_0411-removebg-preview.png" alt="">
                </div>
                <div class="project-text-wrapper">
                    <div class="project-title">
                        Quandoan21
                    </div>
                    <div class="project-description">
                        lorem lsjdlaslkdjasdkla
                    </div>
                </div>
            </div>
            <div class="my-project-item">
                <div class="project-image">
                    <img src="img/IMG_0411-removebg-preview.png" alt="">
                </div>
                <div class="project-text-wrapper">
                    <div class="project-title">
                        Quandoan21
                    </div>
                    <div class="project-description">
                        lorem lsjdlaslkdjasdkla
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skill-update">
        <div class="text-wrapper">
            <div class="subtitle">
                Code is Life
            </div>
            <div class="title">
                I learned something new <br>everyday to keep me up to date
            </div>
        </div>
        <div class="code-skills-wrapper">
            <div class="code-skill">
                C
            </div>
            <div class="code-skill">
                Springboot
            </div>
            <div class="code-skill">
                Kotlin
            </div>
            <div class="code-skill">
                Javascript
            </div>
            <div class="code-skill">
                CSS
            </div>
            <div class="code-skill">
                HTML
            </div>
            <div class="code-skill">
                Java
            </div>
        </div>
    </section>

    <section id="contact-me">
        <div class="subtitle">
            Want to hire me ?
        </div>
        <div class="title">
            Let's do something <strong style="color: #f75023"> "Cool"</strong> together!
        </div>
        <div id="contact-info">
            <div class="contact-info-wrapper">
                <div class="contact-info-item">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-me-text-wrapper">
                        <div class="contact-info-title">
                            Address
                        </div>
                        <div class="contact-info-text">
                            21, somewhere in the world
                        </div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon-wrapper">

                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-me-text-wrapper">

                        <div class="contact-info-title">
                            Address
                        </div>
                        <div class="contact-info-text">
                            21, somewhere in the world
                        </div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon-wrapper">

                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-me-text-wrapper">

                        <div class="contact-info-title">
                            Address
                        </div>
                        <div class="contact-info-text">
                            21, somewhere in the world
                        </div>
                    </div>
                </div>
            </div>
            <form id="contact-me-form" action="#skill-update" onsubmit="return false;">
                <div id="form-error">
                    <div id="form-error-heading">
                        Please make sure that your form input value satisfy these conditions:
                    </div>
                    <ul>
                        <li class="error-item" id="name-error">Your Name mustn't be empty</li>
                        <li class="error-item" id="email-error">Your Email mustn't be empty and must have correct format: text + "@" + domain + "." + end point</li>
                        <li class="error-item" id="phone-error">Your Phone mustn't be empty</li>
                        <li class="error-item" id="subject-error">Your Email Subject mustn't be empty</li>
                    </ul>
                </div>
                <div id="contact-me-input-fields">
                    <input type="text" placeholder="Your Name" name="" id="name">
                    <input type="email" placeholder="Your Email" name="" id="email">
                    <input type="number" placeholder="Your Phone" name="" id="phone">
                    <input type="text" placeholder="Subject" name="" id="subject">
                    <textarea placeholder="Write your message here"></textarea>
                    <input type="submit" id="send-button" value="Send" onclick="validateForm()">
                </div>
            </form>
        </div>


    </section>

    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0964842979943!2d105.77972714020916!3d21.02882508785606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd376479b%3A0xbc2e0bb9db373ed2!2zOGEgVMO0biBUaOG6pXQgVGh1eeG6v3QsIE3hu7kgxJDDrG5oLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSAxMDAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1718855620434!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="footer">
        <div id="footer-content">
            <div id="develop-by">
                Develop by Quan "Legion" Doan @2024
            </div>
        </div>
    </section>

</body>

</html>