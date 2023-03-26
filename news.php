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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../../js/script.js"></script>
        
        <link rel="stylesheet" href="../../style/news.css">
        <link rel="stylesheet" href="../../style/navbar.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
    </head>
    <body>
        <div class = "navbar" id = "navbar"></div>

        <div class = "contain">
        <h1 style = "text-align: left; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">News</h1>
            
            <?php
                $conn = new mysqli("", "", "", "lrmdro_jboi");
                $sql = "SELECT * FROM news ORDER BY id desc";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div class = 'subcontain'>";
                            echo "<h3>".$row['titlu']."</h3>";
                            echo "<p class = 'data'>";
                                echo "<i class='fa fa-calendar' style='font-size:18px; margin-right: 10px;'></i>" . $row['data'];
                            echo "</p>";
                            echo "<p class = 'descriere'>".$row['descriere']."</p>  ";
                        echo"</div>";
                    }
                }else {
                    echo "<div class = 'subcontain'>";
                        echo "<h3>0 news</h3>";
                    echo"</div>";
                }   
            ?>
            
        </div>

    </body>
</html>