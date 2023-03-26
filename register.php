<?php
// Start the session
session_start();
?>
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

        <meta name="description" content="JBOI 2022 - Register">
        <meta name="keywords" content="Junior Balkan Olympiad in Informatics, JBOI, jboi, Regina Maria Dorohoi, Regina Maria, jboi, jboi2022, JBOI2022, jboi-2022, olimpiada, Dorohoi, concurs, Balka, balcaniada, juniori, junior, boi, regina dorohoi, jboi dorohoi, olimpiada dorohoi, dorohoi">
        <meta name = "author" content = "Neauna Madalin">
        <link rel="icon" href="../../image/icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../../js/script.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="../../style/navbar.css">
        
        <link rel="stylesheet" href="../../style/register.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
        <script>
        function onSubmit(token) {
            document.getElementById("login").submit();
        }
        </script>
    </head>
    <body>
        <div class = "navbar" id = "navbar"></div>
        <div class = "center">
            <h1 style = "text-align: left; margin-bottom: 30px; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Register</h1>
            <h3 style = "text-align: center; color: black; font-size: 17px; font-family:'Franklin Gothic Medium'!important, 'Arial Narrow', Arial, sans-serif;"><b>JBOi registration is closed!</b></h3>  
            <!--<h3 style = "text-align: center; color: black; font-size: 17px; font-family:'Franklin Gothic Medium'!important, 'Arial Narrow', Arial, sans-serif;">Please fill in the form below for all your teammates! The registration of the teams is maximum until <b>10 August 2022.</b></h3>        -->   
            <!--<h3 style = "text-align: center; margin-bottom: 30px; color: black; font-size: 17px; font-family:'Franklin Gothic Medium'!important, 'Arial Narrow', Arial, sans-serif;">If there are any problems with the online form, please fill in the document ~ <b><a href = "../../document/Formular.doc">CLICK HERE</a></b> ~ and send it to the email address: <b>opritapetru@gmail.com</b></h3>-->
            <!--        <h1 style = "text-align: center; margin-bottom: 30px; color: black; font-size: 17px; font-family:'Franklin Gothic Medium'!important, 'Arial Narrow', Arial, sans-serif;">FORM CURRENTLY OFF.</h1>           -->
            <?php
                $first = false;
                $tara = "";
                $connect = 0;
                if ($first == false){
                    
                    $first = true;

                    if (isset($_SESSION["auth"]))
                    {
                        $pass =  $_SESSION["auth"];
                        $hash = md5($pass);
                        $conn = new mysqli("", "", "", "lrmdro_jboi");    
                        $conn->connect_error;
                        $sql = "select * from users where password = '$hash'";
                        $res = mysqli_query($conn, $sql);
                        if($res->num_rows > 0){
                            if($row = $res->fetch_assoc()) {
                                $connect = 1;
                                $tara = $row['user'];
                            }
                            else
                                $connect = 0;
                        }
                        else
                            $connect = 0;
                    }
                    else  
                        $connect = 0;
                    /*
                    if ($connect == 0)
                    {
                        
                        echo '<form class = "login" id = "login" style = "margin: 0 auto; padding-top: 50px" action="../../register_auth/auth" method="post"  enctype="multipart/form-data">';
                            echo '<div class="form-field">';
                                echo '<input type="user" placeholder="Username" name="user" required/>';
                            echo '</div>';
                                
                            echo '<div class="form-field">';
                                echo '<input type="password" placeholder="Password" name="password" id = "password-field" required/>';             
                            echo '</div>';
                                
                            echo '<div class="form-field">';
                                echo '<button class="btn g-recaptcha" data-sitekey="6LdwrDohAAAAALYEWoige-SPTnfZc1Nd_8kl2Nj1" data-callback="onSubmit">Log in</button>'; //disabled
                                echo '<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>';
                            echo '</div>';
                            
                        echo '</form>';
                    }
                    else{
                        echo'
                            <h3 style = "text-align: center; margin-bottom: 0px; color: black; font-size: 17px; font-family:"Franklin Gothic Medium"!important, "Arial Narrow", Arial, sans-serif;"><b>Important:</b> you can add a user more than once. The last record will be saved!</h3>
                            <form action="../../register_auth/logout" method="post">
                                <input type="submit" name="submit" id="submit" class="btn" value="Log out" style = "padding: 10px; border-radios: 5px"/>
                            </form>
                            <form action="../../register_auth/insert_db" method="post" enctype="multipart/form-data" style = "margin: 10px!important">
                                <fieldset style = "margin: 0!important">
                                    <legend style = "font-size: 30px">Add</legend>
                                    <div class="form-row" style = "margin-bottom: 30px">
                                        <label for="type">Choose type:</label>

                                        <select name="tip" id="tip" class="form-input">
                                            <option value="team-leader">Team leader</option>
                                            <option value="team-deputy-leader">Team deputy leader</option>
                                            <option value="contestant_1">Contestant 1</option>
                                            <option value="contestant_2">Contestant 2</option>
                                            <option value="contestant_3">Contestant 3</option>
                                            <option value="contestant_4">Contestant 4</option>
                                        </select>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="first_name">Full name: </label>
                                            <input type="text" class="form-input" name="first_name" id="first_name" required/>
                                        </div>
                                        <div class="form-group form-icon">
                                            <label for="birth_date">Birth date: </label>
                                            <input type="date" class="form-input" name="birth_date" id="birth_date"  required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-radio frm1">
                                            <label for="gender">Gender</label>
                                            <div class="form-flex">
                                                <input class = "rest" type="radio" name="gender" value="male" id="male" checked="checked" />
                                                <label class = "rest" for="male">Male</label>
                    
                                                <input class = "rest"  type="radio" name="gender" value="female" id="female" />
                                                <label class = "rest" for="female">Female</label>
                                            </div>
                                        </div>
                                        <div class="form-radio frm2">
                                            <label for="tshirt">T-shirt size</label>
                                            <div class="form-flex">
                                                <input class = "rest"  type="radio" name="size" value="s" id="s" checked="checked" />
                                                <label class = "rest" for="s">S</label>
                    
                                                <input class = "rest"  type="radio" name="size" value="m" id="m" />
                                                <label class = "rest" for="m">M</label>
                                        
                                                <input class = "rest"  type="radio" name="size" value="l" id="l" />
                                                <label class = "rest" for="l">L</label>
                    
                                                <input class = "rest"  type="radio" name="size" value="xl" id="xl" />
                                                <label class = "rest" for="xl">XL</label>
                
                                                <input class = "rest"  type="radio" name="size" value="xxl" id="xxl" />
                                                <label class = "rest" for="xxl">XXL</label>
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comments">Comments (food preferences, allergies, etc)</label>
                                        <input type="text" class="form-input" name="comments" id="comments" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">Upload photo!</label>
                                        <input type = "file" name = "img_upload" accept="image/*" required/> 
                                    </div>
                                    <div class="form-group submitform">
                                    
                                        <input type="submit" name="submit" id="submit" class="btn" value="Submit" style = "float:right; padding: 10px; border-radios: 5px; margin-left: 20px;"/>
                                    
                                    </div>           
                                </fieldset>        
                            </form>
                        ';
                        
                    }
                }*/
                    
                ?>       
                <?php
                   if ($_GET['error']== "1")
                   {
                       echo "<script>
                           Swal.fire({
                           icon: 'question',
                           title: 'Oops...',
                           text: 'Something went wrong. If the problem persists, please send us a message!',
                       });
                       
                       </script>";
                   }
                   if ($_GET['error']== "2")
                   {
                       echo "<script>
                           Swal.fire({
                           icon: 'info',
                           title: 'Hmmm...',
                           html: 'Please add only <b>png</b>, <b>jpg</b> or <b>jpeg</b> files!',
                       });
                       
                       </script>";
                   }
                   if ($_GET['error']== "3")
                   {
                       echo "<script>
                           Swal.fire({
                           icon: 'warning',
                           title: 'Hmmm...',
                           html: 'We accept files of maximum <b>5 mb</b>!',
                       });
                       
                       </script>";
                   }
                   if ($_GET['error']== "4")
                   {
                        echo "<script>
                            Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'Fill in all the boxes!',
                        });
                        
                        </script>";
                   }
                   if ($_GET['error']== "5")
                   {
                       echo "<script>
                           Swal.fire({
                           icon: 'error',
                           title: 'Problems...',
                           text: 'Wrong username or password!',
                       });
                       
                       </script>";
                   }
                   if ($_GET['error']== "0")
                   {
                       echo "<script>
                           Swal.fire({
                           icon: 'success',
                           title: 'Well done...',
                           text: 'Added successfully!',
                       });
                       
                       </script>";
                   }
                ?>
                
            <script>
            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr("type", "text");
                } else {
                input.attr("type", "password");
                }
                });
            </script>
        </div>
    </body>
</html>