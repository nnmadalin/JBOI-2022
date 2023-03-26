<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="f-5vHKiOD_NPjGPw3UobSXtq_jUDf9EwHe66Ix3MXRU" />
    <meta name="title" content="Junior Balkan Olympiad in Informatics - 2022 | Regina Maria Dorohoi High School">
    <meta name="description" content="Junior Balkan Olympiad in Informatics - 2022 | Regina Maria Dorohoi High School | Dorohoi, Botosani, ROMANIA">
    <meta name="keywords" content="Junior Balkan Olympiad in Informatics, JBOI, jboi, Regina Maria Dorohoi, Regina Maria, jboi, jboi2022, JBOI2022, jboi-2022, olimpiada, Dorohoi, concurs, Balka, balcaniada, juniori, junior, boi, regina dorohoi, jboi dorohoi, olimpiada dorohoi, dorohoi">
    <meta name="author" content="Neauna Madalin">
    <link rel="icon" href="../../image/icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>

    <link rel="stylesheet" href="../../style/index.css">
    <link rel="stylesheet" href="../../style/navbar.css">
    <link rel="stylesheet" href="../../style/carusel.css">
    <title>JBOI - 2022</title>
    <script>
        $(function() {
            $("#navbar").load("../../include/navbar.html");
            $("#cookies").load("../../include/cookies.html");
        });
    </script>
</head>

