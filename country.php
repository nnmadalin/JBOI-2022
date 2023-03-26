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

        <link rel="icon" href="../../image/icon.png">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../../js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../style/navbar.css">
        <link rel="stylesheet" href="../../style/country.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
    </head>
    <body>
        <div class = "navbar" id = "navbar"></div>

        <?php
            if (!isset($_COOKIE['country'])){
                echo "<script>window.location.href='../../participants';</script>";
                exit;
            }
        ?>

        

        <div class="contain">
            <?php
                echo "<h1 style = 'text-align: center;margin: 0px; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>".$_COOKIE["country"]."</h1>";
            ?>
            <div class = "row">
                <a href="../../participants"><i class="fa fa-arrow-circle-left" style="font-size:48px; color: black; margin-right: 15px"></i></a>
                <break class = "break"></break>
                <?php
                    $country = $_COOKIE["country"];
                    if ($country == "Bosnia and Herzegovina")
                        $country = "Bosnia";
                    if ($country == "North Macedonia")
                        $country = "Macedonia";
                    if ($country == "Romania 1")
                        $country = "Romania1";
                    if ($country == "Romania 2")
                        $country = "Romania2";

                    $conn = new mysqli("", "", "", "lrmdro_jboi_user");    
                    $conn->connect_error;
                    $result = $conn->query("select * from $country where tip = 'team-leader'");
                    ob_end_clean();
                    if ($row = $result->fetch_assoc())
                    {
                        echo '  
                            <div class="card">
                                <div class="color clr1"></div>
                                <div class="description">
                                    <div class="photo"><img src = "../../upload/'.$country.'/team-leader.png" draggable="false"></div>
                                    <p class="name">'.$row["nume"].'</p>
                                    <p class = "type">Team Leader</p>
                                </div>
                            </div>
                        ';
                    }
                    $result = $conn->query("select * from $country where tip = 'team-deputy-leader'");
                    ob_end_clean();
                    if ($row = $result->fetch_assoc())
                    {
                        echo '
                            <div class="card">
                                <div class="color clr2"></div>
                                <div class="description">
                                    <div class="photo"><img src = "../../upload/'.$country.'/team-deputy-leader.png" draggable="false"></div>
                                    <p class="name">'.$row["nume"].'</p>
                                    <p class = "type">Team Deputy Leader</p>
                                </div>
                            </div>
                            
                        ';
                    }
                    $result = $conn->query("select * from $country where tip = 'contestant_1'");
                    ob_end_clean();
                    echo '<break class = "break"></break>';
                    if ($row = $result->fetch_assoc())
                    {
                        echo '
                            <div class="card">
                                <div class="color clr3"></div>
                                <div class="description">
                                    <div class="photo"><img src = "../../upload/'.$country.'/contestant_1.png" draggable="false"></div>
                                    <p class="name">'.$row["nume"].'</p>
                                    <p class = "type">Contestant 1</p>
                                </div>
                            </div>
                        ';
                    }
                    $result = $conn->query("select * from $country where tip = 'contestant_2'");
                    ob_end_clean();
                    if ($row = $result->fetch_assoc())
                    {
                        echo '
                            <div class="card">
                                <div class="color clr3"></div>
                                <div class="description">
                                    <div class="photo"><img src = "../../upload/'.$country.'/contestant_2.png" draggable="false"></div>
                                    <p class="name">'.$row["nume"].'</p>
                                    <p class = "type">Contestant 2</p>
                                </div>
                            </div>
                        ';
                    }
                    $result = $conn->query("select * from $country where tip = 'contestant_3'");
                    ob_end_clean();
                    if ($row = $result->fetch_assoc())
                    {
                        echo '
                            <div class="card">
                                <div class="color clr3"></div>
                                <div class="description">
                                    <div class="photo"><img src = "../../upload/'.$country.'/contestant_3.png" draggable="false"></div>
                                    <p class="name">'.$row["nume"].'</p>
                                    <p class = "type">Contestant 3</p>
                                </div>
                            </div>
                        ';
                    }
                    $result = $conn->query("select * from $country where tip = 'contestant_4'");
                    ob_end_clean();
                    if ($row = $result->fetch_assoc())
                    {
                        echo '
                            <div class="card">
                                <div class="color clr3"></div>
                                <div class="description">
                                    <div class="photo"><img src = "../../upload/'.$country.'/contestant_4.png" draggable="false"></div>
                                    <p class="name">'.$row["nume"].'</p>
                                    <p class = "type">Contestant 4</p>
                                </div>
                            </div>
                        ';
                    }

                ?> 
            </div>
        </div>


    </body>
</html>