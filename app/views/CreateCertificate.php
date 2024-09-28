<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/af63d23d76.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="/shop/app/assets/css/icon.css">
    <link rel="stylesheet" type="text/css" href="/shop/app/assets/css/table.css">
    <script src="shop/app/assets/js/main.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Doan Anh Quan Portfolio</title>
</head>


<body>
    <section id="contact-me">
        <div class="title">
            Let's add a new <strong style="color: #f75023"> "Certificate"</strong> that you just received!
        </div>
        <div id="contact-info">
            <form id="contact-me-form" method="POST" action="http://localhost/shop/Courses/Add">
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
                    <input type="text" placeholder="Your CourseName" name="CourseName" id="CourseName">
                    <input type="text" placeholder="Your Certificate" name="Certificate" id="Certificate">
                    <input type="submit" id="send-button" value="Add" onclick="validateForm()">
                </div>
            </form>
        </div>
    </section>
    <section>
        <table>
            <div class="title">
                These are the <strong style="color: #f75023"> "Certificates"</strong> that you have. Well Done!
            </div>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Certificate</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $courses = $input["courses"];
                foreach ($courses as $course) {
                    echo '                
                    <tr style="background-color: #dacfe6;">
                    <td data-label="Data 1" style="font-weight: bold;">' . $course["ID"] . '</td>
                    <td data-label="Data 2">' . $course["CourseName"] . '</td>
                    <td data-label="Data 3">' . $course["Certificate"] . '</td>
                    <td data-label="Data 4"><a href="http://localhost/shop/Courses/EditCourse/' . $course["ID"] . '">Edit</a></td>
                    <td data-label="Data 4"><a href="http://localhost/shop/Courses/DeleteCourse/' . $course["ID"] . '">Delete</a></td>
                </tr>';
                }
                ?>
            </tbody>
        </table>

    </section>
</body>

</html>