<body>
    <div class="navbar" id="navbar"></div>

    <div class="slideshow" id="slideshow">
        <div class="contain_title">
            <h1 class="title">- JBOI 2022 -</h1>
            <h1 class="title">Junior Balkan Olympiad in Informatics</h1>
            <h1 class="title sub1">Dorohoi • Romania</h1>
            <h1 class="title sub2">Dorohoi Romania</h1>
        </div>
        <div class="fade"></div>
        <div class="images">
            <img class="img_slide w3-animate-opacity" src="../../image/img1.jpg">
            <img class="img_slide w3-animate-opacity" src="../../image/img2.jpg">
            <img class="img_slide w3-animate-opacity" src="../../image/img3.jpg">
            <img class="img_slide w3-animate-opacity" src="../../image/img4.jpg">
            <img class="img_slide w3-animate-opacity" src="../../image/img5.jpg">
        </div>
    </div>

    <script>
        var myIndex = 0;
        carousel();
        var ok = 1;

        function carousel() {
            var i;
            var x = document.getElementsByClassName("img_slide");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 5000);
        }
    </script>
    <div class="section" style="margin-bottom: 0px;">
        <h1 style="text-align: center; color: black;  font-family: 'Roboto';font-size: 45px;font-weight: 600;  margin: 0">Last News</h1>
    </div>
    <div class="lastnews" style="margin-botom: 50px; background: #ededed;;">
        <?php
        $conn = new mysqli("", "", "", "lrmdro_jboi");
        $sql = "SELECT * FROM news ORDER BY id desc";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            if ($row = $result->fetch_assoc()) {
                echo "<div class = 'subcontain'>";
                echo "<h3>" . $row['titlu'] . "</h3>";
                echo "<p class = 'data'>";
                echo "<i class='fa fa-calendar' style='font-size:18px; margin-right: 10px;'></i>" . $row['data'];
                echo "</p>";
                echo "<p class = 'descriere1'>" . $row['descriere'] . "</p>  ";
                echo "</div>";
            }
        } else {
            echo "<div class = 'subcontain'>";
            echo "<h3>0 news</h3>";
            echo "</div>";
        }

        ?>
    </div>

    <div class="gre">
        <div class="section" style=" background: transparent;;">
            <h1 style="text-align: center; margin-bottom: 50px; color: black;  font-family: 'Roboto';font-size: 45px;font-weight: 600;  margin: 0;">About</h1>
        </div>
        <div class="descriere" style="padding-top:30px">
            <div class="left1">
                <div class="image" style="background-image:url('../../image/timeline/pc.png')"></div>
                <h4 class="subtitle">What?</h4>
                <p>
                    <b>Junior Balkan Olympiad in Informatics (JBOI)</b> is a programming contest for secondary school students from countries around or close to the Balkan Peninsula. About 76 contestants from 19 countries compete against each other, solving difficult problems of algorithmic nature. Each participating country sends 4 contestants from their national olympiads which take place in the months beforehand.
                </p>
            </div>
            <div class="center1">
                <div class="image" style="background-image:url('../../image/timeline/travel.png')"></div>
                <h4 class="subtitle">Where?</h4>
                <p>
                    This year, <b>Junior Balkan Olympiad in Informatics</b> takes place in <b>Romania</b>, more precisely in <b>Dorohoi, Botosani, at Regina Maria High School</b>!
                </p>
            </div>
            <div class="right1">
                <div class="image" style="background-image:url('../../image/timeline/clock.png')"></div>
                <h4 class="subtitle">When?</h4>
                <p>
                    <b>Junior Balkan Olympiad in Informatics</b> takes place between <b>August 28 and September 3</b>!
                </p>
            </div>
        </div>
    </div>

    <div class="section" style="margin-bottom: 0px;">
        <h1 style="text-align: center;color: black; font-family: 'Roboto';font-size: 45px;font-weight: 600; margin: 0">About Dorohoi</h1>
    </div>
    <div class="welcome" style=" background: #ededed;;">
        <div class="left">
            <img src="../../image/city.jpg" class="logo-welcome" draggable="false">
        </div>

        <div class="right">
            <p class="paragraf">
                Welcome to <a href="https://goo.gl/maps/EdF5iEgBu6QLLPJQ6">Dorohoi</a>, <a href="https://goo.gl/maps/pmBgqb3udG5LS3gL7">Botosani</a> County, Romania!<br><br>
                <b><a href="https://goo.gl/maps/EdF5iEgBu6QLLPJQ6">Dorohoi</a></b> is a municipality in Botosani County, Romania. It is located on the banks of the Jijia River, 36 km from Botoșani, which is the county seat of the same name.<br><br>
                The city of <a href="https://goo.gl/maps/EdF5iEgBu6QLLPJQ6">Dorohoi</a> is located <b>50 kilometers</b> from <a href="https://goo.gl/maps/zvt34hX3X5VHpYiD6">Suceava International Airport</a>, and <b> 150 kilometers </b> from <a href="https://goo.gl/maps/YAfSfCjvhjFzqhQ57"> Iasi International Airport</a>!
            </p>
        </div>
    </div>
    <iframe style="border: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42760.28231747637!2d26.36813122694754!3d47.9457133702992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473461dd06a600e7%3A0xef9fe051d63f98aa!2sDorohoi%20715200!5e0!3m2!1sen!2sro!4v1658176463431!5m2!1sen!2sro" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="section" style="margin-top: 0px; background: transparent; margin-bottom: 0px;">
        <h1 style="text-align: center; color: black; font-family: 'Roboto';font-size: 45px;font-weight: 600;  margin: 0">Sponsors</h1>
    </div>
    <div class="customer-logos">
        <div class="slide" onClick="window.open('https://www.bitdefender.ro','_blank');"><img src="/image/sponsori/bitdefender.png"></div>
        <div class="slide" onClick="window.open('https://www.francu.org','_blank');"><img src="/image/sponsori/francu.png"></div>
        <div class="slide" onClick="window.open('https://europeandrinks.ro/portfolio-item/izvorul-minunilor/','_blank');"><img src="/image/sponsori/izvor.png"></div>
        <div class="slide" onClick="window.open('https://chrome.ro/','_blank');"><img src="/image/sponsori/chrome.png"></div>
        <div class="slide" onClick="window.open('https://www.ecdl.ro/','_blank');"><img src="/image/sponsori/ecdl.png"></div>
        <div class="slide" onClick="window.open('https://www.intuitext.ro/','_blank');"><img src="/image/sponsori/intuitext.png"></div>
        <div class="slide" onClick="window.open('https://www.symmetrica.ro/','_blank');"><img src="/image/sponsori/symmetrica.png"></div>
    </div>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>


    <div class="space"></div>
    <div class="bottom">
        <p class="aboutt">© 2022 • All rights reserved. • Made by: <a class="linkk">Neauna Madalin</a></p>
    </div>


</body>

</html>