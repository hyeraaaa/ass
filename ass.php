<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="ass.css">

</head>

<?php

$contact = array(
    "phone" => '<i class="bi bi-telephone-fill"></i> 09915550931',
    "email" => '<i class="bi bi-envelope"></i> chiinatsu@gmail.com',
    "house" => '<i class="bi bi-house"></i> Kanagawa Profecture'

);


$name = array(
    "Name" => "Chinatsu Kano",
    "Course" => "Bachelor of Science in Information Technology",
);

$personal_info = array(
    "Age" => 18,
    "Nickname" => "Chii",
    "Birthday" => "August 26, 2006",
    "Height" => "162 cm",
    "Hair Color" => "Brown",
    "Eye Color" => "Brown",
    "Blood Type" => "A"

);

$school = array(
    "Elementary" => [
        "school" => "Yuiitsu Academy",
        "location" => "Tokyo, Japan",
        "sy" =>  "S.Y. 2011 - 2016"
    ],
    "Higschool" => [
        "school" =>  "Otonashi High School",
        "location" => "Kanagawa Prefecture, Japan",
        "sy" => "S.Y. 2016 - 2022"
    ],
    "College" => [
        "school" =>  "Ichinose University",
        "location" => "Chiba Prefecture, Japan",
        "sy" => "S.Y. 2022 - current"
    ]
);

?>

<body>
    <main class="d-flex align-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="cv-container row">
                <div class="col-6 col-md-4 p-3 left">
                    <div class="img-contact-container">
                        <div class="img-container mb-3">
                            <img src="img/chinastu.png" alt="" class="img-fluid">
                        </div>
                        <div class="contact-container">
                            <h4 class="text-center">Contacts</h4>
                            <?php
                            foreach ($contact as $key => $value) {
                                echo "<div>" . $value . "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-8 p-3">
                    <div class="info-container">
                        <div class="name-container pt-5">
                            <?php
                            echo "<h2>" . $name["Name"] . "</h2>";
                            echo  "<p>" . $name["Course"] . "</p>";
                            ?>
                        </div>

                        <div class="personal-info">
                            <h2>PERSONAL INFORMATION</h2>
                            <?php
                            foreach ($personal_info as $key => $value) {
                                echo "<div> <strong>" . $key . "</strong> " . $value . "</div>";
                            }
                            ?>
                        </div>

                        <div class="educ-info">
                            <h2>EDUCATIONAL ATTAINMENT:</h2>
                            <?php
                            foreach ($school as $key => $value) {
                                echo "<div> <p> <strong style='font-size: 25px;'>" . $key . "</strong> <br>" .  $value['school'] . '<br>'  . $value['location'] . "<br>"  . $value['sy'] . "</p>" . "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>