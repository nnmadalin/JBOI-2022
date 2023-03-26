<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

        <meta name="description" content="JBOI 2022 - News">
        <meta name="keywords" content="Junior Balkan Olympiad in Informatics, JBOI, jboi, Regina Maria Dorohoi, Regina Maria, jboi, jboi2022, JBOI2022, jboi-2022, olimpiada, Dorohoi, concurs, Balka, balcaniada, juniori, junior, boi, regina dorohoi, jboi dorohoi, olimpiada dorohoi, dorohoi">
        <meta name = "author" content = "Neauna Madalin">
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="../../js/script.js"></script>
        <link rel="stylesheet" href="../../style/conference.css">
        <link rel="stylesheet" href="../../style/navbar.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
        <script lang="text/javascript">
            function onSubmit(token) {
                document.getElementById("form_contact").submit();
            }
    </script>
    </head>
    <body>
        <div class = "navbar" id = "navbar"></div>
        <div class="center">
            <div class = "left">
                <h1 style = "text-align: left; margin-bottom: 30px; color: black; font-family: 'Poppins', sans-serif !important;">Conference</h1>

                <a><h4 style = "text-align: left; font-family: 'Poppins', sans-serif !important;">Download | Descarca</h1></a>
                <ul style = "margin-left: 40px">
                    <li style = "padding-right: 40px;">                
                        <a href = "../../document/Conference/invitație.pdf"><h6 >Invitation | Invitatie</h1></a>
                    </li>
                    <li style = "padding-right: 40px;"> 
                        <a href = "../../document/Conference/afiș.pdf"><h6 >Poster | Afis</h1></a>
                    </li>
                    <li> 
                        <a href = "../../document/Conference/regulament.pdf"><h6 >Rules | Regulament</h1></a>
                    </li>
                </ul>
                <div class="slideshow" id = "slideshow">
                    <div class="images">
                        <img class ="img_slide w3-animate-opacity" src="../../document/Conference/invitație-1.jpg">
                    </div>  
                </div>
            </div>
            <div class="right">
                <form id = "form_contact" action="../../register_auth/send_conference" method="post" enctype="multipart/form-data">
                  <label for="fname">Full Name | Nume complet:</label>
                  <input type="text" id="fname" name="fullname" placeholder="" required>

                  <label for="email">Email:</label>
                  <input type="text" id="email" name="email" placeholder="" required><br>

                  <label for="school">School | Scoala:</label>
                  <input type="text" id="school" name="school" placeholder="" required><br>
              
                  <label for="number">Phone number | Nr de telefon (OPTIONAL):</label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" id="number" name="number" placeholder=""><br>
                
                  
                  <input class="submit g-recaptcha" data-sitekey="6Lf4laQhAAAAAJCgLkvS7Bz1_XTzGEVb-k1JRo1K" data-callback="onSubmit" type = "submit" value="Submit">
                  
                  <?php
                    error_reporting(E_ERROR | E_PARSE);
                    if ($_GET['error'] == "1")
                    {
                        echo "<script>
                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Please enter a valid email! | Te rog introdu un email valid!',
                            });
                            
                            </script>";
                    }
                    else if ($_GET['error'] == "2")
                    {
                        echo "<script>
                            Swal.fire({
                            icon: 'question',
                            title: 'Nooo...',
                            text: 'The message has not been sent! | Mesajul nu a fost trimis!',
                        });
                        
                        </script>";
                    }
                    else if ($_GET['error'] == "3")
                    {
                        echo "<script>
                            Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'Fill in all the boxes! | Completați toate casetele!',
                        });
                        
                        </script>";
                    }
                    else if ($_GET['error'] == "0")
                    {
                        echo "<script>
                            Swal.fire({
                            icon: 'success',
                            title: 'Well done...',
                            text: 'Message sent! | Mesaj trimis!',
                        });
                        
                        </script>";
                    }
                  ?>
                </form>
            </div>
        </div>

        
    </body>
</html>