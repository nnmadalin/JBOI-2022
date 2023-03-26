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

        <meta name="description" content="JBOI 2022 - ADMIN">
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
    </head>
    <body>
        <div class = "navbar" id = "navbar"></div>
        <div class = "center">
            <h1 style = "text-align: left; margin-bottom: 30px; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">ADMIN</h1>
            <?php
                
                    if ($_SESSION["admin"] != "####")
                    {
                        
                        echo '<form class = "login" id = "login" style = "margin: 0 auto; padding-top: 50px" action="../../register_auth/admin_auth.php" method="get">';
                            echo '<div class="form-field">';
                                echo '<input type="password" placeholder="Password" name="password" id = "password-field" required/>';             
                            echo '</div>';
                                
                            echo '<div class="form-field">';
                                echo '<button class="btn g-recaptcha" type = "submit">Log in</button>'; //disabled
                                echo '<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>';
                            echo '</div>';
                            
                        echo '</form>';
                    }
                    else{
                        echo'
                            <form action="../../register_auth/logout-admin.php" method="post">
                                <input type="submit" name="submit" id="submit" class="btn" value="Log out" style = "padding: 10px; border-radios: 5px"/>
                            </form>
                            <form action="../../register_auth/addnews" method="post" enctype="multipart/form-data" style = "margin: 10px!important">
                                <fieldset style = "margin: 0!important">
                                    <legend style = "font-size: 30px">Add News</legend>
                                

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="title">Title: </label>
                                            <input type="text" class="form-input" name="title" id="title" required/>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea type="text" class="form-input" name="description" id="description" required/></textarea>
                                    </div>    
                                    <div class="form-group submitform">
                                    
                                        <input type="submit" name="submit" id="submit" class="btn" value="Submit" style = "float:right; padding: 10px; border-radios: 5px; margin-left: 20px;"/>
                                    
                                    </div>        
                                </fieldset>        
                            </form>
                            <table id="tblData" style = "margin-top: 50px">
                                <tr>
                                    <th>Nume</th>
                                    <th>Email</th>
                                    <th>Scoala</th>
                                    <th>Telefon</th>
                                </tr>
                        ';
                        $conn = new mysqli("", "", "", "lrmdro_jboi");    
                        $conn->connect_error;
                        $result = $conn->query("select * from conference ");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr>
                                        <td>'.$row["nume"].'</td>
                                        <td>'.$row["email"].'</td>
                                        <td>'.$row["school"].'</td>
                                        <td>'.$row["phone"].'</td>
                                    </tr>
                                ';   
                            }
                        }
                        
                        echo '</table>';
                        echo '<button  onclick="exportTableToExcel()">Export table</button>';
                    }
                    
                ?>   
                
                <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        }

                        td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                        }

                        tr:nth-child(even) {
                        background-color: #dddddd;
                        }
                </style>
                    
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
                           text: 'Wrong password!',
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