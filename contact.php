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

        <meta name="description" content="JBOI 2022 - Contact">
        <meta name="keywords" content="Junior Balkan Olympiad in Informatics, JBOI, jboi, Regina Maria Dorohoi, Regina Maria, jboi, jboi2022, JBOI2022, jboi-2022, olimpiada, Dorohoi, concurs, Balka, balcaniada, juniori, junior, boi, regina dorohoi, jboi dorohoi, olimpiada dorohoi, dorohoi">
        <meta name = "author" content = "Neauna Madalin">
        <link rel="icon" href="../../image/icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="../../js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <link rel="stylesheet" href="../../style/navbar.css">
        <link rel="stylesheet" href="../../style/contact.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
    </head>
    <body>
        <script lang="text/javascript">
                function onSubmit(token) {
                    document.getElementById("form_contact").submit();
                }
        </script>

        
        <div class = "navbar" id = "navbar"></div>
        
        <div class="center">
            <div class = "left">
                <h1 style = "text-align: left; margin-bottom: 50px; color: black; font-family: 'Poppins', sans-serif !important;">Contact</h1>
                <h3>Email: <b>contact@jboi2022.lrmd.ro</b></h3>
                <h3>Website: <a href = "https://jboi2022.lrmd.ro" class = "link" ><b>jboi2022.lrmd.ro</b></a></h3>
                <iframe class = "harta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d668.1980279169413!2d26.40699313701944!3d47.940404832421116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47348a7c4dccc821%3A0x9ab7f499a44b1f33!2sLiceul%20%22Regina%20Maria%22%20Dorohoi!5e0!3m2!1sro!2sro!4v1654365136843!5m2!1sro!2sro" width="100" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  style='pointer-events: none;'></iframe>
            </div>
            <div class="right">
                <form id = "form_contact" action="../../register_auth/send" method="post" enctype="multipart/form-data">
                  <label for="fname">Full Name</label>
                  <input type="text" id="fname" name="fullname" placeholder="Full Name:" required>

                  <label for="email">Email:</label>
                  <input type="text" id="email" name="email" placeholder="Email:" required><br>
              
                  <label for="country">Country:</label>
                  <select id="country" name="country">
                    <option value="None">None</option>
                    <option value="Albania">Albania</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Greece">Greece</option>
                    <option value="North Macedonia">North Macedonia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Romania">Romania</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Italy">Italy</option>
                    <option value="Georgia">Georgia</option>
                  </select>
                  
                  <label for="title">Title</label>
                  <input type="text" id="title" name="title" placeholder="Title:" required>

                  <label for="subject">Subject:</label>
                  <textarea id="subject" name="subject" placeholder="Subject.." style="height:100px" required></textarea>
                  
                  <input class="submit g-recaptcha" data-sitekey="6LfDsTohAAAAAPqgwh4vdy_g7GCJYKmtd8BByT9p" data-callback="onSubmit" type = "submit" value="Submit">
                  <?php
                    error_reporting(E_ERROR | E_PARSE);
                    if ($_GET['error'] == "1")
                    {
                        echo "<script>
                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Please enter a valid email!',
                            });
                            
                            </script>";
                    }
                    else if ($_GET['error'] == "2")
                    {
                        echo "<script>
                            Swal.fire({
                            icon: 'question',
                            title: 'Nooo...',
                            text: 'The message has not been sent!',
                        });
                        
                        </script>";
                    }
                    else if ($_GET['error'] == "3")
                    {
                        echo "<script>
                            Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'Fill in all the boxes!',
                        });
                        
                        </script>";
                    }
                    else if ($_GET['error'] == "0")
                    {
                        echo "<script>
                            Swal.fire({
                            icon: 'success',
                            title: 'Well done...',
                            text: 'Message sent!',
                        });
                        
                        </script>";
                    }
                  ?>
                </form>
            </div>
        </div>
        
    </body>
</html>